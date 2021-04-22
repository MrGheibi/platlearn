<?php

namespace App\Listeners;

use App\Events\JWTAttempted;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogSuccessfulLogin
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
     * @param  JWTAttempted  $event
     * @return void
     */
    public function handle(JWTAttempted $event)
    {
        $user = $event->user;
        $request_ip = $_SERVER["REMOTE_ADDR"];
        $request_device = $_SERVER['HTTP_USER_AGENT'];

        $user->last_Previous_login_at = $user->last_login_at != null ? $user->last_login_at : Carbon::now();

        $user->last_Previous_login_ip = $user->last_login_ip != null ? $user->last_login_ip : $request_ip;

        $user->last_login_at = Carbon::now();

        $user->last_login_ip = $request_ip;

        $user->login_device = $request_device;


        $user->save();
    }
}
