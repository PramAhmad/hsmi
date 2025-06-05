<?php

// app/Models/Menfess.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Menfess extends Model
{
    use HasFactory;

    protected $table = 'menfess';

    protected $fillable = [
        'content',
        'sender_name',
        'to_name',
        'user_id',
        'spotify_link',
        'status',
        'rejection_reason',
        'approved_by',
        'approved_at',
    ];

    protected $casts = [
        'approved_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function approver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function isPending(): bool
    {
        return $this->status === 'pending';
    }

    public function isApproved(): bool
    {
        return $this->status === 'approved';
    }

    public function isRejected(): bool
    {
        return $this->status === 'rejected';
    }

    // Scope for filtering
    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    public function scopeWithMusic($query)
    {
        return $query->whereNotNull('spotify_link');
    }

    public function scopeWithoutMusic($query)
    {
        return $query->whereNull('spotify_link');
    }

    public function scopeSearch($query, $search)
    {
        return $query->where(function ($q) use ($search) {
            $q->where('content', 'like', "%{$search}%")
              ->orWhere('sender_name', 'like', "%{$search}%")
              ->orWhere('to_name', 'like', "%{$search}%");
        });
    }
}
