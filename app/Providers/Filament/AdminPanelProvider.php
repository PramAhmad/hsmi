<?php
// filepath: /home/astacode/Documents/project/hsmi/app/Providers/Filament/AdminPanelProvider.php

namespace App\Providers\Filament;

use App\Filament\Pages\Dashboard;
use App\Filament\Pages\Login;
use App\Filament\Pages\MySocial;
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
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login(Login::class)
            ->registration(false) // Disabled by default untuk HMSI
            ->passwordReset()
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
                SetTheme::class,
            ])
            ->sidebarCollapsibleOnDesktop(true)
            ->authMiddleware([
                Authenticate::class,
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
            // Skip shield if tables don't exist yet
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

        // Add Socialite Plugin only if needed (disabled by default for HMSI)
        if ($this->shouldEnableSocialite()) {
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
     * Check if socialite should be enabled
     */
    private function shouldEnableSocialite(): bool
    {
        try {
            // Check if settings table exists and has data
            if (!Schema::hasTable('settings')) {
                return false;
            }

            $settingsExist = \DB::table('settings')
                ->where('group', 'KaidoSetting')
                ->where('name', 'sso_enabled')
                ->exists();

            if (!$settingsExist) {
                return false;
            }

            $settings = app(KaidoSetting::class);
            return $settings->sso_enabled ?? false;

        } catch (\Exception $e) {
            return false; // Default disabled
        }
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
        
        if ($user->wasRecentlyCreated) {
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
        }

        $user->save();
        return $user;
    }
}