<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('KaidoSetting.site_name', 'HMSI Unsil');
        $this->migrator->add('KaidoSetting.site_description', 'Himpunan Mahasiswa Sistem Informasi Universitas Siliwangi');
        $this->migrator->add('KaidoSetting.site_active', true);
        $this->migrator->add('KaidoSetting.registration_enabled', false); // Sesuai dengan halaman register yang belum dibuka
        $this->migrator->add('KaidoSetting.login_enabled', true);
        $this->migrator->add('KaidoSetting.password_reset_enabled', true);
        $this->migrator->add('KaidoSetting.sso_enabled', false);
        $this->migrator->add('KaidoSetting.maintenance_mode', false);
        $this->migrator->add('KaidoSetting.contact_email', 'info@hmsiunsil.ac.id');
        $this->migrator->add('KaidoSetting.instagram_url', 'https://instagram.com/hmsi_unsil');
        $this->migrator->add('KaidoSetting.facebook_url', 'https://facebook.com/hmsi.unsil');
        $this->migrator->add('KaidoSetting.twitter_url', 'https://twitter.com/hmsi_unsil');
        $this->migrator->add('KaidoSetting.linkedin_url', 'https://linkedin.com/company/hmsi-unsil');
    }

    public function down(): void
    {
        $this->migrator->delete('KaidoSetting.site_name');
        $this->migrator->delete('KaidoSetting.site_description');
        $this->migrator->delete('KaidoSetting.site_active');
        $this->migrator->delete('KaidoSetting.registration_enabled');
        $this->migrator->delete('KaidoSetting.login_enabled');
        $this->migrator->delete('KaidoSetting.password_reset_enabled');
        $this->migrator->delete('KaidoSetting.sso_enabled');
        $this->migrator->delete('KaidoSetting.maintenance_mode');
        $this->migrator->delete('KaidoSetting.contact_email');
        $this->migrator->delete('KaidoSetting.instagram_url');
        $this->migrator->delete('KaidoSetting.facebook_url');
        $this->migrator->delete('KaidoSetting.twitter_url');
        $this->migrator->delete('KaidoSetting.linkedin_url');
    }
};
