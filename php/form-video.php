<?php
$dbPath = __DIR__ . '/../banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$video = [
    'title' => '',
    'description' => '',
    'url' => ''
];
if ($id !== false && $id !== null) {
    $statement = $pdo->prepare('SELECT * FROM videos WHERE id = ?;');
    $statement->bindValue(1, $id, PDO::PARAM_INT);
    $statement->execute();
    $video = $statement->fetch(PDO::FETCH_ASSOC);
}

?>
<?php require_once __DIR__ . '/../inicio-html.php'; ?>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2623631126659676"       crossorigin="anonymous"></script>

<section class="page-title bg-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h1>Blog Post - Elaine Figueiredo</h1>
          <p>Inteligência Artificial</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="page-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="post post-single">
          <h2 class="post-title">Adicione um Novo Video – :D </h2>
          <div class="post-meta">
            <form method="post"
                <div class="block">
                    <div class="form-group form-group-2">
                        <input class="input-form"
                               name="title"
                               type="text"
                               value="<?= $video['title'];?>"
                               placeholder="example: Inteligencia artifical">
                    </div>
                    <div class="form-group form-group-2">
                        <input class="input-form"
                               name="description"
                               type="text"
                               value="<?= $video['description']; ?>"
                               placeholder="example: a inteligencia artificial é...">
                    </div>

                    <div class="form-group form-group-2">
                        <input class="input-form"
                               name="url"
                               type="text"
                               value="<?= $video['url'];?>"
                               placeholder="example: youtube.com/embeded/JQEioW2dhfasd2w3as4k">
                    </div>
                    <button class="btn btn-default" type="submit">Enviar</button>
                </div>
            </form>
            <ul>
              <li>
                <i class="ion-calendar"></i> 26, ABR 2024
</li>
              <li>
                <i class="ion-android-people"></i> POSTED BY EALINE FIGUEIREDO
</li>

            </ul>
          </div>
          <div class="post-thumb">
            <img class="img-fluid" src="images/blog/blog-post-1.jpg" alt="">
          </div>
          <div class="post-comments">
            <h3 class="post-sub-heading">Os comentários estão temporáriamente desativados</h3>
          </div>
            <!--<ul class="media-list comments-list m-bot-50 clearlist">

              <li class="media">
                <a class="pull-left" href="#!">
                  <img class="media-object comment-avatar rounded-circle" src="images/blog/avater-1.jpg" alt="" width="50" height="50">
                </a>
                <div class="media-body">
                  <div class="comment-info">
                    <h4 class="comment-author">
                      <a href="#!">Jonathon Andrew</a>
                    </h4>
                    <time>July 02, 2020, at 11:34</time>
                    <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Reply</a>
                  </div>
                  <p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
                  </p>

                  <div class="media">
                    <a class="pull-left" href="#!">
                      <img class="media-object comment-avatar rounded-circle" src="images/blog/avater-2.jpg" alt="" width="50" height="50">
                    </a>
                    <div class="media-body">
                      <div class="comment-info">
                        <h4 class="comment-author">
                          <a href="#!">Senorita</a>
                        </h4>
                        <time>July 02, 2020, at 11:34</time>
                        <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Reply</a>
                      </div>
                      <p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
                      </p>

                      <div class="media">
                        <a class="pull-left" href="#!">
                          <img class="media-object comment-avatar rounded-circle" src="images/blog/avater-3.jpg" alt="" width="50" height="50">
                        </a>
                        <div class="media-body">
                          <div class="comment-info">
                            <h4 class="comment-author">
                              <a href="#!">Senorita</a>
                            </h4>
                            <time>July 02, 2020, at 11:34</time>
                            <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Reply</a>
                          </div>
                          <p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
                          </p>
                        </div>
                      </div>

                    </div>
                  </div>

                </div>
              </li>
              <li class="media">
                <a class="pull-left" href="#!">
                  <img class="media-object comment-avatar rounded-circle" src="images/blog/avater-4.jpg" alt="" width="50" height="50">
                </a>
                <div class="media-body">
                  <div class="comment-info">
                    <h4 class="comment-author">
                      <a href="#!">Jonathon Andrew</a>
                    </h4>
                    <time>July 02, 2020, at 11:34</time>
                    <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Reply</a>
                  </div>
                  <p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
                  </p>
                </div>
              </li>
              <li class="media">
                <a class="pull-left" href="#!">
                  <img class="media-object comment-avatar rounded-circle" src="images/blog/avater-1.jpg" alt="" width="50" height="50">
                </a>
                <div class="media-body">
                  <div class="comment-info">
                    <h4 class="comment-author">
                      <a href="#!">Jonathon Andrew</a>
                    </h4>
                    <time>July 02, 2020, at 11:34</time>
                    <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Reply</a>
                  </div>
                  <p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
                  </p>
                </div>
              </li>

            </ul>
          </div>-->


       <!-- Leave your comment
<div class="post-comments-form">
            <h3 class="post-sub-heading">Leave You Comments</h3>
            <form method="post" action="#!" id="form" role="form">
              <div class="row row-formulario">
                <div class="col-md-6 form-group">
                  <!-- Name
<input type="text" name="name" id="name" class=" form-control" placeholder="Name *" maxlength="100" required="">
                </div>
                <div class="col-md-6 form-group">
                  <!-- Email
<input type="email" name="email" id="email" class=" form-control" placeholder="Email *" maxlength="100"
                   required="">
                </div>
                <div class="form-group col-md-12">
                  <!-- Website
<input type="text" name="website" id="website" class=" form-control" placeholder="Website" maxlength="100">
                </div>
                <!-- Comment
<div class="form-group col-md-12">
                  <textarea name="text" id="text" class=" form-control" rows="6" placeholder="Comment" maxlength="400"></textarea>
                </div>
                <!-- Send Button
<div class="form-group col-md-12">
                  <button type="submit" class="btn btn-main ">
Send comment
</button>
                </div>
              </div>
            </form>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2623631126659676"       crossorigin="anonymous"></script>
<!-- footer Start -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
       <!-- <div class="footer-manu">
          <ul>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact us</a></li>
            <li><a href="service.html">How it works</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="pricing.html">Pricing</a></li>
          </ul>
        </div> -->
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
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- filter -->
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/SyoTimer/jquery.syotimer.min.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
    <script src="plugins/google-map/map.js"></script>

    <script src="js/script.js"></script>

    </body>

    </html>
