<?php

namespace App\Observers;

use App\Models\ReplySupport;
use Illuminate\Support\Str;

class ReplySupportObserver
{
    /**
     * Handle the Admin "creating" event.
     *
     * @param  \App\Models\User  $admin
     * @return voidd
     */
    public function creating(ReplySupport $reply)
    {
        // $reply->admin_id = auth()->user()->id;
        $reply->user_id = '3900d825-0f4c-4324-96bc-26226396d447';
        $reply->id = Str::uuid();
    }

}