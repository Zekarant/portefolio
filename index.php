<?php if(isset($_POST['envoyerMail'])){
	if (!empty($_POST['email']) || $_POST['demande']) {
		echo "Tous les champs ne sont pas remplis !";
	} else {
		$header="MIME-Version: 1.0\r\n";
        $header.="From: Colin CHOMEL <colin42660@gmail.com>\n";
        $header.='Content-Type:text/html; charset="utf-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
        mail('colin42660@gmail.com', $_POST['email'], $_POST['demande'], $header);
	}
}

?>
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
	<div id="main">
		<div class="flexbox">
			<div class="element">
				<span style="cursor:pointer" onclick="openNav()">&#9776;</span>
			</div>
			<div class="element">
				<i class="bi bi-linkedin"></i>
				<i class="bi bi-github"></i>
			</div>
		</div>
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
					<br/>
					<a href="CHOMEL_Colin_CV.pdf" download="CHOMEL_Colin_CV.pdf" class="bouton">Télécharger mon CV</a>
				</div>
				<br/><br/>
				<div class="col-lg-6 align-self-center imageAbout">
				</div>
			</div>
		</div>
		<hr class="separation2">
		<h2 class="text-center titleProjets" id="projets">Mes projets</h2>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 mt-4">
					<div class="content" style="background-image: url('https://www.mangasfan.fr/lib/images/banniere.webp'); background-size: cover; background-position: center; height: 300px;">
						<div class="content-overlay"></div>
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
							<hr class="content-separation">
							<a href="#" class="boutonProjet">Voir le projet</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mt-4">
					<div class="content" style="background-image: url('https://media.discordapp.net/attachments/621363217779785738/722796733859627138/logo_1.png'); background-size: cover; background-position: center; height: 300px;">
						<div class="content-overlay"></div>
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
							<hr class="content-separation">
							<a href="#" class="boutonProjet">Voir le projet</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mt-4">
					<div class="content" style="background-image: url('images/ticketing.png'); background-size: cover; background-position: center; height: 300px;">
						<div class="content-overlay"></div>
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
							<hr class="content-separation">
							<a href="#" class="boutonProjet">Voir le projet</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mt-4">
					<div class="content" style="background-image: url('images/accueilInes.png'); background-size: cover; background-position: center; height: 300px;">
						<div class="content-overlay"></div>
						<div class="content-details fadeIn-top">
							<h3>Page d'accueil - BlindCat</h3>
							<hr class="content-separation">
							<p>Page d'accueil pour le projet d'une amie.</p>
							<img src="images/html.png" class="petitesImages" />
							<img src="images/css.png" class="petitesImages" />
							<hr class="content-separation">
							<a href="#" class="boutonProjet">Voir le projet</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mt-4">
					<div class="content" style="background-image: url('images/laravel-projet.png'); background-size: cover; background-position: center; height: 300px;">
						<div class="content-overlay"></div>
						<div class="content-details fadeIn-top">
							<h3>Système de classe inverse</h3>
							<hr class="content-separation">
							<p>Système de ticketing (programmée pour l'épreuve E4 du BTS)</p>
							<hr class="content-separation">
							<img src="images/bootstrap.png" class="petitesImages" />
							<img src="images/html.png" class="petitesImages" />
							<img src="images/css.png" class="petitesImages" />
							<img src="images/php.png" class="petitesImages" />
							<img src="images/mysql.png" class="petitesImages" />
							<img src="images/laravel.png" class="petitesImages" />
							<hr class="content-separation">
							<a href="#" class="boutonProjet">Voir le projet</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mt-4">
					<div class="content" style="background-image: url('images/logofda.png'); background-size: cover; background-position: center; height: 300px;">
						<div class="content-overlay"></div>
						<div class="content-details fadeIn-top">
							<h3>Prestashop - Deuxième année</h3>
							<hr class="content-separation">
							<p>Pour mon deuxième stage, j'ai réalisé un site e-commerce avec Prestashop</p>
							<hr class="content-separation">
							<img src="images/logopresta.png" class="petitesImages" />
							<hr class="content-separation">
							<a href="#" class="boutonProjet">Voir le projet</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mt-4">
					<div class="content" style="background-image: url('https://media.discordapp.net/attachments/821458337857273857/823928446668898404/linkedin_banner_image_1.png'); background-size: cover; background-position: center; height: 300px;">
						<div class="content-overlay"></div>
						<div class="content-details fadeIn-top">
							<h3>Projet perso - Le Ptit Coin</h3>
							<hr class="content-separation">
							<p>Site web semblable au Bon Coin pour un jeu de rôleplay. (GTA RP)</p>
							<hr class="content-separation">
							<img src="images/bootstrap.png" class="petitesImages" />
							<img src="images/html.png" class="petitesImages" />
							<img src="images/css.png" class="petitesImages" />
							<img src="images/php.png" class="petitesImages" />
							<img src="images/mysql.png" class="petitesImages" />
							<hr class="content-separation">
							<a href="#" class="boutonProjet">Voir le projet</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mt-4">
					<div class="content" style="background-image: url('https://www.pixenli.com/image/USCDvY87'); background-size: cover; background-position: center; height: 300px;">
						<div class="content-overlay"></div>
						<div class="content-details fadeIn-top">
							<h3>Portefolio - BOURLIER</h3>
							<hr class="content-separation">
							<p>Portfolio en HTML pour un ami.</p>
							<hr class="content-separation">
							<img src="images/html.png" class="petitesImages" />
							<img src="images/css.png" class="petitesImages" />
							<hr class="content-separation">
							<a href="#" class="boutonProjet">Voir le projet</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr class="separation">
		<br/><br/>
		<h2 class="text-center titleProjets">Contact</h2>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<form action="" method="POST">
						<label>Email :</label>
						<input type="mail" name="email" placeholder="Saisir votre adresse mail" class="form-control">
						<br/>
						<label>Votre message :</label>
						<textarea rows="10" name="demande" class="form-control" placeholder="Saisir votre demande"></textarea>
						<br/>
						<input type="submit" name='envoyerMail' class="bouton">
					</form>
				</div>
				<div class="col-lg-6 d-flex mx-auto align-self-center imageContact">
				</div>
			</div>
		</div>
		 <div class="footer-bottom">
	        <div class="container">
	            <div class="row">
	            	<div class="col-lg-6">
	            		<span data-bs-toggle="modal" data-bs-target="#exampleModal">Mentions légales</span>
	            	</div>
	            	<div class="col-lg-6">
	            		CHOMEL Colin - 2022
	            	</div>
	            </div>
	        </div>
	    </div>
	    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Mentions légales</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
	      </div>
	      <div class="modal-body">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
	      </div>
	    </div>
	  </div>
	</div>
	</div>
</body>
</html>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementByClass("flexbox").style.display = "none";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>