<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Journal;
use App\Models\MataKuliah;
use App\Models\Menfess;
use App\Models\BankMateri;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // Ambil data untuk homepage
        $recentActivities = Activity::latest()
            ->take(3)
            ->get();
            
        $recentMenfess = Menfess::where('status', 'approved')
            ->with('tags')
            ->take(1)
            ->get();
            
        $recentJournals = Journal::where('status', 'published')
            ->latest()
            ->take(3)
            ->get();

        $recentBankMateri = BankMateri::where('is_draft', false)
            ->with('mataKuliah', 'files')
            ->latest()
            ->take(3)
            ->get();
            
        // Team Members - Ambil pengurus HMSI
        $teamMembers = User::with('roles')
            ->take(4)
            ->orderBy('created_at', 'desc')
            ->get();
            
        // Statistics untuk Bank Materi
        $totalMateri = BankMateri::where('is_draft', false)->count();
        $totalSoal = BankMateri::where('is_draft', false)->sum('total_soal');
        $totalPdf = BankMateri::where('is_draft', false)
            ->whereHas('files', function($query) {
                $query->where('file_path', 'like', '%.pdf');
            })->count();
        $totalMahasiswa = User::count();

        return view('front.home', compact(
            'recentBankMateri',
            'recentActivities',
            'recentMenfess', 
            'recentJournals',
            'teamMembers',
            'totalMateri',
            'totalSoal', 
            'totalPdf',
            'totalMahasiswa'
        ));
    }
    
    public function activities(Request $request)
    {
        $query = Activity::query();

        // Search filter
        if ($request->has('search') && !empty($request->search)) {
            $query->where(function($q) use ($request) {
                $q->where('title', 'like', "%{$request->search}%")
                  ->orWhere('description', 'like', "%{$request->search}%")
                  ->orWhere('location', 'like', "%{$request->search}%");
            });
        }

        // Category filter
        if ($request->has('category') && !empty($request->category)) {
            $query->where('category', $request->category);
        }

        // Status filter
        if ($request->has('status') && !empty($request->status)) {
            $now = now();
            switch ($request->status) {
                case 'upcoming':
                    $query->where('start_date', '>', $now);
                    break;
                case 'ongoing':
                    $query->where('start_date', '<=', $now)
                          ->where('end_date', '>=', $now);
                    break;
                case 'finished':
                    $query->where('end_date', '<', $now);
                    break;
                case 'open_registration':
                    $query->where('registration_open', true)
                          ->where('registration_deadline', '>', $now);
                    break;
            }
        }

        // Sort
        $sort = $request->get('sort', 'latest');
        switch ($sort) {
            case 'oldest':
                $query->oldest();
                break;
            case 'start_date':
                $query->orderBy('start_date', 'asc');
                break;
            case 'popular':
                $query->orderBy('created_at', 'desc'); // Placeholder for actual popularity metric
                break;
            default:
                $query->latest();
                break;
        }

        $activities = $query->paginate(12);

        // Additional stats
        $upcomingCount = Activity::where('start_date', '>', now())->count();
        $participantsCount = 500; // Placeholder - implement when participant system is ready

        return view('front.activities', compact('activities', 'upcomingCount', 'participantsCount'));
    }
    

    
    public function journals(Request $request)
    {
        $query = Journal::where('status', 'published');

        // Search filter
        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('title', 'like', "%{$request->search}%")
                  ->orWhere('authors', 'like', "%{$request->search}%")
                  ->orWhere('abstract', 'like', "%{$request->search}%")
                  ->orWhere('keywords', 'like', "%{$request->search}%");
            });
        }

        // Category filter
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Year filter
        if ($request->filled('year')) {
            $query->where('publication_year', $request->year);
        }

        // Quality filter
     

        // Sort
        $sort = $request->get('sort', 'latest');
        switch ($sort) {
            case 'oldest':
                $query->oldest();
                break;
            case 'most_cited':
                $query->orderBy('citation_count', 'desc');
                break;
            case 'highest_impact':
                $query->orderBy('impact_factor', 'desc');
                break;
            case 'hmsi_recommended':
                $query->where('is_hmsi_recommended', true)->latest();
                break;
            default:
                $query->latest();
                break;
        }

        $journals = $query->paginate(10);

        // Additional stats
   
        $siRelevantCount = Journal::where('status', 'published')
            ->count();
        $withDoiCount = Journal::where('status', 'published')
            ->whereNotNull('doi')
            ->count();

        return view('front.journals', compact('journals','siRelevantCount', 'withDoiCount'));
    }
    
   

    public function matakuliah(Request $request)
    {
        $query = MataKuliah::query();

        // Search filter
        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('nama', 'like', "%{$request->search}%")
                  ->orWhere('kode', 'like', "%{$request->search}%")
                  ->orWhere('deskripsi', 'like', "%{$request->search}%");
            });
        }

        // Semester filter
        if ($request->filled('semester')) {
            $query->where('semester', $request->semester);
        }

        // SKS filter
        if ($request->filled('sks')) {
            $query->where('sks', $request->sks);
        }

        // Get all mata kuliah for stats
        $mataKuliah = MataKuliah::all();
        
        // Get filtered mata kuliah
        $filteredMataKuliah = $query->orderBy('semester')->orderBy('nama')->get();

        return view('front.matakuliah', compact('mataKuliah', 'filteredMataKuliah'));
    }
}
