<?php

namespace Elaine\Mvc\Controller;

use Elaine\Mvc\Entity\Video;
use Elaine\Mvc\Repository\VideoRepository;

class CreateVideoController implements Controller
{

    public function __construct(private VideoRepository $videoRepository)
    {
    }

    public function processaRequisicao(): void
    {
        $url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
        if ($url === false) {
            header('Location: /?sucesso=0');
        }

        $title = filter_input(INPUT_POST, 'title');
        if ($title === false) {
            header('Location: /?sucesso=0');
        }

        $description = filter_input(INPUT_POST, 'description');
        if ($description === false) {
            header('Location: /?sucesso=0');
        }

        $sucess = $this->videoRepository->add(new Video($url,$title,$description));
        if ($sucess === false) {
            header('Location: /?sucesso=0');
        } else {
            header('Location: /?sucesso=1');
        }
    }
}
