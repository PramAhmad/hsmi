<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AnggotaController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query()
            ->whereHas('roles') 
            ->where('email', '!=', 'admin@admin.com');
        
        // Filter berdasarkan role jika ada
        if ($request->filled('divisi')) {
            $query->whereHas('roles', function($roleQuery) use ($request) {
                $roleQuery->where('name', $request->divisi);
            });
        }
        
        // Filter berdasarkan pencarian nama
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }
        
        // Ambil data dengan eager loading roles
        $members = $query->with('roles')->orderBy('name')->paginate(12);
        
        // Ambil data untuk statistik
        $totalMembers = User::whereHas('roles')
            ->where('email', '!=', 'admin@admin.com')
            ->whereNotNull('email_verified_at')
            ->count();
            
        $totalDivisi = User::whereHas('roles')
            ->where('email', '!=', 'admin@admin.com')
            ->whereNotNull('email_verified_at')
            ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
            ->distinct('roles.name')
            ->count();
        
        // Hitung anggota per role
        $membersByDivision = User::whereHas('roles')
            ->where('email', '!=', 'admin@admin.com')
            ->whereNotNull('email_verified_at')
            ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
            ->selectRaw('roles.name as role_name, COUNT(*) as total')
            ->groupBy('roles.name')
            ->get()
            ->mapWithKeys(function ($item) {
                $roleInfo = $this->getRoleDisplayName($item->role_name);
                return [$roleInfo['name'] => $item->total];
            });
        
        // Ambil divisi list dari database roles
        $divisiList = Role::all()->mapWithKeys(function ($role) {
            $roleInfo = $this->getRoleDisplayName($role->name);
            return [$role->name => $roleInfo['name']];
        })->toArray();
        
        return view('front.anggota.index', compact(
            'members',
            'totalMembers',
            'totalDivisi',
            'membersByDivision',
            'divisiList'
        ));
    }
    
    /**
     * Helper method untuk mendapatkan display name dari role
     */
    private function getRoleDisplayName($roleName)
    {
        $roleMap = [
            'ketua' => ['name' => 'Ketua HMSI', 'emoji' => '👑'],
            'wakil_ketua' => ['name' => 'Wakil Ketua', 'emoji' => '👸'],
            'sekretaris' => ['name' => 'Sekretaris', 'emoji' => '📝'],
            'bendahara' => ['name' => 'Bendahara', 'emoji' => '💰'],
            'kepala_department_pendidikan' => ['name' => 'Kepala Department Pendidikan', 'emoji' => '🎓'],
            'kepala_department_rumah_tangga' => ['name' => 'Kepala Department Rumah Tangga', 'emoji' => '🏠'],
            'kepala_department_kaderisasi' => ['name' => 'Kepala Department Kaderisasi', 'emoji' => '👥'],
            'kepala_department_psdm' => ['name' => 'Kepala Department PSDM', 'emoji' => '💼'],
            'koordinator_acara' => ['name' => 'Koordinator Acara', 'emoji' => '🎪'],
            'koordinator_humas' => ['name' => 'Koordinator Humas', 'emoji' => '📢'],
            'koordinator_it' => ['name' => 'Koordinator IT', 'emoji' => '💻'],
            'koordinator_kreatif' => ['name' => 'Koordinator Kreatif', 'emoji' => '🎨'],
            'pengurus' => ['name' => 'Pengurus', 'emoji' => '⭐'],
        ];

        return $roleMap[$roleName] ?? ['name' => 'Tim HMSI', 'emoji' => '⭐'];
    }
}