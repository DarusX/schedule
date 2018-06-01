<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $fillable = [
        'period'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
