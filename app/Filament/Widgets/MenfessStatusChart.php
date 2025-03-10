<?php

namespace App\Filament\Widgets;

use App\Models\Menfess;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class MenfessStatusChart extends ChartWidget
{
    protected static ?string $heading = 'Menfess Status Distribution';
    protected static ?int $sort = 1;
    protected int|string|array $columnSpan = '2 / span 2';
    
    protected function getData(): array
    {
        $data = Menfess::select('status', DB::raw('count(*) as total'))
            ->groupBy('status')
            ->get();
        
        return [
            'datasets' => [
                [
                    'data' => $data->pluck('total')->toArray(),
                    'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56'],
                ]
            ],
            'labels' => $data->pluck('status')->toArray(),
        ];
    }
    
    protected function getType(): string
    {
        return 'pie';
    }
}

