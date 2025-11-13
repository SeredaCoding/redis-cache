<?php

require __DIR__ . '/vendor/autoload.php';

$redis = new Redis();
$redis->connect('redis', 6379); // o hostname 'redis' é o nome do serviço no docker-compose

$redis->set('mensagem', 'Olá do Redis via Docker!');
echo "Valor armazenado: " . $redis->get('mensagem');
