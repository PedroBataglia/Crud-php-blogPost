<?php

namespace Elaine\Mvc\Repository;

use Elaine\Mvc\Entity\Artigo;

class ArtigosRepository
{
    public function __construct(private \PDO $pdo)
    {
    }

    public function all(): array
    {
        $articleList = $this->pdo
            ->query('SELECT * FROM artigos;')
            ->fetchAll(\PDO::FETCH_ASSOC);
        return array_map(
            function (array $articleData) {
                $article = new Artigo(
                    $articleData['text'],
                    $articleData['title'],
                    $articleData['tipo'],
                    $articleData['datetime'],
                );
                $article->setId($articleData['id']);
                return $article;
        },
        $articleList);

    }

    public function add(Artigo $artigo): bool
    {
        $sql = 'INSERT INTO artigos (text, title, tipo, datetime) VALUES (?, ?, ?, ?);';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $artigo->text);
        $stmt->bindValue(2, $artigo->title);
        $stmt->bindValue(3, $artigo->tipo);
        $stmt->bindValue(4, $artigo->datetime);

        $result = $stmt->execute();

        $id = $this->pdo->lastInsertId();
        $artigo->setId(intval($id));

        return $result;
    }

    public function filter(string $type): array
    {
        $statement = $this->pdo->prepare('SELECT * FROM artigos WHERE tipo = :tipo;');
        $statement->bindValue(':tipo', $type);
        $statement->execute();
        $articleList = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return array_map(
            function (array $articleData) {
                $article = new Artigo(
                    $articleData['text'],
                    $articleData['title'],
                    $articleData['tipo'],
                    $articleData['datetime']
                );
                $article->setId($articleData['id']);
                return $article;
            },
            $articleList);
    }

    public function edit(Artigo $artigo): bool
    {
        $sql = 'UPDATE artigos SET text = :text, title = :title, datetime = :datetime, tipo = :tipo WHERE id = :id;';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':text', $artigo->text);
        $stmt->bindValue(':title', $artigo->title);
        $stmt->bindValue(':datetime', $artigo->datetime);
        $stmt->bindValue(':tipo', $artigo->tipo);
        $stmt->bindValue(':id', $artigo->id, \PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function remove(int $id): bool
    {
        $sql = 'DELETE FROM artigos WHERE id = :id;';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);

        return $stmt->execute();
    }
}
