<?php

use Elaine\Mvc\Repository\ArtigosRepository;

$dbPath = __DIR__ . '/banco-artigos.sqlite';
$pdo = new PDO("sqlite:$dbPath");

$repository = new ArtigosRepository($pdo);

$tipo = filter_input(INPUT_GET, 'tipo');

#if ($tipo !== null) {
#    $statement = $pdo->prepare('SELECT * FROM artigos WHERE tipo = :tipo;');
#    $statement->bindValue(':tipo', $tipo);
#   $statement->execute();
#    $articlesList = $statement->fetchAll(PDO::FETCH_ASSOC);
if ($tipo !== null) {
    $articlesList = $repository->filter($tipo);
} else {
    #$articlesList = $pdo->query('SELECT * FROM artigos;')->fetchAll(\PDO::FETCH_ASSOC);
    $articlesList = $repository->all();
}

?>
<?php require_once __DIR__ . '/inicio-html.php'; ?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2623631126659676"  crossorigin="anonymous"></script>
<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1>Blog Post de TI</h1>
                    <p>Um pouco de tecnologia toda semana!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <a href="/criar-artigo" class="btn btn-main">NOVO ARTIGO</a>
            <?php foreach($articlesList as $article) { ?>
                <div class="post">
                    <div class="post-media post-thumb">
                        <a href="blog-single.html">
                            <img src="Public/images/blog/blog-post-1.jpg" alt="">
                        </a>
                    </div>
                    <h3 class="post-title"><a href="artigo"><?= $article->title; ?></a></h3>
                    <div class="post-meta">
                        <ul>
                            <li>
                                <i class="ion-calendar"></i> <?= $article->datetime; ?>
                            </li>
                            <li>
                                <i class="ion-android-people"></i> POSTED BY ELAINE FIGUEIREDO
                            </li>
                            <li>
                                <i class="ion-android-people"></i><?= $article->tipo ?>
                            </li>

                        </ul>
                    </div>
                    <div class="post-content">
                        <p><?=strstr($article->text,"...", true); ?></p>
                        <a href="blog-artigo?id=<?=$article->id; ?>" class="btn btn-main">Continue Lendo</a>
                        <a href="editar-artigo?id=<?=$article->id; ?>" class="btn btn-main">Editar</a>
                        <a href="remover-artigo?id=<?=$article->id; ?>" class="btn btn-main">Excluir</a>
                    </div>
                </div>
            <?php } ?>

                <div class="post">
                    <div class="post-media post-thumb">
                        <a href="blog-single.html">
                            <img src="Public/images/blog/blog-post-1.jpg" alt="">
                        </a>
                    </div>
                    <h3 class="post-title"><a href="blog-single.html">Inteligência Artificial</a></h3>
                    <div class="post-meta">
                        <ul>
                            <li>
                                <i class="ion-calendar"></i> 26, MAR 2024
                            </li>
                            <li>
                                <i class="ion-android-people"></i> POSTED BY ELAINE fIGUEIREDO
                            </li>

                        </ul>
                    </div>
                    <div class="post-content">
                        <p>As primeiras pesquisas sobre inteligência artificial têm origem, por volta de 1950, por meio dos estudos de Alan Turing. Em 1936, Turing apresenta um artigo denominado “On Computable Numbers” (1936), com uma aplicação ao Entscheidungs problem (um problema da lógica simbólica que consiste em achar um algoritmo genérico para determinar se um dado enunciado da lógica de primeira ordem pode ser provado)...</p>
                        <a href="blog-inteligencia-artificial.html" class="btn btn-main">Continue Lendo</a>
                    </div>
                </div>

                <div class="post">
                    <div class="post-media post-thumb">
                        <a href="blog-single.html">
                            <img src="Public/images/blog/blog-post-3.jpg" alt="">
                        </a>
                    </div>
                    <h3 class="post-title"><a href="blog-single.html">Ciência de Dados</a></h3>
                    <div class="post-meta">
                        <ul>
                            <li>
                                <i class="ion-calendar"></i> 25, MAR 2024
                            </li>
                            <li>
                                <i class="ion-android-people"></i> POSTED BY ELAINE fIGUEIREDO
                            </li>

                        </ul>
                    </div>
                    <div class="post-content">
                        <p>Ciência de dados é uma ciência multidisciplinar que envolve técnicas computacionais, estatísticas e matemáticas, entre outras, com o objetivo de resolver problemas complexos, utilizando para isso grandes conjuntos de dados (Governo Digital, 2024)....</p>
                        <a href="blog-ciencia-de-dados.html" class="btn btn-main">Continue Lendo</a>
                    </div>

                </div>

                <!--<div class="post">
                  <div class="post-media post-thumb">
                    <a class= href="blog-single.html">
                      <img  src="images/blog/blog-post-2.jpg" alt="">
                    </a>
                  </div>
                  <h3 class="post-title"><a href="blog-single.html">Two Ways To Wear Straight Shoes</a></h3>
                  <div class="post-meta">
                    <ul>
                      <li>
                        <i class="ion-calendar"></i> 20, MAR 2020
                      </li>
                      <li>
                        <i class="ion-android-people"></i> POSTED BY ADMIN
                      </li>
                      <li>
                        <a href="blog-grid.html"><i class="ion-pricetags"></i> LIFESTYLE</a>,<a href="blog-left-sidebar.html"> TRAVEL</a>, <a href="blog-right-sidebar.html">FASHION</a>
                      </li>

                    </ul>
                  </div>
                  <div class="post-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores
                      vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem
                      ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a
                      perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere</p>
                    <a href="blog-single.html" class="btn btn-main">Continue Reading</a>
                  </div>
                </div>
                <div class="post">
                  <div class="post-media post-thumb">
                    <a href="blog-single.html">
                      <img src="images/blog/blog-post-3.jpg" alt="">
                    </a>
                  </div>
                  <h3 class="post-title"><a href="blog-single.html">Making A Denim Statement</a></h3>
                  <div class="post-meta">
                    <ul>
                      <li>
                        <i class="ion-calendar"></i> 20, MAR 2020
                      </li>
                      <li>
                        <i class="ion-android-people"></i> POSTED BY ADMIN
                      </li>
                      <li>
                        <a href="blog-grid.html"><i class="ion-pricetags"></i> LIFESTYLE</a>,<a href="blog-left-sidebar.html"> TRAVEL</a>, <a href="blog-right-sidebar.html">FASHION</a>
                      </li>

                    </ul>
                  </div>
                  <div class="post-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores
                      vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem
                      ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a
                      perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere</p>
                    <a href="blog-single.html" class="btn btn-main">Continue Reading</a>
                  </div>
                </div>

                <div class="post">
                  <h3 class="post-title"><a href="blog-single.html">Standard Text Post</a></h3>
                  <div class="post-meta">
                    <ul>
                      <li>
                        <i class="ion-calendar"></i> 20, MAR 2020
                      </li>
                      <li>
                        <i class="ion-android-people"></i> POSTED BY ADMIN
                      </li>
                      <li>
                        <a href="blog-grid.html"><i class="ion-pricetags"></i> LIFESTYLE</a>,<a href="blog-left-sidebar.html"> TRAVEL</a>, <a href="blog-right-sidebar.html">FASHION</a>
                      </li>

                    </ul>
                  </div>
                  <div class="post-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores
                      vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem
                      ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a
                      perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere</p>
                    <a href="blog-single.html" class="btn btn-main">Continue Reading</a>
                  </div>
                </div>
                <div class="post">
                  <div class="post-media post-media-audio">
                    <iframe
                      src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/115637399&amp;color=ff5500&amp;auto_play=false&amp;show_artwork=true"
                      class="DRAGDIS_iframe"></iframe>
                  </div>
                  <h3 class="post-title"><a href="blog-single.html">Standard Audio Post</a></h3>
                  <div class="post-meta">
                    <ul>
                      <li>
                        <i class="ion-calendar"></i> 20, MAR 2020
                      </li>
                      <li>
                        <i class="ion-android-people"></i> POSTED BY ADMIN
                      </li>
                      <li>
                        <a href="blog-grid.html"><i class="ion-pricetags"></i> LIFESTYLE</a>,<a href="blog-left-sidebar.html"> TRAVEL</a>, <a href="blog-right-sidebar.html">FASHION</a>
                      </li>

                    </ul>
                  </div>
                  <div class="post-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores
                      vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem
                      ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a
                      perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere</p>
                    <a href="blog-single.html" class="btn btn-main">Continue Reading</a>
                  </div>
                </div>
                <div class="post">
                  <div class="post-media post-media-audio">
                    <iframe height="400" src="https://www.youtube.com/embed/LKFuXETZUsI" allowfullscreen></iframe>
                  </div>
                  <h3 class="post-title"><a href="blog-single.html">Standard Video Post</a></h3>
                  <div class="post-meta">
                    <ul>
                      <li>
                        <i class="ion-calendar"></i> 20, MAR 2020
                      </li>
                      <li>
                        <i class="ion-android-people"></i> POSTED BY ADMIN
                      </li>
                      <li>
                        <a href="blog-grid.html"><i class="ion-pricetags"></i> LIFESTYLE</a>,<a href="blog-left-sidebar.html"> TRAVEL</a>, <a href="blog-right-sidebar.html">FASHION</a>
                      </li>

                    </ul>
                  </div>
                  <div class="post-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores
                      vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem
                      ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a
                      perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere</p>
                    <a href="blog-single.html" class="btn btn-main">Continue Reading</a>
                  </div>
                </div> -->

                <!-- <nav aria-label="Page navigation example">
                  <ul class="pagination post-pagination">
                    <li class="page-item"><a class="page-link" href="blog-grid.html">Prev</a></li>
                    <li class="page-item"><a class="page-link" href="blog-grid.html">1</a></li>
                    <li class="page-item"><a class="page-link" href="blog-grid.html">2</a></li>
                    <li class="page-item"><a class="page-link" href="blog-grid.html">3</a></li>
                    <li class="page-item"><a class="page-link" href="blog-grid.html">Next</a></li>
                  </ul>
                </nav> -->
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
                                    <h4 class="media-heading"><a href="video2.html">Ciencia de dados - Vídeo</a></h4>
                                    <p>CD ou DS Ciência de Dados Data Science Área Multidisciplinar</p>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="blog-inteligencia-artificial.html">
                                    <img class="media-object" src="Public/images/blog/blog-post-1.jpg" alt="Image">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="blog-inteligencia-artificial.html">Inteligência Artifical - Conceito</a></h4>
                                    <p>Uma rápida introdução a Inteligência artifical</p>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="blog-ciencia-de-dados.html">
                                    <img class="media-object" src="Public/images/blog/blog-post-3.jpg" alt="Image">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="blog-ciencia-de-dados.html">Ciência de Dados - Conceitos</a></h4>
                                    <p>Conceitos Básicos de Ciência de Dados</p>
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
                            <!--<div class="media">
                                <a class="pull-left" href="blog-single.html">
                                    <img class="media-object" src="images/blog/post-thumb-2.jpg" alt="Image">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="blog-single.html">Welcome to Themefisher Family</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, officia.</p>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="blog-single.html">
                                    <img class="media-object" src="images/blog/post-thumb-3.jpg" alt="Image">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="blog-single.html">Warm welcome from swift</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, officia.</p>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="blog-single.html">
                                    <img class="media-object" src="images/blog/post-thumb-4.jpg" alt="Image">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="blog-inteligencia-arficial.html">Introducing Swift for Mac</a></h4>
                                    <p>Inteligencia Arificial</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Latest Posts -->

                            <!-- Widget Category -->
                            <div class="widget widget-category">
                                <h4 class="widget-title">Categories</h4>
                                <ul class="widget-category-list">
                                    <li><a href="blog-grid.html">Inteligência Artificial</a>
                                    </li>
                                    <li><a href="blog-grid.html">Dados & Analytics</a>
                                    </li>
                                    <li><a href="blog-grid.html">Programação</a>
                                    </li>
                                    <li><a href="blog-grid.html">Transformação Ágil</a>
                                    </li>
                                    </li>
                                    <li><a href="listar-videos">Video</a>
                                </ul>
                            </div> <!-- End category  -->

                            <!-- Widget tag -->
                            <div class="widget widget-tag">
                                <h4 class="widget-title">Tag Cloud</h4>
                                <ul class="widget-tag-list">
                                    <li><a href="blog-artigos?tipo=<?= 'IA'; ?>">Inteligência Artificial</a>
                                    </li>
                                    <li><a href="blog-artigos?tipo=<?= 'dados'; ?>">Dados</a>
                                    </li>
                                    <li><a href="blog-artigos?=tipo<?= 'technology';?>">Tecnologia</a>
                                    </li>
                                </ul>
                            </div> <!-- End tag  -->







                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2623631126659676"    crossorigin="anonymous"></script>
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
                    <p class="copyright mb-0"> Copyright <script src="https://cdnjs.cloudflare.com/ajax/libs/laravel-echo/1.16.1/echo.js"></script>
                        <script>document.write(new Date().getFullYear())</script> &copy; Desenvolvido por: <a
                            href="https://www.linkedin.com/in/elainefigueiredo/">Elaine Barbosa de Figueiredo</a>.
                        <br>
                    </p>
                </div>
            </div>
        </div>
</footer>

<!--Scroll to top-->
<div id="scroll-to-top" class="scroll-to-top">
    <span class="icon ion-ios-arrow-up"></span>
</div>

<!--
Essential Scripts
=====================================-->


<!-- Main jQuery -->
<script src="Public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.1 -->
<script src="Public/plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick Carousel -->
<script src="Public/plugins/slick/slick.min.js"></script>
<script src="Public/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- filter -->
<script src="Public/plugins/shuffle/shuffle.min.js"></script>
<script src="Public/plugins/SyoTimer/jquery.syotimer.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="Public/plugins/google-map/map.js"></script>

<script src="Public/js/script.js"></script>

</body>

</html>
