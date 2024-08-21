<?php

namespace Elaine\Mvc\Repository;

use Elaine\Mvc\Entity\Video;

class VideoRepository
{
    public function __construct(private \PDO $pdo)
    {
    }

    public function find(int $id): Video
    {
        $sql = 'SELECT * FROM videos WHERE id = :id;';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();


        return $this->hydrateVideo($stmt->fetch(\PDO::FETCH_ASSOC));
    }

    public function hydrateVideo(array $videoData): Video
    {
        $video = new Video($videoData['url'],$videoData['title'], $videoData['description']);
        $video->setId($videoData['id']);

        return $video;
    }

    public function add(Video $video): bool
    {
        $sql = 'INSERT INTO videos (url, title, description) VALUES (?, ?, ?);';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $video->url);
        $statement->bindValue(2, $video->title);
        $statement->bindValue(3, $video->description);

        $result = $statement->execute();

        $id = $this->pdo->lastInsertId();
        $video->setId(intval($id));

        return $result;
    }

    public function remove(int $id): bool
    {
        $sql = 'DELETE FROM videos WHERE id = ?;';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);
        return $statement->execute();
    }
    public function update(Video $video): bool
    {
        $sql = 'UPDATE videos SET url = :url, title = :title, description = :description WHERE id = :id;';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(':url', $video->url);
        $statement->bindValue(':title', $video->title);
        $statement->bindValue(':description', $video->description);
        $statement->bindValue(':id', $video->id, \PDO::PARAM_INT);


        return $statement->execute();
    }

    public function formEditOrCreate(Video $video)
    {

    }


    /**
     * @return Video[]
     */
    public function all(): array
    {
        $videoList = $this->pdo
            ->query('SELECT * FROM videos')
            ->fetchAll(\PDO::FETCH_ASSOC);
        #new Video(...$videoData)
        return array_map(
            $this->hydrateVideo(...),
            $videoList);

    }
}
