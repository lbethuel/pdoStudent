<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Lucas',
    new \DateTimeImmutable('1995-05-16')
);

echo $student->age();
