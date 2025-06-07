<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenfessController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BankMateriController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Route;

// Main pages
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/activities', [HomeController::class, 'activities'])->name('activities');
Route::get('/journals', [HomeController::class, 'journals'])->name('journals');
Route::get('/matakuliah', [HomeController::class, 'matakuliah'])->name('matakuliah');

// Bank Materi routes
Route::get('/bank-materi', [BankMateriController::class, 'index'])->name('bank-materi');
Route::get('/bank-materi/create', [BankMateriController::class, 'create'])->name('bank-materi.create');
Route::post('/bank-materi', [BankMateriController::class, 'store'])->name('bank-materi.store');

// anggota
Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');

// Download routes
Route::get('/bank-materi/{id}/download', [BankMateriController::class, 'download'])->name('bank-materi.download');
Route::get('/bank-materi/file/{fileId}/download', [BankMateriController::class, 'downloadFile'])->name('bank-materi.file.download');



// SiFess routes
Route::get('/sifess', [MenfessController::class, 'index'])->name('sifess.index');
Route::post('/sifess', [MenfessController::class, 'store'])->name('sifess.store');
Route::get('/sifess/{id}', [MenfessController::class, 'show'])->name('sifess.show');

// About pages group
Route::prefix('about')->name('about.')->group(function () {
    Route::get('/profil', [AboutController::class, 'profil'])->name('profil');
    Route::get('/visi-misi', [AboutController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/struktur', [AboutController::class, 'struktur'])->name('struktur');
    Route::get('/sejarah', [AboutController::class, 'sejarah'])->name('sejarah');
});

// Contact routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Search route
Route::get('/search', [SearchController::class, 'index'])->name('search');

// Membership routes
Route::get('/membership/register', [MembershipController::class, 'register'])->name('membership.register');
Route::post('/membership/register', [MembershipController::class, 'store'])->name('membership.store');

// Newsletter route
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// Static pages
Route::get('/faq', [StaticPageController::class, 'faq'])->name('faq');
Route::get('/privacy', [StaticPageController::class, 'privacy'])->name('privacy');
Route::get('/terms', [StaticPageController::class, 'terms'])->name('terms');
Route::get('/guide', [StaticPageController::class, 'guide'])->name('guide');

// Auth placeholder route
Route::get('/login', function() {
    return redirect()->route('home')->with('info', 'Fitur login akan segera tersedia!');
})->name('login');

// API routes
Route::prefix('api')->group(function () {
    Route::get('/bank-materi/{id}/detail', [BankMateriController::class, 'apiDetail']);
    Route::post('/bank-materi/{id}/bookmark', [BankMateriController::class, 'bookmark']);
});