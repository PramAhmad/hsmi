<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat user admin
        $admin = User::factory()->create([
            'name' => 'admin',
            'email' => 'superadminhmsi@mail.com',
            'password' => bcrypt('HMSIKUAT123..'),
            'email_verified_at' => now(),
        ]);

        // Panggil semua seeder dalam urutan yang benar
        $this->call([
            MataKuliahSeeder::class,
            RoleSeeder::class,
        ]);

        // Assign super_admin role ke user admin setelah role dibuat
        if (Role::where('name', 'super_admin')->exists()) {
            $admin->assignRole('super_admin');
            $this->command->info('✅ Super Admin role berhasil di-assign ke user admin');
        }
    }
}


