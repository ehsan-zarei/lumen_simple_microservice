<?php


namespace App\Notification;


use Illuminate\Support\Facades\Mail;

class Email
{
    public static function Send($data)
    {
        $data = $data['messageBody'];
        Mail::html("Hello!.<br>User Create.<br>UserName : " . $data['username'] . "<br>FullName: " . $data['full_name'], function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['username'] . ' Create Successfull');
        });
    }
}
