<?php

namespace Elaine\Mvc\Controller;

use Elaine\Mvc\Entity\Video;
use Elaine\Mvc\Repository\VideoRepository;

class VideoFormController implements Controller
{

    public function __construct(private VideoRepository $repository)
    {

    }

    public function processaRequisicao():void
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        /** @var Video $video */
        $video = null;
        if ($id !== false && $id !== null) {
            $video = $this->repository->find($id);
        }

        require_once __DIR__ . '/../../views/form-videos-html.php';
    }
}