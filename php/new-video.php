<?php

use Elaine\Mvc\Entity\Video;
use Elaine\Mvc\Repository\VideoRepository;

$dbPath = __DIR__ . '/../banco.sqlite';
$pdo= new PDO("sqlite:$dbPath");

$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
if ($url === false) {
    header('Location: /../index.php?sucesso=0');
    exit();
}
$title = filter_input(INPUT_POST, 'title');
if ($title === false) {
    header('Location: /../index.php?sucesso=1');
    exit();
}
$description = $_POST['description'];



$repository = new VideoRepository($pdo);
if ($repository->add(new Video($url, $title, $description)) === false) {
    header('Location:/listar-videos?sucesso=0');
} else {
    header('Location:/listar-videos?sucesso=1');
    var_dump($_SERVER['PATH_INFO']);
    exit();
}
