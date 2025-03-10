<?php

namespace App\Filament\Widgets;

use App\Models\BankMateri;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class BankMateriDifficultyChart extends ChartWidget
{
    protected static ?string $heading = 'Bank Materi by Difficulty Level';
    protected static ?int $sort = 5;
    protected int|string|array $columnSpan = 'full';
    
    protected function getData(): array
    {
        $data = BankMateri::select('tingkat_kesulitan', DB::raw('count(*) as total'))
            ->whereNotNull('tingkat_kesulitan')
            ->groupBy('tingkat_kesulitan')
            ->get();
        
        return [
            'datasets' => [
                [
                    'label' => 'Count by Difficulty',
                    'data' => $data->pluck('total')->toArray(),
                    'backgroundColor' => '#36A2EB',
                    'borderColor' => '#2980b9',
                ]
            ],
            'labels' => $data->pluck('tingkat_kesulitan')->toArray(),
        ];
    }
    
    protected function getType(): string
    {
        return 'bar';
    }
}
