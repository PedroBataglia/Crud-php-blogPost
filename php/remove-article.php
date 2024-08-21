<?php

$dbPath = __DIR__ . '/../banco-artigos.sqlite';
$pdo = new PDO("sqlite:$dbPath");

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$sql = 'DELETE FROM artigos WHERE id = ?;';
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $id);

if ($statement->execute() === false) {
    header('Location: /blog-artigos?sucesso=0');
    exit();
} else {
    header('Location: /blog-artigos?sucesso=1');
    exit();
}

