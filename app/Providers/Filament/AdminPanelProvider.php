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
use Illuminate\Support\Facades\Schema;

class AdminPanelProvider extends PanelProvider
{
    private ?KaidoSetting $settings = null;
    
    public function __construct()
    {
        $this->settings = $this->loadSettingsSafely();
    }

    /**
     * Safely load settings with comprehensive checks
     */
    private function loadSettingsSafely(): ?KaidoSetting
    {
        try {
            // Skip loading during console commands that don't need settings
            if (app()->runningInConsole()) {
                $command = $_SERVER['argv'][1] ?? '';
                $skipCommands = ['migrate', 'migrate:fresh', 'migrate:rollback', 'db:seed', 'optimize', 'config:cache'];
                
                if (in_array($command, $skipCommands)) {
                    return null;
                }
            }

            // Check if settings table exists
            if (!Schema::hasTable('settings')) {
                return null;
            }

            // Check if all required KaidoSetting properties exist in database
            $requiredSettings = [
                'site_name',
                'site_description', 
                'site_active',
                'registration_enabled',
                'login_enabled',
                'password_reset_enabled',
                'sso_enabled',
                'maintenance_mode',
                'contact_email',
                'instagram_url',
                'facebook_url', 
                'twitter_url',
                'linkedin_url'
            ];

            $existingSettings = \DB::table('settings')
                ->where('group', 'KaidoSetting')
                ->pluck('name')
                ->toArray();

            $missingSettings = array_diff($requiredSettings, $existingSettings);
            
            if (!empty($missingSettings)) {
                logger()->warning('Missing KaidoSetting properties: ' . implode(', ', $missingSettings));
                return null;
            }

            // Only now try to load the actual settings
            return app(KaidoSetting::class);

        } catch (\Exception $e) {
            logger()->warning('Failed to load KaidoSetting: ' . $e->getMessage());
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
            ->plugins($this->getPlugins())
            ->databaseNotifications();
    }

    private function getPlugins(): array
    {
        $plugins = [
            ThemesPlugin::make(),
            ApiServicePlugin::make(),
        ];

        // Add Shield Plugin with safe loading
        try {
            if (Schema::hasTable('permissions') && Schema::hasTable('roles')) {
                $plugins[] = FilamentShieldPlugin::make();
            }
        } catch (\Exception $e) {
            logger()->warning('Failed to load FilamentShield: ' . $e->getMessage());
        }

        // Add Breezy Plugin
        try {
            $plugins[] = BreezyCore::make()
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
                        ->directory('avatars')
                )
                ->enableTwoFactorAuthentication();
        } catch (\Exception $e) {
            logger()->warning('Failed to load BreezyCore: ' . $e->getMessage());
        }

        // Add Socialite Plugin only if settings allow it
        if ($this->getSetting('sso_enabled', false)) {
            try {
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
                        return $this->createUserFromSocialite($oauthUser);
                    });
            } catch (\Exception $e) {
                logger()->warning('Failed to load FilamentSocialite: ' . $e->getMessage());
            }
        }
        
        return $plugins;
    }

    /**
     * Create user from socialite data
     */
    private function createUserFromSocialite(SocialiteUserContract $oauthUser): User
    {
        $user = User::firstOrNew([
            'email' => $oauthUser->getEmail(),
        ]);

        $user->name = $oauthUser->getName();
        $user->email = $oauthUser->getEmail();
        $user->email_verified_at = now();
        $user->save();

        // Assign default role untuk user baru dari SSO
        try {
            if (Schema::hasTable('roles')) {
                $defaultRole = \Spatie\Permission\Models\Role::where('name', 'pengurus')->first();
                if ($defaultRole) {
                    $user->assignRole($defaultRole);
                }
            }
        } catch (\Exception $e) {
            logger()->warning('Failed to assign default role: ' . $e->getMessage());
        }

        return $user;
    }
}
