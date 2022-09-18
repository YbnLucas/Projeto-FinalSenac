
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Books</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<style>
		</style>
		
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Books</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<?php 
											if(!isset($_SESSION)){
												session_start();
											} 
											echo $_SESSION['name_login'];
											?><br>
											<li><a href="login/perfil.php">Perfil</a></li>
											<li><a href="#header">Inicio</a></li>
											<li><a href="#one">Sobre</a></li>
											<li><a href="#two">Objetivo</a></li>
											<li><a href="#three">Autores</a></li>
											<li><a href="#footer">Contato</a></li>
											<li><a href="pacote_logado.html">pacotes</a></li>
											<form action="logout.php">
												<br><br><br><br>
											<li><button class="btn btn-danger" type="submit">logout</button></li>
											</form>
											
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

					<section id="banner">
						<div class="inner">
							<h2>Books</h2>
							<div class="subtext">
								<p style="font-size: 15px;">Livros mudam pessoas, pessoas mudam o mundo.</p>
						</div>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 special">
						<div class="inner">
							<header class="major">
								<h2>Sobre</h2>
								<p>Nossa livraria contém livros para todos os gostos, tendo exemplares dos mais famosos escritores da atualidade.</p>
							</header>
						</div>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="images/img_obj.jpg" alt="" /></div><div class="content">
								<h2>Objetivo</h2>
			<p>Nossa livraria foi fundada em 1960 com objetivo de alimentar seu conhecimento literário, visamos colocar os livros ao alcance da população, permitindo amplo acesso a todos os brasileiros.</p>
							</div>
						</section>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style2 special">
						<div class="inner">
							<header class="major">
								<h2>Alguns dos autores de nossos livros</h2>
							</header>
							
						</div>
						<section class="spotlight">
							<div class="image"><img src="images/Antônio_Xerxenesky.jpg" style="max-height: 30rem" alt="" /></div><div class="content">
								<h2>Antônio Xerxenesky</h2>
								<p>Antônio Xerxenesky é um escritor e tradutor brasileiro que vive em São Paulo. É doutor em Teoria literária pela Universidade de São Paulo e mestre em Literatura comparada pela Universidade Federal do Rio Grande do Sul. Foi selecionado em 2012 como um dos 20 melhores jovens escritores pela revista britânica Granta. É escritor do livro Uma tristeza infinita e muitos outros.</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/3.1.jpg" alt="" /></div><div class="content">
								<h2>Cristina Judar</h2>
								<p>É escritora, jornalista, autora das HQs Lina (Editora Estação Liberdade) e dos livros Vermelho, Vivo (Devir Brasil). Com o livro de contos Roteiros para uma Vida Curta (Editora Reformatório), foi finalista e recebeu Menção Honrosa no Prêmio SESC de Literatura 2014. É coautora do livro-arte Luminescências e, em 2015, escreveu o projeto de prosa poética Questions For a Live Writing durante uma residência na Queen Mary University of London. É uma das editoras da revista de arte e cultura LGBT Reversa Magazine. Seu romance Oito do Sete (Editora Reformatório), contemplado pelo ProAC de Prosa 2014, foi finalista do Prêmio Jabuti 2018 e é ganhador do Prêmio São Paulo de Literatura 2018. </p>
							</div>
						</section>
					</section>
					
				<!-- CTA -->
					
				<!-- Footer -->
					<footer id="footer">
						<p>Email: book@gmail.com</p>	
						<p>Endereço: Rua Guimaraes da Prada n°202</p>	
						<p>Telefone: (21)1241-6098</p>	
					</footer>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>



