<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class KaidoSettingSeeder extends Seeder
{
    public function run(): void
    {
        // Check if settings table exists
        if (!Schema::hasTable('settings')) {
            $this->command->error('❌ Tabel settings belum ada. Jalankan migration terlebih dahulu.');
            return;
        }

        // Clear existing KaidoSetting data
        DB::table('settings')->where('group', 'KaidoSetting')->delete();

        $settings = [
            ['group' => 'KaidoSetting', 'name' => 'site_name', 'payload' => '"HMSI Unsil"', 'locked' => false],
            ['group' => 'KaidoSetting', 'name' => 'site_description', 'payload' => '"Himpunan Mahasiswa Sistem Informasi Universitas Siliwangi"', 'locked' => false],
            ['group' => 'KaidoSetting', 'name' => 'site_active', 'payload' => 'true', 'locked' => false],
            ['group' => 'KaidoSetting', 'name' => 'registration_enabled', 'payload' => 'false', 'locked' => false],
            ['group' => 'KaidoSetting', 'name' => 'login_enabled', 'payload' => 'true', 'locked' => false],
            ['group' => 'KaidoSetting', 'name' => 'password_reset_enabled', 'payload' => 'true', 'locked' => false],
            ['group' => 'KaidoSetting', 'name' => 'sso_enabled', 'payload' => 'false', 'locked' => false],
            ['group' => 'KaidoSetting', 'name' => 'maintenance_mode', 'payload' => 'false', 'locked' => false],
            ['group' => 'KaidoSetting', 'name' => 'contact_email', 'payload' => '"info@hmsiunsil.ac.id"', 'locked' => false],
            ['group' => 'KaidoSetting', 'name' => 'instagram_url', 'payload' => '"https://instagram.com/hmsi_unsil"', 'locked' => false],
            ['group' => 'KaidoSetting', 'name' => 'facebook_url', 'payload' => '"https://facebook.com/hmsi.unsil"', 'locked' => false],
            ['group' => 'KaidoSetting', 'name' => 'twitter_url', 'payload' => '"https://twitter.com/hmsi_unsil"', 'locked' => false],
            ['group' => 'KaidoSetting', 'name' => 'linkedin_url', 'payload' => '"https://linkedin.com/company/hmsi-unsil"', 'locked' => false],
        ];

        foreach ($settings as $setting) {
            $setting['created_at'] = now();
            $setting['updated_at'] = now();
            
            DB::table('settings')->insert($setting);
            $this->command->info("✅ Setting '{$setting['name']}' created");
        }

        $this->command->info('🎉 All KaidoSetting properties have been created!');
    }
}