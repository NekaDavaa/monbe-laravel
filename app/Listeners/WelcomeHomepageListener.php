<?php

namespace App\Listeners;

use App\Events\WelcomeHomepage;
use App\Mail\GreetingsMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class WelcomeHomepageListener
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
     * @param  \App\Events\WelcomeHomepage  $event
     * @return void
     */
    public function handle(WelcomeHomepage $event)
    {
        Mail::to(auth()->user())->send(new GreetingsMail());
    }
}
