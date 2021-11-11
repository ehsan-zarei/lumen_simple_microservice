<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Container\Container;
use PhpAmqpLib\Message\AMQPMessage;
use VladimirYuldashev\LaravelQueueRabbitMQ\Queue\Jobs\RabbitMQJob as baseJob;
use VladimirYuldashev\LaravelQueueRabbitMQ\Queue\RabbitMQQueue;

class consumeRegisterJob extends baseJob
{
    public function __construct(
        Container $container,
        RabbitMQQueue $rabbitmq,
        AMQPMessage $message,
        string $connectionName,
        string $queue
    ) {
        $this->container = $container;
        $this->rabbitmq = $rabbitmq;
        $this->message = $message;
        $this->connectionName = $connectionName;
        $this->queue = $queue;
        $this->decoded = $this->payload();
        /**
         * get Data From Queue and Save in DataBase
         */
        $model = new User();
        $model->username = $this->decoded['messageBody']['username'];
        $model->full_name = $this->decoded['messageBody']['full_name'];
        $model->email = $this->decoded['messageBody']['email'];
        $model->save();
    }
}
