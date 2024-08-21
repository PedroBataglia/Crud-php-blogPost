<?php

use Elaine\Mvc\Entity\Artigo;
use Elaine\Mvc\Repository\ArtigosRepository;

$dbPath = __DIR__ . '/../banco-artigos.sqlite';
$pdo = new PDO("sqlite:$dbPath");

$title = filter_input(INPUT_POST, 'title');
$datetime = filter_input(INPUT_POST, 'datetime');
$text = filter_input(INPUT_POST, 'text');
$tipo = filter_input(INPUT_POST, 'tipo');


#$sql = 'INSERT INTO artigos (title, datetime, text, tipo) VALUES (?, ?, ?, ?);';
#$statement = $pdo->prepare($sql);
#$statement->bindValue(1, $title);
#$statement->bindValue(2, $datetime);
#$statement->bindValue(3, $text);
#$statement->bindValue(4, $tipo);

$artigo = new Artigo($text, $title, $tipo, $datetime);
$repository = new ArtigosRepository($pdo);

if ($repository->add($artigo) === false) {
    header('Location: /../blog-artigos?sucesso=0');
    exit();
} else {
    header('Location: /../blog-artigos?sucesso=1');
    exit();
}
