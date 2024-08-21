<?php

declare(strict_types=1);

use Elaine\Mvc\Controller\CreateVideoController;
use Elaine\Mvc\Controller\DeleteVideoController;
use Elaine\Mvc\Controller\EditVideoController;
use Elaine\Mvc\Controller\VideoFormController;
use Elaine\Mvc\Controller\VideoListController;
use Elaine\Mvc\Repository\VideoRepository;

require_once __DIR__ . '/../vendor/autoload.php';

$dbPath = __DIR__ . '/../banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");
$videoRepository = new VideoRepository($pdo);

/** @var \Elaine\Mvc\Controller\Controller $controller */

if (!array_key_exists('PATH_INFO', $_SERVER)|| $_SERVER['PATH_INFO'] === '/') {
    require_once __DIR__ . '/../home-page.php';
} elseif ($_SERVER['PATH_INFO'] === '/criar-video') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $controller = new VideoFormController($videoRepository);
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller = new CreateVideoController($videoRepository);
    }
} elseif($_SERVER['PATH_INFO'] === '/editar-video') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        require_once __DIR__ . '/../php/form-video.php';
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller = new EditVideoController($videoRepository);
    }
} elseif($_SERVER['PATH_INFO'] === '/listar-videos') {
    $controller = new VideoListController($videoRepository);
} elseif($_SERVER['PATH_INFO'] === '/remover-video') {
    $controller = new DeleteVideoCOntroller($videoRepository);
} elseif ($_SERVER['PATH_INFO'] === '/exibir-video') {
    require_once __DIR__ . '/../video.php';
}


if ($_SERVER['PATH_INFO'] === '/curriculo') {
    require_once __DIR__ . '/../curriculum.php';
} elseif ($_SERVER['PATH_INFO'] === '/sobre') {
    require_once __DIR__ . '/../about.php';
} elseif ($_SERVER['PATH_INFO'] === '/cursos') {
    require_once __DIR__ . '/../pricing.php';
} elseif($_SERVER['PATH_INFO'] === '/blog-post') {
    require_once __DIR__ . '/../blog-right-sidebar.php';
} elseif($_SERVER['PATH_INFO'] === '/contato') {
    require_once __DIR__ . '/../contact.php';
} else {
    http_response_code(404);
}

if ($_SERVER['PATH_INFO'] === '/blog-artigos') {
    require_once __DIR__ . '/../blog-article.php';
} elseif ($_SERVER['PATH_INFO'] === '/blog-artig') {
    require_once __DIR__ . '/../blog-single-article.php';
} elseif($_SERVER['PATH_INFO'] === '/criar-artigo') {
    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        require_once __DIR__ . '/../php/form-article.php';
    } elseif($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once __DIR__ . '/../php/new-article.php';
    }
} elseif($_SERVER['PATH_INFO'] === '/editar-artigo') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        require_once __DIR__ . '/../php/form-article.php';
    } elseif($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once __DIR__ . '/../php/edit-article.php';
    }
} elseif($_SERVER['PATH_INFO'] === '/remover-artigo') {
    require_once __DIR__ . '/../php/remove-article.php';
}

$controller->processaRequisicao();
