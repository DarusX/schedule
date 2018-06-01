<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'language_id', 'level', 'hour_id', 'classroom_id', 'professor_id'
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function hour()
    {
        return $this->belongsTo(Hour::class);
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class)->withDefault([
            'id' => 0,
            'classroom' => 'N/A'
        ]);
    }
}
