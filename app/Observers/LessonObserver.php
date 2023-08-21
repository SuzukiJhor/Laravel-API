<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\Lesson;

class LessonObserver
{
    /**
     * Handle the User "creating" event.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return voidd
     */
    public function creating(Lesson $lesson)
    {
        $lesson->id = Str::uuid();
    }

    /**
     * Handle the User "updating" event.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return voidd
     */
    public function updating(Lesson $lesson)
    {
        $lesson->id = Str::uuid();
    }
}
