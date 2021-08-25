<?php
require_once 'vendor/autoload.php';

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Domain\Infrastructure\Persistence\ConnectionCreator;

$pdo = ConnectionCreator::creatorConnection();

$student = new Student(null, 'qwert', new \DateTimeImmutable('1995-05-03'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth', $student->birthDate()->format('Y-m-d'));

if($statement->execute()){
    echo "Aluno Incluido";
}

