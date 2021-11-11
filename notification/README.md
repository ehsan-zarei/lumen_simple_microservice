
# MicroService Send Mail Notification
<img src="http://51.178.218.147:8080/flow.png" width="400"/>

Library Used in Project
<pre>
"vladimir-yuldashev/laravel-queue-rabbitmq": "^11.3"
"illuminate/mail"
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
RABBITMQ_QUEUE=notification
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
config mail smtp server into .env
<pre>
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=f5d581430ca4f1
MAIL_PASSWORD=cf7df86b3048a6
MAIL_ENCRYPTION=tls
</pre>
##Run And Proccess Request
<pre>
php artisan queue:work
</pre>


