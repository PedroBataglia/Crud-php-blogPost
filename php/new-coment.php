<?php

$dbPath = __DIR__ . '/../banco-comentarios.sqlite';
$pdo = new PDO("sqlite:$dbPath");

$idVideo = filter_input(INPUT_GET, 'idVideo', FILTER_VALIDATE_INT);


$sql = 'INSERT INTO comentarios (name, email, website, comment, video) VALUES (?,?,?,?, ?)';
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $_POST['name']);
$statement->bindValue(2, $_POST['email']);
$statement->bindValue(3, $_POST['website']);
$statement->bindValue(4, $_POST['text']);
$statement->bindValue(5, $idVideo);

#var_dump($statement->execute());

if($statement->execute() === false) {
    header('Location: /../index.php?sucesso=0');
} else {
    header('Location: /../index.php?sucesso=1');
}
