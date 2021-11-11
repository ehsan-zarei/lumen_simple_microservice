<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class GatewayController extends Controller
{
    /**
     * Function For Push Request To RabitMq SendMail Queue.
     * params Request $request
     * @return string $response
     */
    public function request(Request $request)
    {

        $username = $request->input('username');
        $email = $request->input('email');
        $fullname = $request->input('full_name');

        //Create messageBody
        $body = [
            'username' => $username,
            'email' => $email,
            'full_name' => $fullname
        ];
        $jsonBody = json_encode(['messageBody' => $body, "time" => time()]);

        /**
         * [ publish Message To Brocker ] Exchange Direct Queue Routing By Key
         * Create Queue Auto
         */
        \Amqp::publish('register', $jsonBody, [
            'exchange_type' => 'direct',
            'exchange' => 'amq.direct',
            'queue_force_declare' => true,
            'queue'=>'register'
        ]);
        \Amqp::publish('notification', $jsonBody, [
            'exchange_type' => 'direct',
            'exchange' => 'amq.direct',
            'queue_force_declare' => true,
            'queue'=>'notification'
        ]);
        return "Request Sent To Service";
    }
}
