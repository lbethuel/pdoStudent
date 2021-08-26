<?php

//require_once 'src/Domain/Infrastructure/Persistence/ConnectionCreator.php';

use Alura\Pdo\Domain\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';


//var_dump(ConnectionCreator::creatorConnection());
$pdo = ConnectionCreator::creatorConnection();



echo 'Conectei';

$pdo->exec('CREATE TABLE students ( id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');