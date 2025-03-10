<?php

namespace App\Filament\Widgets;

use App\Models\Journal;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class JournalStats extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Jurnal', Journal::count())
                ->icon('heroicon-o-document-text')
                ->color('primary'),

            Card::make('Jurnal Dipublikasikan', Journal::where('status', 'published')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),

            Card::make('Jurnal Draft', Journal::where('status', 'draft')->count())
                ->icon('heroicon-o-pencil')
                ->color('warning'),
        ];
    }
}
