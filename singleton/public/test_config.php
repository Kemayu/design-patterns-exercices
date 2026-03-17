<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Config;

$config = Config::getInstance([
    'db_host' => 'localhost',
    'db_user' => 'root',
    'db_pass' => 'secret',
]);

echo $config->get('db_host') . "\n";
echo $config->get('db_user') . "\n";
echo $config->get('db_pass') . "\n";
echo $config->get('not_set', 'default') . "\n";

// Tester le singleton
$config2 = Config::getInstance();
echo ($config === $config2 ? 'Singleton OK' : 'Erreur Singleton') . "\n";
