<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = [
        'name', 'lastname', 'max_hours'
    ];

    public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->lastname;
    }

    public function courses()
    {
        return $this->hasmany(Course::class);
    }
}
