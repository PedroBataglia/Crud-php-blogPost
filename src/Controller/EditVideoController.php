<?php

namespace Elaine\Mvc\Controller;

use Elaine\Mvc\Entity\Video;
use Elaine\Mvc\Repository\VideoRepository;

class EditVideoController implements Controller
{
    public function __construct(private VideoRepository $videoRepository)
    {
    }

    public function processaRequisicao(): void
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if ($id === false || $id === null) {
            header('Location: /?sucesso=0');
        }
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

        $video = new Video($url,$title, $description);

        $sucess = $this->videoRepository->update($video);
        if ($sucess === false) {
                header('Location: /listar-videos?sucesso=0');
            } else {
            header('Location: /listar-videos?sucesso=1');
        }
    }
}
