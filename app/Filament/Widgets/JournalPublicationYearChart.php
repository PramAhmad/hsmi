<?php

namespace App\Filament\Widgets;

use App\Models\Journal;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class JournalPublicationYearChart extends ChartWidget
{
    protected static ?string $heading = 'Journal Publications by Year';
    protected static ?int $sort = 1;
    protected int|string|array $columnSpan = '2 / span 2';
    
    protected function getData(): array
    {
        $data = Journal::select('publication_year', DB::raw('count(*) as total'))
            ->groupBy('publication_year')
            ->orderBy('publication_year')
            ->get();
        
        return [
            'datasets' => [
                [
                    'label' => 'Number of Publications',
                    'data' => $data->pluck('total')->toArray(),
                    'backgroundColor' => '#36A2EB',
                    'borderColor' => '#2980b9',
                ]
            ],
            'labels' => $data->pluck('publication_year')->toArray(),
        ];
    }
    
    protected function getType(): string
    {
        return 'bar';
    }
}
