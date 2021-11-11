<?php

namespace App\Events;

class PushRequestEvent extends Event
{
    public $message='';
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(string $message)
    {
        $this->$message=$message;
        //
    }
}
