<?php

namespace App\Filament\Widgets;

use App\Models\Menfess;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class MenfessMonthlyChart extends ChartWidget
{
    protected static ?string $heading = 'Menfess Monthly Submissions';
    protected static ?int $sort = 3;
    protected int|string|array $columnSpan = '2 / span 2';
    
    protected function getData(): array
    {
        // Menggunakan Eloquent ORM yang sudah support PostgreSQL
        $currentYear = \Carbon\Carbon::now()->year;
        $startOfYear = \Carbon\Carbon::createFromDate($currentYear, 1, 1)->startOfDay();
        $endOfYear = \Carbon\Carbon::createFromDate($currentYear, 12, 31)->endOfDay();
        
        // Ambil semua data dalam tahun ini
        $menfessData = Menfess::whereBetween('created_at', [$startOfYear, $endOfYear])
            ->get()
            ->groupBy(function($item) {
                return $item->created_at->format('n'); // n = numeric month without leading zeros (1-12)
            });
        
        // Siapkan data untuk 12 bulan
        $months = [];
        $counts = [];
        
        for ($month = 1; $month <= 12; $month++) {
            $monthName = \Carbon\Carbon::createFromDate(null, $month, 1)->format('M');
            $count = $menfessData->has($month) ? $menfessData[$month]->count() : 0;
            
            $months[] = $monthName;
            $counts[] = $count;
        }
        
        return [
            'datasets' => [
                [
                    'label' => 'Monthly Submissions',
                    'data' => $counts,
                    'backgroundColor' => '#36A2EB',
                    'borderColor' => '#2980b9',
                    'tension' => 0.3,
                ]
            ],
            'labels' => $months,
        ];
    }
    
    protected function getType(): string
    {
        return 'line';
    }
}