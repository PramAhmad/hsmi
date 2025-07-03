<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // Struktur Organisasi HMSI
        $roles = [
            // Pengurus Inti
            [
                'name' => 'ketua',
                'display_name' => 'Ketua HMSI',
                'description' => 'Ketua Himpunan Mahasiswa Sistem Informasi'
            ],
            [
                'name' => 'wakil_ketua',
                'display_name' => 'Wakil Ketua',
                'description' => 'Wakil Ketua Himpunan Mahasiswa Sistem Informasi'
            ],
            [
                'name' => 'sekretaris',
                'display_name' => 'Sekretaris',
                'description' => 'Sekretaris HMSI - Mengelola administrasi dan dokumentasi'
            ],
            [
                'name' => 'bendahara',
                'display_name' => 'Bendahara',
                'description' => 'Bendahara HMSI - Mengelola keuangan organisasi'
            ],
            
            // Kepala Departemen
            [
                'name' => 'kepala_department_pendidikan',
                'display_name' => 'Kepala Department Pendidikan',
                'description' => 'Kepala Departemen Pendidikan - Mengelola kegiatan akademik dan pengembangan skill'
            ],
            [
                'name' => 'kepala_department_rumah_tangga',
                'display_name' => 'Kepala Department Rumah Tangga',
                'description' => 'Kepala Departemen Rumah Tangga - Mengelola logistik dan konsumsi'
            ],
            [
                'name' => 'kepala_department_kaderisasi',
                'display_name' => 'Kepala Department Kaderisasi',
                'description' => 'Kepala Departemen Kaderisasi - Mengelola pembinaan dan pengembangan anggota'
            ],
            [
                'name' => 'kepala_department_psdm',
                'display_name' => 'Kepala Department PSDM',
                'description' => 'Kepala Departemen Pengembangan Sumber Daya Manusia'
            ],
            
            // Koordinator
            [
                'name' => 'koordinator_acara',
                'display_name' => 'Koordinator Acara',
                'description' => 'Koordinator Acara - Mengelola dan mengkoordinasi event'
            ],
            [
                'name' => 'koordinator_humas',
                'display_name' => 'Koordinator Humas',
                'description' => 'Koordinator Hubungan Masyarakat - Mengelola komunikasi eksternal'
            ],
            [
                'name' => 'koordinator_it',
                'display_name' => 'Koordinator IT',
                'description' => 'Koordinator IT - Mengelola sistem teknologi dan website'
            ],
            [
                'name' => 'koordinator_kreatif',
                'display_name' => 'Koordinator Kreatif',
                'description' => 'Koordinator Kreatif - Mengelola desain dan konten kreatif'
            ],
            
            // Anggota Umum
            [
                'name' => 'pengurus',
                'display_name' => 'Pengurus',
                'description' => 'Pengurus HMSI - Anggota aktif organisasi'
            ]
        ];
        
        foreach ($roles as $role) {
            Role::create([
                'name' => $role['name'],
                'guard_name' => 'web'
            ]);
            
            // Output progress
            $this->command->info("✓ Role '{$role['display_name']}' berhasil dibuat");
        }
        
        $this->command->info('🎉 Semua role HMSI berhasil dibuat!');
    }
}
