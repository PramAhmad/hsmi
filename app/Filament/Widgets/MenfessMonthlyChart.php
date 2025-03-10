<?php

namespace App\Filament\Widgets;

use App\Models\Menfess;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class MenfessMonthlyChart extends ChartWidget
{
    protected static ?string $heading = 'Menfess Monthly Submissions';
    protected static ?int $sort = 3;
    protected int|string|array $columnSpan = '2 / span 2';
    
    protected function getData(): array
    {
        $data = Menfess::select(
                DB::raw('MONTH(created_at) as month'),
                DB::raw('YEAR(created_at) as year'),
                DB::raw('count(*) as total')
            )
            ->whereYear('created_at', Carbon::now()->year)
            ->groupBy('year', 'month')
            ->orderBy('year')
            ->orderBy('month')
            ->get();
        
        $months = [];
        $counts = [];
        
        foreach ($data as $record) {
            $months[] = Carbon::createFromDate(null, $record->month, null)->format('M');
            $counts[] = $record->total;
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