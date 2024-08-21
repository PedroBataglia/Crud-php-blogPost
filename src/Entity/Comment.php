<?php

namespace Elaine\Mvc\Entity;

class Comment
{
    public readonly int $id;
    public readonly string $comment;

    public function __construct(
        public readonly string $name,
        public readonly int $videoId,
    )
    {
    }

    public function setId(int $id)
        {
            $this->id = $id;
        }

}
