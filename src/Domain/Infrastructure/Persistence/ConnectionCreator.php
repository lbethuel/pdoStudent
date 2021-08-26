<?php

namespace Alura\Pdo\Domain\Infrastructure\Persistence;
//require_once '../../../../vendor/banco2.sqlite';

use PDO;

class ConnectionCreator
{
    public static function creatorConnection()
    {
        $databasePath = __DIR__ .'banco2.sqlite';
        return new PDO('sqlite:' . $databasePath);
    }
}
