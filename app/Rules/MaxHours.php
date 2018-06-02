<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Professor;
use App\Course;

class MaxHours implements Rule
{

    public $professorId;
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
        $professor = Professor::find($value);
        $courses = Course::where('professor_id', $value)->count();
        if ($courses < $professor->max_hours) {
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
        return 'The validation error message.';
    }
}
