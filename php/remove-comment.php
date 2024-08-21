<?php

$dbPath = __DIR__ . '/../banco-comentarios.sqlite';
$pdo = new PDO("sqlite:$dbPath");

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$sql = 'DELETE FROM comentarios WHERE id = ?;';
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $id);

if ($statement->execute() === false) {
    header('Location: /../index.php?=sucesso=0');
} else {
    header('Location: /../index.php?=sucesso=1');
}
