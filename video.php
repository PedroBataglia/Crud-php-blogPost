<?php
use Elaine\Mvc\Entity\Video;
use Elaine\Mvc\Repository\VideoRepository;

$dbPath = __DIR__ . '/banco-comentarios.sqlite';
$pdo = new PDO("sqlite:$dbPath");
#$comentList = $pdo->query('SELECT * FROM comentarios;')->fetchAll(\PDO::FETCH_ASSOC);

$dbPath2 = __DIR__ . '/banco.sqlite';
$pdoVideo = new PDO("sqlite:$dbPath2");
$id = filter_input(INPUT_GET,'id', FILTER_VALIDATE_INT);
//$video  = new Video('', '', '');

if ($id !== false) {
    $videoReposity = new VideoRepository($pdoVideo);
    $video = $videoReposity->find($id);
    //$statement = $pdoVideo->prepare('SELECT * FROM videos WHERE id = ?;');
    //$statement->bindValue(1, $id, PDO::PARAM_INT);
    //$statement->execute();
    //$video = $statement->fetch(\PDO::FETCH_ASSOC);

}
#$sql = 'SELECT title FROM videos WHERE id = ?;';
#$statement = $pdoVideo->prepare($sql);
#$statement->bindValue(1, $id);
#$video = $statement->execute();

#$video = $pdoVideo->query('SELECT title FROM videos WHERE id = 1;');



?>
<?php require_once __DIR__ . '/inicio-html.php';?>

<section class="portfolio-single-page section-sm">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="project-content mt-50">
          <h2 class="mb-3"><?= $video->title; ?></h2>
          <p><?= $video->description; ?></p>
          <div class="my-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="<?= $video->url ?>" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- footer Start -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-manu">
          <ul>
            <li><a href="about.html">Sobre</a></li>
            <li><a href="contact.html">Contato</a></li>
            <li><a href="blog-right-sidebar.html">blog</a></li>
            <!--
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            -->
          </ul>
        </div>
        <p class="copyright mb-0"> Copyright <script src="https://cdnjs.cloudflare.com/ajax/libs/laravel-echo/1.16.1/echo.js"></script>
        <script>document.write(new Date().getFullYear())</script> &copy; Desenvolvido por: <a
                    href="https://www.linkedin.com/in/elainefigueiredo/">Elaine Barbosa de Figueiredo</a>.
                  <br>
                </p>
      </div>
    </div>
  </div>
<?php require_once 'fim-html.php'; ?>
