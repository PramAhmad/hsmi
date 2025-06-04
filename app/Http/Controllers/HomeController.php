<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Journal;
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
    
    public function activities()
    {
        $activities = Activity::latest()->paginate(12);
        return view('front.activities', compact('activities'));
    }
    
    public function menfess()
    {
        $menfess = Menfess::where('status', 'approved')
            ->with('tags')
            ->latest()
            ->paginate(10);
            
        return view('front.menfess', compact('menfess'));
    }
    
    public function journals()
    {
        $journals = Journal::where('status', 'published')
            ->latest()
            ->paginate(10);
            
        return view('front.journals', compact('journals'));
    }
    
    public function bankMateri()
    {
        $materials = BankMateri::where('is_draft', false)
            ->with('mataKuliah', 'files')
            ->latest()
            ->paginate(12);
            
        return view('front.bank-materi', compact('materials'));
    }
}
