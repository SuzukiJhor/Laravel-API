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
        $reply->id = Str::uuid();
    }

}