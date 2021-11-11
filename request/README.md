
#Request To Microservice
<img src="http://51.178.218.147:8080/flow.png" width="400"/>

Library Used in Project
<pre>
"bschmitt/laravel-amqp": "^2.1",
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
</pre>

##Send Request
<pre>
curl --location --request POST '{server_addr}/public/register' \
--form 'username="ezarei"' \
--form 'email="e.zarei88@gmail.com"' \
--form 'full_name="ehsan zarei test"'
</pre>

Register service send request into <u>Driect Exchanges</u> "amq.direct" and Exchange direct send message into two queue <b>"Register"</b> And <b>"Notification"</b>
