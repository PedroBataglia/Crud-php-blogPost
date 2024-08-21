<?php

$dbPath = __DIR__ . '/banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");
$videoList = $pdo->query('SELECT * FROM videos;')->fetchAll(PDO::FETCH_ASSOC);

?>
<?php require_once __DIR__ . '/views/inicio-html.php' ?><!-- header close -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2623631126659676"
        crossorigin="anonymous"></script>
<!-- Slider Start -->
<section class="slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1 class="animated fadeInUp"> Elaine Figueiredo  <br> </h1>
                    <p class="animated fadeInUp">  Produtos Digitais, Arquitetura e Modelagem de Software
                        <br>
                        Especialista em Dados, Análise e Requisitos de Negócio
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Wrapper Start -->
<section name="sobre" class="about section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="block">
                    <div class="section-title">
                        <h2>Sobre mim</h2>
                        <p>Mestre em Ciência da Computação com linha de pesquisa em Inteligência Artificial e Ontologias Biomédicas</p>
                    </div>
                    <p>
                        Te Ensino a ampliar seu conhecimento em TI.
                        Sou apaixonada pelo conhecimento por tecnologia, inteligência artificial, dados  e todas as suas possibilidades.
                        "Educação Tecnológica transforma vidas".
                        Profissional Multipotencial, Autodidata e Versátil podendo atuar em diferentes áreas e multidisciplinaridade em tecnologia. No momento desejo atuar no mundo corporativo com Dados e Projetos que envolvam ESG e os Objetivos de Desenvolvimento Sustentável associados a tecnologia.
                        A sinergia entre ESG os ODS e Tecnologia impulsiona práticas sustentáveis e avanços tecnológicos para um futuro mais justo e equitativo."
                        Sou DATA DRIVEN e Agilista, amo inteligência artificial e creio que a experiência do usuário associada a dados e a IA são disruptivas e transformam.
                        Creio que a tecnologia aliada e aplicada a diversas áreas de negócio representa o hoje e o futuro com todas as possibilidades e produtividade que advém da inteligência artificial e dados.
                        Sou grata a tudo: Se não há ganho, há aprendizado.
                        Gratidão a vida e a saúde!
                    </p>
                    <p class="signature">- Elaine B. Figueiredo</p>
                </div>
            </div><!-- .col-md-7 close -->
            <div class="col-md-5">
                <div class="block">
                    <img src="Public/images/wrapper-img.png" alt="Img">
                </div>
            </div><!-- .col-md-5 close -->
        </div>
    </div>
</section>

<section class="slider">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6">
                <h2 class="section-subtitle gold">I BELIEVE IN GREAT IDEAS</h2>
                <p class="white">  I believe in big ideas, however I am an agilist and I do refinements.
                    The journey is carried out step by step.
                    Simplicity wins the game!
                </p>
                <p class="white">  Eu acredito em grandes ideias, no entanto eu sou agilista e realizo refinamentos, afinal, o caminho é feito por um passo de cada vez (contenha a ansiedade)
                    A jornada é realizada passo a passo.
                    Simplicidade ganha jogo!
                </p>
                <p class="white"> Amo tecnologia, pesquisar e nerdiar rs
                </p>
                <!-- <a href="portfolio.html" class="btn btn-view-works">View Works</a> -->
            </div>
        </div>
    </div>
</section>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2623631126659676"
        crossorigin="anonymous"></script>
<!-- Service Start
<section class="service">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <div class="section-title">
          <h2>Our Services</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, <br> there live the
            blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="icon ion-coffee"></i>
          <h4>Branding</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-compass"></i>
          <h4>Web Design</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-image"></i>
          <h4>App Design</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-bug"></i>
          <h4>Start Up</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-headphone"></i>
          <h4>Logo Design</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-leaf"></i>
          <h4>Development</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-planet"></i>
          <h4>Brand Identity</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-earth"></i>
          <h4>Brand Identity</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
        </div>
      </div>
    </div>
  </div>
</section>  -->
<!-- Call to action Start

<section class="call-to-action bg-1 section-sm overly">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<h2 class="mb-3">We design delightful digital experiences.</h2>
					<p>Read more about what we do and our philosophy of design. Judge for yourself The work and results <br> we’ve
						achieved for other clients, and meet our highly experienced Team who just love to design.</p>
					<a class="btn btn-main btn-solid-border" href="contact.html">Tell Us Your Story</a>
				</div>
			</div>
		</div>
	</div>
</section>
-->
<!-- Content Start
<section class="testimonial">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2>Fun Facts About Us</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, <br> there live the
            blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="block">
          <ul class="counter-box clearfix">
            <li>
              <div class="counter-item">
                <i class="ion-ios-chatboxes-outline"></i>
                <h4 class="count" data-count="99">0</h4>
                <span>Cups Of Coffee</span>
              </div>
            </li>
            <li>
              <div class="counter-item">
                <i class="ion-ios-glasses-outline"></i>
                <h4 class="count" data-count="45">0</h4>
                <span>Article Written</span>
              </div>
            </li>
            <li>
              <div class="counter-item">
                <i class="ion-ios-compose-outline"></i>
                <h4 class="count" data-count="125">0</h4>
                <span>Projects Completed</span>
              </div>
            </li>
            <li>
              <div class="counter-item">
                <i class="ion-ios-timer-outline"></i>
                <h4 class="count" data-count="200">0</h4>
                <span>Combined Projects</span>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-5 col-md-offset-1">
        <div class="testimonial-carousel text-center">
          <div class="testimonial-slider owl-carousel">
            <div>
              <i class="ion-quote"></i>
              <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative
                ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
              <div class="user">
                <img src="images/item-img1.jpg" alt="Pepole">
                <p><span>Rose Ray</span> CEO-Themefisher</p>
              </div>
            </div>
            <div>
              <i class="ion-quote"></i>
              <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative
                ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
              <div class="user">
                <img src="images/item-img1.jpg" alt="Pepole">
                <p><span>Rose Ray</span> CEO-Themefisher</p>
              </div>
            </div>
            <div>
              <i class="ion-quote"></i>
              <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative
                ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
              <div class="user">
                <img src="images/item-img1.jpg" alt="Pepole">
                <p><span>Rose Ray</span> CEO-Themefisher</p>
              </div>
            </div>
            <div>
              <i class="ion-quote"></i>
              <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative
                ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
              <div class="user">
                <img src="images/item-img1.jpg" alt="Pepole">
                <p><span>Rose Ray</span> CEO-Themefisher</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 -->
<!-- footer Start -->
<?php require_once __DIR__ . '/viewsx/fim-html.php'; ?>

