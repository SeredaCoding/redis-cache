<?php
require __DIR__ . '/vendor/autoload.php';

use Dell\RedisCache\Cache;

$cache = new Cache();
$cache->set('mensagem', 'Olá do Redis via Docker com PSR-4!');
echo "Valor armazenado: " . $cache->get('mensagem');
