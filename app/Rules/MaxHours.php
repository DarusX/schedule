<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Professor;
use App\Course;
use App\Period;

class MaxHours implements Rule
{

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    
    public function __construct()
    {

    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (!isset($value)) {
            return true;
        }

        if (Course::where([['professor_id', '=', $value], ['period_id', '=', Period::max('id')]])->count() < Professor::find($value)->max_hours) {
            return true;
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('message.max_hours');
    }
}
