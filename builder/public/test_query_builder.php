<?php


require_once __DIR__ . '/../vendor/autoload.php';

use App\MySQLQueryBuilder;

// Exemple d'utilisation
$queryBuilder = new MySQLQueryBuilder();

$sql1 = $queryBuilder->select('id, name')
    ->from('users')
    ->where('id = 1')
    ->getSQL();

echo $sql1 . "\n";

$sql2 = $queryBuilder->select('*')
    ->from('products')
    ->where('price > 100')
    ->getSQL();

echo $sql2 . "\n";

$sql3 = $queryBuilder->select('email')
    ->from('customers')
    ->getSQL();

echo $sql3 . "\n";
