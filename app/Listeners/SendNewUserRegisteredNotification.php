<?php

namespace App\Listeners;

use App\Notifications\NewUserRegistered;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Notification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNewUserRegisteredNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $admins = User::role(User::ADMIN)->get();
        if ($admins && $event->user) {
            Notification::send($admins, new NewUserRegistered($event->user));
        }
    }
}
