<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Journal extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'authors',
        'abstract',
        'keywords',
        'journal_name',
        'volume',
        'issue',
        'pages',
        'publication_year',
        'publication_date',
        'doi',
        'file_path',
        'uploaded_by',
        'status',
    ];

    protected $casts = [
        'publication_date' => 'date',
        'publication_year' => 'integer',
    ];

    public function uploader(): BelongsTo
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}