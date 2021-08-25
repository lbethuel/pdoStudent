<?php

namespace Alura\Pdo\Domain\Infrastructure\Persistence;

use PDO;

class ConnectionCreator
{
    public static function creatorConnection(): PDO
    {
        $databasePath = __DIR__ . '/../../../banco2.sqlite';
        return new PDO('sqlite:' . $databasePath);
    }
}
