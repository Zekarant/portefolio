<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio Développeur Web - CHOMEL Colin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/accueil.css">
</head>
<body>
	<?php include('components/navbar.php'); ?>
	<div id="entete">
		<h1 class="mainTitle">Colin</h1>
		<h4 class="secondaryTitle">Portfolio</h4>
		<p class="introduction">Bienvenue sur le portfolio d'un jeune développeur passionné par le web. J'espère que mon univers vous plaira !</p>
	</div>
	<hr class="separation">
	<h2 class="aboutTitle text-center">A propos</h2>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 align-self-center">
				<p>Je suis CHOMEL Colin, actuellement étudiant en Licence Professionnelle ATII (Animateur des Technologies de l'Animation et de l'Internet) à l'IUT de Saint-Etienne (Loire - 42). Je me suis orienté sur cette formation parce que je suis passionné par le monde du développement web et je souhaitais donc accroitre mes connaissances.</p>
				<p>Vous pourrez retrouver sur ce portfolio mes compétences, une partie de mon parcours scolaire ainsi que mes différents projets.</p>
				<p>Vous avez également la possibilité de me contacter grâce au lien "Contact" situé en bas de page.</p>
			</div>
			<div class="col-lg-6 align-self-center imageAbout">
			</div>
		</div>
	</div>
	<hr class="separation2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4">
				<div class="content">
					<a href="https://www.mangasfan.fr" target="_blank">
						<div class="content-overlay"></div>
						<img class="content-image" src="https://www.mangasfan.fr/images/banniere.webp">
						<div class="content-details fadeIn-top">
							<h3>Mangas'Fan</h3>
							<hr class="content-separation">
							<p>Mangas'Fan est un projet de site web réalisé par moi-même.</p>
							<hr class="content-separation">
							<img src="images/bootstrap.png" class="petitesImages" />
							<img src="images/html.png" class="petitesImages" />
							<img src="images/css.png" class="petitesImages" />
							<img src="images/javascript.png" class="petitesImages" />
							<img src="images/php.png" class="petitesImages" />
							<img src="images/mysql.png" class="petitesImages" />
						</div>
					</a>
				</div>
				<br/>
			</div>
			<div class="col-lg-4">
				<div class="content">
					<a href="https://github.com/Zekarant/mamourson" target="_blank">
						<div class="content-overlay"></div>
						<img class="content-image" src="https://media.discordapp.net/attachments/621363217779785738/722796733859627138/logo_1.png">
						<div class="content-details fadeIn-top">
							<h3>Mam's Ourson</h3>
							<hr class="content-separation">
							<p>Site web réalisé pour le stage de première année du BTS (Association Mam'Ourson)</p>
							<hr class="content-separation">
							<img src="images/bootstrap.png" class="petitesImages" />
							<img src="images/html.png" class="petitesImages" />
							<img src="images/css.png" class="petitesImages" />
							<img src="images/php.png" class="petitesImages" />
							<img src="images/mysql.png" class="petitesImages" />
						</div>
					</a>
				</div>
				<br/>
			</div>
			<div class="col-lg-4">
				<div class="content">
					<a href="blog/index.php" target="_blank">
						<div class="content-overlay"></div>
						<img class="content-image" src="images/ticketing.png">
						<div class="content-details fadeIn-top">
							<h3>Projet de Ticketing</h3>
							<hr class="content-separation">
							<p>Système de ticketing (programmée pour l'épreuve E4 du BTS)</p>
							<hr class="content-separation">
							<img src="images/bootstrap.png" class="petitesImages" />
							<img src="images/html.png" class="petitesImages" />
							<img src="images/css.png" class="petitesImages" />
							<img src="images/php.png" class="petitesImages" />
							<img src="images/mysql.png" class="petitesImages" />
						</div>
					</a>
				</div>
				<br/>
			</div>
		</div>
	</div>
</body>
</html>