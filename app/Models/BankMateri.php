<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BankMateri extends Model
{
    use HasFactory;

    protected $fillable = [
        'mata_kuliah_id',
        'judul',
        'deskripsi',
        'kategori',
        'total_soal',
        'total_halaman',
        'is_draft',
        'tingkat_kesulitan',
        'penulis',
        'tanggal_publikasi',
    ];

    protected $casts = [
        'is_draft' => 'boolean',
        'tanggal_publikasi' => 'date',
    ];

    public function mataKuliah(): BelongsTo
    {
        return $this->belongsTo(MataKuliah::class);
    }

    public function files(): HasMany
    {
        return $this->hasMany(BankMateriFile::class);
    }
}

