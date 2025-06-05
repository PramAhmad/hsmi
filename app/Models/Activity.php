<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //

    // add fillable
    protected $fillable = ['title', 'image', 'description', 'start_date', 'end_date'];

    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];

    public function getStatus()
    {
        $now = now();
        
        if ($this->start_date > $now) {
            return 'upcoming';
        } elseif ($this->start_date <= $now && $this->end_date >= $now) {
            return 'ongoing';
        } elseif ($this->end_date < $now) {
            return 'finished';
        }
        
        // Check if registration is open
        if (isset($this->registration_open) && $this->registration_open && 
            isset($this->registration_deadline) && $this->registration_deadline > $now) {
            return 'open_registration';
        }
        
        return 'upcoming';
    }

    public function scopeUpcoming($query)
    {
        return $query->where('start_date', '>', now());
    }

    public function scopeOngoing($query)
    {
        return $query->where('start_date', '<=', now())
                     ->where('end_date', '>=', now());
    }

    public function scopeFinished($query)
    {
        return $query->where('end_date', '<', now());
    }
}
