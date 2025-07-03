<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class KaidoSetting extends Settings
{
    public string $site_name;
    public string $site_description;
    public bool $site_active;
    public bool $registration_enabled;
    public bool $login_enabled;
    public bool $password_reset_enabled;
    public bool $sso_enabled;
    public bool $maintenance_mode;
    public string $contact_email;
    public string $instagram_url;
    public string $facebook_url;
    public string $twitter_url;
    public string $linkedin_url;

    public static function group(): string
    {
        return 'KaidoSetting';
    }

    public static function encrypted(): array
    {
        return [];
    }
}
