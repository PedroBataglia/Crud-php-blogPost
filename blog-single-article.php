<?php
$dbPath = __DIR__ . '/banco-comentarios.sqlite';
$pdo = new PDO("sqlite:$dbPath");
$comentList = $pdo->query('SELECT * FROM comentarios;')->fetchAll(\PDO::FETCH_ASSOC);

$dbPath2 = __DIR__ . '/banco.sqlite';
$pdoVideo = new PDO("sqlite:$dbPath2");
$idVideo = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
#if ($idVideo !== false) {
#    $statement = $pdo->prepare('SELECT * FROM comentarios WHERE video = ?');
#    $statement->bindValue(1, $idVideo, PDO::PARAM_INT);
#    $statement->execute();
#    $comentList = $statement->fetchAll(PDO::FETCH_ASSOC);
#}


#$video = $pdoVideo->query('SELECT * FROM videos WHERE id = $id;');

#var_dump($comentList);

?>

<?php require_once __DIR__ . 'inicio-html.php'; ?>

<section class="page-title bg-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h1>Blog Destils</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, quibusdam.</p>
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
					<h2 class="post-title"></h2>
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
					<div class="post-thumb">
						<img class="img-fluid" src="Public/images/blog/blog-post-1.jpg" alt="">
					</div>
					<div class="post-content post-excerpt">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores
							vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem
							ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis
							a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere. </p>
						<blockquote class="quote-post">
							<p>
								Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes
								nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error
							</p>
						</blockquote>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum illo deserunt necessitatibus quibusdam sint,
							eos explicabo tenetur molestiae vero facere, aspernatur sit mollitia perferendis reiciendis. Deleniti magni
							explicabo sed alias fugit amet animi molestias ipsum maiores. Praesentium sint, id laborum quos. Tempora
							inventore est, dolor corporis quis doloremque nostrum, eos velit culpa quasi labore. Provident laborum porro
							nihil iste, magnam officia nemo praesentium autem, libero vel officiis. Omnis pariatur nam voluptatem voluptate
							at officia repellat ea beatae eligendi? Mollitia error saepe, aperiam facere. Optio maiores deleniti veritatis
							eaque commodi atque aperiam, debitis iste alias eligendi ut facilis earum! Impedit, tempore.</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex error esse a dolore, architecto sapiente, aliquid
							commodi, laudantium eius nemo enim. Enim, fugit voluptatem rem molestiae. Sed totam quis accusantium iste
							nesciunt id exercitationem cumque repudiandae voluptas perspiciatis, consequatur quasi, molestias, culpa odio
							adipisci. Nesciunt optio fugiat iste quam modi, ex vitae odio pariatur! Corrupti explicabo at harum qui
							doloribus, sit dicta nemo, dolor, enim eum molestias fugiat obcaecati autem eligendi? Nisi delectus eaque
							architecto voluptatibus, unde sit minus quae quod eligendi soluta recusandae doloribus, officia, veritatis
							voluptatum eius aliquam quos. Consectetur, nisi? Veritatis totam, unde nostrum exercitationem tempora suscipit,
							molestias, deserunt ipsum laborum aut iste eaque? Vitae delectus dicta maxime non mollitia? Sapiente eos a quia
							eligendi deserunt repudiandae modi molestias tenetur autem pariatur ullam itaque, quas eveniet, illo quam rerum
							ex obcaecati voluptatum nesciunt incidunt culpa provident illum soluta. Voluptas possimus nesciunt inventore
							perspiciatis neque fugiat, magnam natus repellendus praesentium eum voluptatum, alias incidunt, tempora
							reprehenderit recusandae et numquam itaque ratione dolor voluptatibus in commodi ut! Neque deserunt nostrum
							commodi dolor natus quo, non vitae deleniti, vero voluptatem error aspernatur veniam expedita numquam amet quia
							in dolores velit esse molestiae! Iusto architecto accusantium quisquam recusandae quod vero quia.</p>
					</div>
					<div class="post-comments">
						<h3 class="post-sub-heading">10 Comments</h3>
						<ul class="media-list comments-list m-bot-50 clearlist">
							<!-- Comment Item start-->
                            <?php foreach($comentList as $coment) { ?>
                            <li class="media">
                                <a class="pull-left" href="#!">
                                    <img class="media-object comment-avatar rounded-circle" src="Public/images/blog/avater-1.jpg" alt="" width="50" height="50">
                                </a>
                                <div class="media-body">
                                    <div class="comment-info">
                                        <h4 class="comment-author">
                                            <a href="#!"><?= $coment['name'] ?></a>
                                        </h4>
                                        <time>July 02, 2020, at 11:34 </time>
                                        <a class="comment-button" href="php/edit-comment.php?id=<?= $coment['id']; ?>"><i class="tf-ion-chatbubbles"></i>Reply</a>
                                        <a class="comment-button" href="php/remove-comment.php?id=<?= $coment['id']; ?>"><i class="tf-ion-chatbubbles"></i>Excluir</a>
                                    </div>
                                    <p>
                                        <?= $coment['comment']; ?>
                                    </p>
                                </div>
                            </li>
                            <?php }; ?>
							<li class="media">
								<a class="pull-left" href="#!">
									<img class="media-object comment-avatar rounded-circle" src="Public/images/blog/avater-1.jpg" alt="" width="50" height="50">
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
									<!--  second level Comment start-->
									<div class="media">
										<a class="pull-left" href="#!">
											<img class="media-object comment-avatar rounded-circle" src="Public/images/blog/avater-2.jpg" alt="" width="50" height="50">
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
											<!-- third level Comment start -->
											<div class="media">
												<a class="pull-left" href="#!">
													<img class="media-object comment-avatar rounded-circle" src="Public/images/blog/avater-3.jpg" alt="" width="50" height="50">
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
											<!-- third level Comment end -->
										</div>
									</div>
									<!-- second level Comment end -->
								</div>
							</li>
							<!-- End Comment Item -->

							<!-- Comment Item start-->
							<li class="media">
								<a class="pull-left" href="#!">
									<img class="media-object comment-avatar rounded-circle" src="Public/images/blog/avater-4.jpg" alt="" width="50" height="50">
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
							<!-- End Comment Item -->

							<!-- Comment Item start-->
							<li class="media">
								<a class="pull-left" href="#!">
									<img class="media-object comment-avatar rounded-circle" src="Public/images/blog/avater-1.jpg" alt="" width="50" height="50">
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
							<!-- End Comment Item -->
						</ul>
					</div>
					<div class="post-comments-form">
						<h3 class="post-sub-heading">Leave You Comments</h3>
						<form method="post" action="php/new-coment.php?=<?= $idVideo; ?>" id="form" role="form">
							<div class="row row-formulario">
								<div class="col-md-6 form-group">
									<!-- Name -->
									<input type="text" name="name" id="name" class="form-control" placeholder="Name *" maxlength="100" required="">
								</div>
								<div class="col-md-6 form-group">
									<!-- Email -->
									<input type="email" name="email" id="email" class="form-control" placeholder="Email *" maxlength="100"
									 required="">
								</div>
								<div class="form-group col-md-12">
									<!-- Website -->
									<input type="text" name="website" id="website" class="form-control" placeholder="Website" maxlength="100">
								</div>
								<!-- Comment -->
								<div class="form-group col-md-12">
									<textarea name="text" id="text" class="form-control" rows="6" placeholder="Comment" maxlength="400"></textarea>
								</div>
								<!-- Send Button -->
								<div class="form-group col-md-12">
									<button type="submit" class="btn btn-main ">
										Send comment
									</button>
								</div>
							</div>
						</form>
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
						<li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Contact us</a></li>
						<li><a href="service.html">How it works</a></li>
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="pricing.html">Pricing</a></li>
					</ul>
				</div>
				<p class="copyright mb-0">Copyright <script>document.write(new Date().getFullYear())</script> &copy; Designed & Developed by <a
						href="http://www.themefisher.com">Themefisher</a>. All rights reserved.
					<br> Get More <a href="https://themefisher.com/free-bootstrap-templates/">Free Bootstrap
						Templates</a>
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
