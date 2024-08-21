<?php

use Elaine\Mvc\Entity\Video;
use Elaine\Mvc\Repository\VideoRepository;

$dbPath = __DIR__ . '/../banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id === false) {
    header('Location: /../blog-videos.php?sucesso=0');
}
$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
$title = filter_input(INPUT_POST, 'title');
$description = filter_input(INPUT_POST, 'description');


#$sql = 'UPDATE videos SET url = :url, title = :title, description = :description WHERE id = :id;';
#$statement = $pdo->prepare($sql);
#$statement->bindValue(':url', $url);
#$statement->bindValue(':title', $title);
##$statement->bindValue(':id', $id, PDO::PARAM_INT);

$video = new Video($url, $title, $description);
$video->setId($id);

$repository = new VideoRepository($pdo);

if ($repository->update($video) === false) {
    header('Location:/../listar-videos?sucesso=0');
    exit();
} else {
    header('Location: /../listar-videos?sucesso=1');
    exit();
}
