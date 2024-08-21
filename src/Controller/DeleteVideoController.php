<?php

namespace Elaine\Mvc\Controller;

use Elaine\Mvc\Repository\VideoRepository;

class DeleteVideoController implements Controller
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

        $sucess = $this->videoRepository->remove($id);
        if($sucess === false) {
            header('Location: /listar-videos?sucesso=0');
        } else {
            header('Location: /listar-videos?sucesso=1');
        }
    }
}
