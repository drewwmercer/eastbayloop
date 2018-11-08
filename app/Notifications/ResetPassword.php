<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword as IlluminateResetPassword;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Bus\Queueable;

class ResetPassword extends IlluminateResetPassword implements ShouldQueue
{
    use Queueable;
}
