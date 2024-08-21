<?php
$dbPath = __DIR__ . '/banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");
$videoList = $pdo->query('SELECT * FROM videos;')->fetchAll(\PDO::FETCH_ASSOC);
$user = false;

?><!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

    <!--
    ================================================== -->
    <meta charset="utf-8">
    <title>Blog - Videos | Elaine Barbosa de Figueiredo</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Site Pessoal Elaine B. Figueiredo, Tecnologia, Tecnologia Educacional, Inovação e Consultoria">
    <meta name="description" content="Tecnologia, Tecnologias Educacionais, Inovação, Banco de Dados,
        Agile, Scrum, Business Inteligence, Análise, Dados, Ciência de Dados, Pesquisa">
    <meta name="description" content="Tecnologia, Tecnologias Educacionais, Inovação, Banco de Dados,
        Agile, Scrum, Business Inteligence, Análise, Dados, Ciência de Dados, Pesquisa">
    <meta name="keywords" content="Tecnologia, Tecnologias Educacionais, Inovação, Banco de Dados, Produtos Digitais, Desenvolvimento, Consultoria
        Agile, Scrum, Business Inteligence, Análise, Dados, Ciência de Dados, Pesquisa, OKR, Mendeley, HTML, CSS, JAVASCRIPT, PYTHON, Design Sprint, Design Thinking, Storytelling, Requisitos, requeriments">
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Elaine B. Figueiredo">
    <meta name="generator" content="Elaine B. Figueiredo">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="Public/images/logoelaine2.jpg"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- ADICIONAR BOTÃO DE REDE SOCIAL P/ CELULAR-->

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="Public/plugins/bootstrap/bootstrap.min.css">
    <!-- Ionic Icon Css -->
    <link rel="stylesheet" href="Public/plugins/Ionicons/css/ionicons.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="Public/plugins/animate-css/animate.css">
    <!-- Magnify Popup -->
    <link rel="stylesheet" href="Public/plugins/magnific-popup/magnific-popup.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="Public/plugins/slick/slick.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="Public/css/style.css">
    <link rel="stylesheet" href="Public/style.css">

</head>

<body id="body">

<!-- Header Start -->
<header class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg p-0">
                    <a class="navbar-brand" href="index.html">
                        <img src="Public/images/logoelaine2.jpg" alt="Logo Professora Elaine Figueiredo" width="30%">

                    </a>

                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="ion-android-menu"></span>
                    </button>
                    <nav class="btn_social">
                        <!-- ADICIONAR BOTAO DE REDE SOCIAL -->
                        <ul>
                            <li><a href="https://www.facebook.com/profelainefigueiredo" target="_blank" title="facebook"><i class="fa fa-facebook"></i>    </a></li>
                            <li><a href="https://lattes.cnpq.br/4207910254131414" target="_blank" title="Lattes"><i class="fa fa-eye"></i>    </a></li>
                            <li><a href="https://www.instagram.com/profelainefigueiredo/" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCQ0qlb2b22-XpSZ8UX1yobg" target="_blank" title="youtube"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=55011999479666" target="_blank" title="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/elainefigueiredo/" target="_blank" title="linkdin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </nav><!--Btn Social-->
                    <div class="collapse navbar-collapse ml-auto" id="navbarsExample09">
                        <ul class="navbar-nav ml-auto">

                            <!--
                            <li class="nav-item dropdown @@portfolio">
                              <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio
                                <span class="ion-ios-arrow-down"></span>
                              </a>

                              <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                <li><a class="dropdown-item @@portfolioFilter" href="portfolio.html">Portfolio Filter</a></li>
                                <li><a class="dropdown-item @@portfolioSingle" href="portfolio-single.html">Portfolio Single</a></li>

                                <li class="dropdown dropdown-submenu dropright">
                                  <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                                  <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                                    <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                    <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                                  </ul>
                                </li>
                              </ul>

                            </li>

                            <li class="nav-item @@service"><a class="nav-link" href="service.html">Serviços</a></li>

                            <li class="nav-item dropdown @@blog">
                              <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true"	aria-expanded="false">Blog <span class="ion-ios-arrow-down"></span></a>

                              <ul class="dropdown-menu" aria-labelledby="dropdown05">
                                <li><a class="dropdown-item @@blogGrid" href="blog-grid.html">Blog Grid</a></li>
                                <li><a class="dropdown-item @@blogSingle" href="blog-single.html">Blog Single</a></li>
                                <li><a class="dropdown-item @@blogRS" href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a class="dropdown-item @@blogLS" href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a class="dropdown-item @@blogFW" href="blog-full-width.html">Blog Full Width</a></li>

                                <li class="dropdown dropdown-submenu dropleft">
                                  <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                                  <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                                    <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                    <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                                  </ul>
                                </li>
                              </ul>

                            </li>-->
                            <li class="nav-item"> <a class="nav-link" href="index.html">Home</a></li>
                            <li class="nav-item dropdown @@pages">
                                <a class="nav-link dropdown-toggle" href="about.html" id="dropdown05">Sobre</a>
                                <!--
                                <span class="ion-ios-arrow-down"></span>

                              <ul class="dropdown-menu" aria-labelledby="dropdown05">
                                <li><a class="dropdown-item @@about" href="about.html">About Us</a></li>
                                <li><a class="dropdown-item @@comingSoon" href="coming-soon.html">Coming Soon</a></li>
                                <li><a class="dropdown-item @@404" href="404.html">404 Page</a></li>
                                <li><a class="dropdown-item @@faq" href="faq.html">FAQ</a></li>
                                <li><a class="dropdown-item @@pricing" href="pricing.html">Pricing Table</a></li>
                              </ul>
                              -->
                            </li>
                            <li class="nav-item @@contact"><a class="nav-link" href="pricing.html">Cursos e Workshops</a></li>
                            <li class="nav-item @@contact"><a class="nav-link" href="curriculum.html">Currículo</a></li>
                            <li class="nav-item  active @@contact"><a class="nav-link" href="blog-videos.php">Blog</a></li>
                            <li class="nav-item @@contact"><a class="nav-link" href="contact.html">Contato</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header><!-- header close -->
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
                    <a href="blog-criar-video.html">Novo Video</a>
                </div>
                <?php foreach($videoList as $video) {  ?>
                <div class="post">
                    <div class="post-media post-thumb">
                        <a href="blog-single.html">
                            <img src="Public/images/blog/blog-post-1.jpg" alt="">
                        </a>
                    </div>
                    <h3 class="post-title"><a href="blog-single.html"><?= $video['title']; ?></a></h3>
                    <div class="post-meta">
                        <ul>
                            <li>
                                <i class="ion-calendar"></i> 27, MAR 2024
                            </li>
                            <li>
                                <i class="ion-android-people"></i> POSTED BY ELAINE fIGUEIREDO
                            </li>

                        </ul>
                    </div>
                    <div class="post-content">
                        <p> <?= $video['description'] ?></p>
                        <a href="video.php?id=<?= $video['id'] ?>" class="btn btn-main">Ver mais</a>
                        <?php if ($user === true){ ?>
                        <a href="/php/remove-video.php?id=<?= $video['id'] ?>" class="btn btn-main">Excluir</a>
                        <a href="php/form-video.php?id=<?= $video['id']; ?>" class="btn btn-main">Editar</a>
                        <?php } ?>
                    </div>
                    <?php } ?>
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
                                <li><a href="blog-grid.html">Video</a>
                                </li>
                            </ul>
                        </div> <!-- End category  -->

                        <!-- Widget tag -->
                        <div class="widget widget-tag">
                            <h4 class="widget-title">Tag Cloud</h4>
                            <ul class="widget-tag-list">
                                <li><a href="blog-grid.html">Inteligência Artificial</a>
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
