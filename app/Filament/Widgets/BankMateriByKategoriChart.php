<?php

namespace App\Filament\Widgets;

use App\Models\BankMateri;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class BankMateriByKategoriChart extends ChartWidget
{
    protected static ?string $heading = 'Bank Materi by Kategori';
    protected static ?int $sort = 1;
    protected static ?string $maxHeight = '300px';
    protected int|string|array $columnSpan = '2 / span 2';
    
    protected function getData(): array
    {
        $data = BankMateri::select('kategori', DB::raw('count(*) as total'))
            ->groupBy('kategori')
            ->get();
        
        return [
            'datasets' => [
                [
                    'label' => 'Count by Category',
                    'data' => $data->pluck('total')->toArray(),
                    'backgroundColor' => [
                        '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', 
                        '#FF9F40', '#C9CBCF', '#7FB3D5', '#F39C12', '#2ECC71'
                    ],
                ]
            ],
            'labels' => $data->pluck('kategori')->toArray(),
        ];
    }
    
    
    protected function getType(): string
    {
        return 'doughnut';
    }
}
