<?php

namespace App\Providers;

use App\Models\User;
use App\Settings\KaidoSetting;
use Filament\Support\Facades\FilamentView;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        parent::register();
        FilamentView::registerRenderHook('panels::body.end', fn(): string => Blade::render("@vite('resources/js/app.js')"));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!app()->runningInConsole() && Schema::hasTable('settings')) {
            try {
                $settingsExist = \DB::table('settings')->where('group', 'KaidoSetting')->exists();
                
                if ($settingsExist) {
                    $settings = app(KaidoSetting::class);
                }
            } catch (\Exception $e) {
                logger()->warning('Settings belum tersedia: ' . $e->getMessage());
            }
        }
        
        //
        Gate::define('viewApiDocs', function (User $user) {
            return true;
        });
        Livewire::setScriptRoute(function ($handle) {
            return Route::get('/vendor/livewire/livewire.js', $handle);
        });
        // Gate::policy()
        Event::listen(function (\SocialiteProviders\Manager\SocialiteWasCalled $event) {
            $event->extendSocialite('discord', \SocialiteProviders\Google\Provider::class);
        });
    }
}
