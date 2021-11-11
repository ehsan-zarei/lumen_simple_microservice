# MicroService Register User
<img src="http://51.178.218.147:8080/flow.png" width="400"/>

Library Used in Project 
<pre>
"vladimir-yuldashev/laravel-queue-rabbitmq": "^11.3"
</pre>
##Installation
install RabbitMq and create exchange
<pre>
https://www.rabbitmq.com/
</pre>
set config into .env project
<pre>
RABBITMQ_HOST=localhost
RABBITMQ_PORT=5672
RABBITMQ_VHOST=/
RABBITMQ_LOGIN=guest
RABBITMQ_PASSWORD=guest
RABBITMQ_QUEUE=register
RABBITMQ_EXCHANGE_NAME=amq.direct
RABBITMQ_EXCHANGE_DECLARE=true
RABBITMQ_EXCHANGE_TYPE=direct
RABBITMQ_EXCHANGE_PASSIVE=false
RABBITMQ_EXCHANGE_DURABLE=true
RABBITMQ_EXCHANGE_AUTODELETE=false
RABBITMQ_EXCHANGE_ARGUMENTS=default
</pre>
<pre>
exchange name = amq.direct
type = direct
</pre>
migrate database
<pre>
php artisan migrate
</pre>

##Run And Proccess Request
<pre>
php artisan queue:work
</pre>


