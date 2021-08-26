<?php

require_once 'vendor/autoload.php';

//require_once 'src/Domain/Infrastructure/Persistence/ConnectionCreator.php';

use Alura\Pdo\Domain\Infrastructure\Persistence\ConnectionCreator;

$pdo = ConnectionCreator::creatorConnection();

$statemet = $pdo->query("SELECT * FROM students");
$studentList= $statemet->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump($studentList);
echo "</pre>";