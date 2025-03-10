<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BankMateriByKategoriChart;
use App\Filament\Widgets\BankMateriDifficultyChart;
use App\Filament\Widgets\JournalPublicationYearChart;
use App\Filament\Widgets\JournalStats;
use App\Filament\Widgets\MenfessMonthlyChart;
use App\Filament\Widgets\MenfessStatusChart;
use App\Models\Menfess;
use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.dashboard';
    
    protected static ?int $navigationSort = -2;
    
    protected static ?string $navigationLabel = 'Dashboard';
    
    protected static ?string $title = 'Dashboard Akademik';
    
    // Membatasi akses jika diperluka   n
    // protected static ?string $navigationGroup = 'Admin';
    
    protected static array $widgets = [
        \App\Filament\Widgets\JournalStats::class,
        BankMateriByKategoriChart::class,
        JournalPublicationYearChart::class,
        MenfessMonthlyChart::class,
        MenfessStatusChart::class,
    ];
    protected function getHeaderWidgets(): array
    {
        return [
            JournalStats::class,
            BankMateriByKategoriChart::class,
            MenfessMonthlyChart::class,
        ];
    }
    
    protected function getFooterWidgets(): array
    {
        return [
            JournalPublicationYearChart::class,

            MenfessStatusChart::class,
        ];
    }
}