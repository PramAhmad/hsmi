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
        'download_count',
        'view_count',
        'like_count',
    ];

    protected $casts = [
        'is_draft' => 'boolean',
        'tanggal_publikasi' => 'date',
        'download_count' => 'integer',
        'view_count' => 'integer',
        'like_count' => 'integer',
    ];

    protected $attributes = [
        'download_count' => 0,
        'view_count' => 0,
        'like_count' => 0,
    ];

    public function mataKuliah(): BelongsTo
    {
        return $this->belongsTo(MataKuliah::class);
    }

    public function files(): HasMany
    {
        return $this->hasMany(BankMateriFile::class);
    }
    
    // Scope untuk filtering
    public function scopePublished($query)
    {
        return $query->where('is_draft', false);
    }
    
    public function scopeByMataKuliah($query, $mataKuliah)
    {
        return $query->whereHas('mataKuliah', function($q) use ($mataKuliah) {
            $q->where('nama', 'like', "%{$mataKuliah}%");
        });
    }
    
    public function scopeByKategori($query, $kategori)
    {
        return $query->where('kategori', $kategori);
    }
    
    public function scopeByTingkat($query, $tingkat)
    {
        return $query->where('tingkat_kesulitan', $tingkat);
    }
    
    // Helper methods
    public function incrementDownload()
    {
        $this->increment('download_count');
    }
    
    public function incrementView()
    {
        $this->increment('view_count');
    }
    
    public function incrementLike()
    {
        $this->increment('like_count');
    }
}