<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Str;

class UserObserver
{
    /**
     * Handle the User "creating" event.
     *
     * @param  \App\Models\User  $user
     * @return voidd
     */
    public function creating(User $user)
    {
        $user->id = Str::uuid();
    }

}