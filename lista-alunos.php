<?php

use Alura\Pdo\Domain\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::creatorConnection();

$statemet = $pdo->query('SELECT * FROM students');
$studentList= $statemet->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump($studentList);
echo "</pre>";