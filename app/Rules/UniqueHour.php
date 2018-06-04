<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Course;

class UniqueHour implements Rule
{
    public $request;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
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
        if (Course::where([['period_id', $this->request->period_id], ['hour_id', $this->request->hour_id], ['professor_id', $this->request->professor_id]])->count() == 0) {
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
        return trans('message.unique_hour');
    }
}
