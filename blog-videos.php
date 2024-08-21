<?php

use Elaine\Mvc\Repository\VideoRepository;

$dbPath = __DIR__ . '/banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");

$repository = new VideoRepository($pdo);

$videoList = $repository->all();

?>
<?php require 'inicio-html.php';?>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2623631126659676"     crossorigin="anonymous"></script>
<section class="page-title bg-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h1>Videos</h1>
          <p>Videos Referentes a Tecnologia</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="page-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
          <div class="btn btn-main">
              <a href="/criar-video">Novo Video</a>
          </div>
          <?php foreach($videoList as $video) {  ?>
          <div class="post">
              <div class="post-media post-thumb">
                <a href="blog-single.html">
                  <img src="images/blog/blog-post-1.jpg" alt="">
                </a>
              </div>
              <h3 class="post-title"><a href="blog-single.html"><?= $video->title; ?></a></h3>
              <div class="post-meta">
                <ul>
                  <li>
                    <i class="ion-calendar"></i> 27, MAR 2024
                  </li>
                  <li>
                    <i class="ion-android-people"></i> POSTED BY ELAINE FIGUEIREDO
                  </li>

                </ul>
              </div>
              <div class="post-content">
                <p> <?= $video->description ?></p>
                <a href="/exibir-video?id=<?= $video->id ?>" class="btn btn-main">Ver mais</a>
                <a href="/remover-video?id=<?= $video->id ?>" class="btn btn-main">Excluir</a>
                <a href="/editar-video?id=<?=$video->id; ?>" class="btn btn-main">Editar</a>
              </div>
          </div>
              <?php } ?>
            </div>
        </div>
        <div class="col-lg-4">
          <div class="pl-0 pl-xl-4">
            <aside class="sidebar pt-5 pt-lg-0 mt-5 mt-lg-0">
  <!-- Widget Latest Posts -->
  <div class="widget widget-latest-post">
    <h4 class="widget-title">Últimos Posts</h4>

    <div class="media">
      <a class="pull-left" href="video2.html">
        <img class="media-object" src="Public/images/ciencia-de-dados.png" alt="Image">
      </a>
      <div class="media-body">
        <h4 class="media-heading"><a href="video2.html">Ciência de Dados - Video</a></h4>
        <p>CD ou DS Ciência de Dados Data Science Área Multidisciplinar</p>
      </div>
    </div>
    <div class="media">
      <a class="pull-left" href="video.html">
        <img class="media-object" src="Public/images/blog/blog-post-2.jpg" alt="Image">
      </a>
      <div class="media-body">
        <h4 class="media-heading"><a href="video.html">IA Inteligência Artificial Conceitos - Vídeo 2</a></h4>
        <p>Uma rápida introdução a Inteligência artifical</p>
      </div>
    </div>
  <div class="widget widget-category">
    <h4 class="widget-title">Categories</h4>
    <ul class="widget-category-list">
      <li><a href="/blog-artigos">Artigos</a>
      </li>
      <li><a href="blog-grid.html">Dados & Analytics</a>
      </li>
      <li><a href="blog-grid.html">Programação</a>
      </li>
      <li><a href="blog-grid.html">Transformação Ágil</a>
      </li>
      <li><a href="blog-grid.html">Video</a>
      </li>
    </ul>
  </div> <!-- End category  -->

  <!-- Widget tag -->
  <div class="widget widget-tag">
    <h4 class="widget-title">Tag Cloud</h4>
    <ul class="widget-tag-list">
      <li><a href="blog-article">Inteligência Artificial</a>
      </li>
      <li><a href="blog-grid.html">Dados</a>
      </li>
      <li><a href="blog-grid.html">Tecnologia</a>
      </li>
    </ul>
  </div> <!-- End tag  -->







</aside>
          </div>
        </div>
    </div>
  </div>
</div>

<!-- footer Start -->
<?php require 'fim-html.php'; ?>
