<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;

trait PostgreSQLCompatible
{
    /**
     * Get month extract query based on database driver
     */
    protected function getMonthQuery(string $column = 'created_at'): string
    {
        $driver = config('database.default');
        
        if ($driver === 'pgsql') {
            return "EXTRACT(month FROM {$column})";
        }
        
        return "MONTH({$column})";
    }
    
    /**
     * Get year extract query based on database driver
     */
    protected function getYearQuery(string $column = 'created_at'): string
    {
        $driver = config('database.default');
        
        if ($driver === 'pgsql') {
            return "EXTRACT(year FROM {$column})";
        }
        
        return "YEAR({$column})";
    }
    
    /**
     * Get day extract query based on database driver
     */
    protected function getDayQuery(string $column = 'created_at'): string
    {
        $driver = config('database.default');
        
        if ($driver === 'pgsql') {
            return "EXTRACT(day FROM {$column})";
        }
        
        return "DAY({$column})";
    }
    
    /**
     * Add where year condition compatible with both MySQL and PostgreSQL
     */
    protected function addWhereYear($query, string $column, int $year)
    {
        $driver = config('database.default');
        
        if ($driver === 'pgsql') {
            return $query->whereRaw("EXTRACT(year FROM {$column}) = ?", [$year]);
        }
        
        return $query->whereRaw("YEAR({$column}) = ?", [$year]);
    }
    
    /**
     * Add where month condition compatible with both MySQL and PostgreSQL
     */
    protected function addWhereMonth($query, string $column, int $month)
    {
        $driver = config('database.default');
        
        if ($driver === 'pgsql') {
            return $query->whereRaw("EXTRACT(month FROM {$column}) = ?", [$month]);
        }
        
        return $query->whereRaw("MONTH({$column}) = ?", [$month]);
    }
}
