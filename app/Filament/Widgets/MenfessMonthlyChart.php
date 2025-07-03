<?php

namespace App\Filament\Widgets;

use App\Models\Menfess;
use App\Traits\PostgreSQLCompatible;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class MenfessMonthlyChart extends ChartWidget
{
    use PostgreSQLCompatible;
    
    protected static ?string $heading = 'Menfess Monthly Submissions';
    protected static ?int $sort = 3;
    protected int|string|array $columnSpan = '2 / span 2';
    
    protected function getData(): array
    {
        // Using the trait for database compatibility
        $data = Menfess::select(
                DB::raw($this->getMonthQuery() . ' as month'),
                DB::raw($this->getYearQuery() . ' as year'),
                DB::raw('count(*) as total')
            )
            ->when(true, function($query) {
                return $this->addWhereYear($query, 'created_at', Carbon::now()->year);
            })
            ->groupBy(DB::raw($this->getYearQuery()), DB::raw($this->getMonthQuery()))
            ->orderBy(DB::raw($this->getYearQuery()))
            ->orderBy(DB::raw($this->getMonthQuery()))
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