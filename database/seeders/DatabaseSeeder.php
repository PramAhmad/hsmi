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

        User::factory()->create([
            'name' => 'admin',
            'email' => 'superadminhmsi@mail.com',
            'password' => bcrypt('HMSIKUAT123..'),
        ]);


        $this->call(
            [
                MataKuliahSeeder::class,
            ]
        );

        $this->call(RoleSeeder::class);
    }
}


