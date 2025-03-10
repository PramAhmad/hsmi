<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BankMateriFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'bank_materi_id',
        'nama_file',
        'file_path',
        'ukuran_file',
        'tipe_file',
        'urutan',
    ];

    public function bankMateri(): BelongsTo
    {
        return $this->belongsTo(BankMateri::class);
    }
}