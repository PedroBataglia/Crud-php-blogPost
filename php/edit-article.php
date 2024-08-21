<?php

use Elaine\Mvc\Entity\Artigo;
use Elaine\Mvc\Repository\ArtigosRepository;

$dbPath = __DIR__ . '/../banco-artigos.sqlite';
$pdo = new PDO("sqlite:$dbPath");


$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$title = filter_input(INPUT_POST, 'title');
$datetime = filter_input(INPUT_POST, 'datetime');
$text = filter_input(INPUT_POST, 'text');
$tipo = filter_input(INPUT_POST, 'tipo');

#$sql = 'UPDATE artigos SET title = :title, datetime = :datetime, text = :text, tipo = :tipo WHERE id = :id;';
#$statement = $pdo->prepare($sql);
#$statement->bindValue(':title', $title);
#$statement->bindValue(':datetime', $datetime);
#$statement->bindValue(':text', $text);
#$statement->bindValue(':tipo', $tipo);
#$statement->bindValue(':id', $id);


$repository = new ArtigosRepository($pdo);
$artigo = new Artigo($text, $title, $tipo, $datetime);
$artigo->setId($id);


if($repository->edit($artigo) === false) {
    header('Location:/blog-artigos?sucesso=0');
    exit();
} else {
    header('Location:/blog-artigos?sucesso=1');
    exit();
}
