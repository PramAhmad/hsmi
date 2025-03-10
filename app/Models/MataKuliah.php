<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MataKuliah extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'nama',
        'deskripsi',
        'sks',
        'semester',
        'program_studi',
        'fakultas',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function bankMateris(): HasMany
    {
        return $this->hasMany(BankMateri::class);
    }
}