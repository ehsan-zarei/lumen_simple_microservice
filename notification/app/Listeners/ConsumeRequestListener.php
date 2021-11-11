<?php

namespace App\Listeners;

use App\Events\ConsumeRequestEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ConsumeRequestListener
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
     * @param  \App\Events\ConsumeRequestEvent  $event
     * @return void
     */
    public function handle(ConsumeRequestEvent $event)
    {
        //
    }
}
