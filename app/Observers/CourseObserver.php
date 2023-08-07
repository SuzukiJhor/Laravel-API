<?php

namespace App\Observers;

use App\Models\Course;
use Illuminate\Support\Str;

class CourseObserver
{
    /**
     * Handle the Course "creating" event.
     *
     * @param  \App\Models\User  $admin
     * @return voidd
     */
    public function creating(Course $course)
    {
        $course->id = Str::uuid();
    }
}
