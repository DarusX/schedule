<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = [
        'classroom'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
