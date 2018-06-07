<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'period_id', 'language_id', 'level', 'group', 'hour_id', 'classroom_id', 'professor_id'
    ];

    public function period()
    {
        return $this->belongsTo(Period::class);
    }

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
        return $this->belongsTo(Professor::class)->withDefault([
            'id' => 0,
            'name' => trans('model.unasigned'),
        ]);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class)->withDefault([
            'id' => 0,
            'classroom' => trans('model.unasigned')
        ]);
    }

    public function scopeCurrent($query)
    {
        return $query->where('period_id', Period::max('id'));
    }
}
