<?php

$dbPath = __DIR__ . '/../banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$sql = 'DELETE FROM videos WHERE id = ?;';
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $id);


if ($statement->execute() === false) {
    header('Location:/listar-videos?sucesso=0');
} else {
    header('Location:/listar-videos?sucesso=1');
    var_dump($_SERVER['PATH_INFO']);
    exit();

}
