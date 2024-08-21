<?php

namespace Elaine\Mvc\Controller;

use Elaine\Mvc\Repository\VideoRepository;
use PDO;

class VideoListController implements Controller
{
    private VideoRepository $videoRepository;

    public function __construct(VideoRepository $videoRepository)
    {
        $dbPath = __DIR__ . '/../../banco.sqlite';
        $pdo = new PDO("sqlite:$dbPath");
        $this->videoRepository = $videoRepository;
    }

    public function processaRequisicao(): void
    {
        $videoList = $this->videoRepository->all();

        require_once __DIR__ . '/../../views/video-list.php';


    }
}
