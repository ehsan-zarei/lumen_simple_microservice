<?php

namespace App\Jobs;

use App\Notification\Email;
use Illuminate\Container\Container;
use PhpAmqpLib\Message\AMQPMessage;
use VladimirYuldashev\LaravelQueueRabbitMQ\Queue\Jobs\RabbitMQJob as baseJob;
use VladimirYuldashev\LaravelQueueRabbitMQ\Queue\RabbitMQQueue;

class consumeRequestJob extends baseJob
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
        Email::Send($this->decoded);
    }
}
