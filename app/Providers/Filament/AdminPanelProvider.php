<?php

namespace App\Providers\Filament;

use App\Filament\Pages\Dashboard;
use App\Filament\Pages\Login;
use App\Filament\Pages\MySocial;
use App\Filament\Widgets\JournalPublicationYearChart;
use App\Filament\Widgets\MenfessMonthlyChart;
use App\Filament\Widgets\MenfessStatusChart;
use App\Livewire\MySocial as LivewireMySocial;
use App\Models\User;
use App\Settings\KaidoSetting;
use Filament\Http\Middleware\Authenticate;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use DutchCodingCompany\FilamentSocialite\FilamentSocialitePlugin;
use DutchCodingCompany\FilamentSocialite\Provider;
use Filament\Forms\Components\FileUpload;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Hasnayeen\Themes\Http\Middleware\SetTheme;
use Hasnayeen\Themes\ThemesPlugin;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Jeffgreco13\FilamentBreezy\BreezyCore;
use Rupadana\ApiService\ApiServicePlugin;

use Laravel\Socialite\Contracts\User as SocialiteUserContract;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Schema;

class AdminPanelProvider extends PanelProvider
{
    private ?KaidoSetting $settings = null;
    
    public function __construct()
    {
        // Safely load settings with multiple checks
        $this->settings = $this->loadSettingsSafely();
    }

    /**
     * Safely load settings with proper error handling
     */
    private function loadSettingsSafely(): ?KaidoSetting
    {
        try {
            // Skip loading settings during console commands that don't need them
            if (app()->runningInConsole()) {
                $command = $_SERVER['argv'][1] ?? '';
                $skipCommands = ['optimize', 'config:cache', 'route:cache', 'view:cache', 'migrate', 'db:seed'];
                
                if (in_array($command, $skipCommands)) {
                    return null;
                }
            }

            // Check if settings table exists
            if (!Schema::hasTable('settings')) {
                return null;
            }

            // Check if settings table has correct structure
            if (!Schema::hasColumn('settings', 'name') || !Schema::hasColumn('settings', 'payload')) {
                return null;
            }

            // Check if KaidoSetting data exists
            $settingsExist = \DB::table('settings')
                ->where('group', 'KaidoSetting')
                ->exists();

            if (!$settingsExist) {
                return null;
            }

            // Only now try to load the actual settings
            return app(KaidoSetting::class);

        } catch (\Exception $e) {
            // Log the error but don't break the application
            if (!app()->runningInConsole()) {
                logger()->warning('Failed to load KaidoSetting in AdminPanelProvider: ' . $e->getMessage());
            }
            return null;
        }
    }

    /**
     * Get setting value with fallback
     */
    private function getSetting(string $key, $default = null)
    {
        if ($this->settings === null) {
            return $default;
        }

        try {
            return $this->settings->$key ?? $default;
        } catch (\Exception $e) {
            return $default;
        }
    }

    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->when($this->getSetting('login_enabled', true), fn($panel) => $panel->login(Login::class))
            ->when($this->getSetting('registration_enabled', false), fn($panel) => $panel->registration())
            ->when($this->getSetting('password_reset_enabled', true), fn($panel) => $panel->passwordReset())
            ->emailVerification()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
               Dashboard::class,
            ])
            ->navigationGroups([
                'Akademik',
                'Make Fun',
                'User & Permissions',
                'Komunikasi',
                'Pengaturan',
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->sidebarCollapsibleOnDesktop(true)
            ->authMiddleware([
                Authenticate::class,
            ])
            ->middleware([
                SetTheme::class
            ])
            ->plugins(
                $this->getPlugins()
            )
            ->databaseNotifications();
    }

    private function getPlugins(): array
    {
        $plugins = [
            ThemesPlugin::make(),
            FilamentShieldPlugin::make(),
            ApiServicePlugin::make(),
            BreezyCore::make()
                ->myProfile(
                    shouldRegisterUserMenu: true,
                    shouldRegisterNavigation: true,
                    navigationGroup: 'Pengaturan',
                    hasAvatars: true,
                    slug: 'my-profile',
                )
                ->myProfileComponents([
                     LivewireMySocial::class,
                ])
                ->avatarUploadComponent(fn($fileUpload) => $fileUpload->disableLabel())
                ->avatarUploadComponent(
                    fn() => FileUpload::make('avatar_url')
                        ->image()
                        ->disk('public')
                )
                ->enableTwoFactorAuthentication(),
        ];
        
        // Only add SSO if settings allow it and settings are available
        if ($this->getSetting('sso_enabled', false)) {
            $plugins[] = FilamentSocialitePlugin::make()
                ->providers([
                    Provider::make('google')
                        ->label('Google')
                        ->icon('fab-google')
                        ->color(Color::hex('#2f2a6b'))
                        ->outlined(true)
                        ->stateless(false)
                ])
                ->registration(true)
                ->createUserUsing(function (string $provider, SocialiteUserContract $oauthUser, FilamentSocialitePlugin $plugin) {
                    $user = User::firstOrNew([
                        'email' => $oauthUser->getEmail(),
                    ]);
                    $user->name = $oauthUser->getName();
                    $user->email = $oauthUser->getEmail();
                    $user->email_verified_at = now();
                    $user->save();
                    return $user;
                });
        }
        
        return $plugins;
    }
}
