<?php

namespace Elaine\Mvc\Entity;

class Artigo
{
    public readonly int $id;
    public readonly string $text;

    public function __construct(
        string $text,
        public readonly string $title,
        public readonly string $tipo,
        public readonly string $datetime,
    )
    {
        $this->setText($text);
    }

    public function setText(string $text)
    {
        $this->text = $text;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
