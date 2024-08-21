<?php

namespace Elaine\Mvc\Repository;

use Elaine\Mvc\Entity\Comment;

class CommentRepository
{
    public function __construct(private \PDO $pdo)
    {
    }

    public function all(): array
    {
        $commentList = $this->pdo
            ->query('SELECT * FROM comentarios;')
            ->fetchAll(\PDO::FETCH_ASSOC);
        return array_map( function(array $commentData) {
            $comment = new Comment(
                '',
                ''
            );
        });
    }

}
