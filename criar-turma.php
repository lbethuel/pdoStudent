<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::creatorConnection();
$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();

$aStudent = new Student(
    null, 
    'Marlon', 
    new DateTimeImmutable('1949-05-01')
);

$studentRepository->save($aStudent);

$anotherStudent = new Student(
    null,
    'Ronaldinho',
    new DateTimeImmutable('1999-12-12')
);

$studentRepository->save($anotherStudent);

$connection->commit();