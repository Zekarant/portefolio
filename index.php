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
	<div class="flexbox">
		<div class="element">
			<span style="cursor:pointer" id="boutonOuvrir" onclick="openNav()">&#9776;</span>
		</div>
		<div class="element">
			<a href="https://github.com/Zekarant/" class="lienReseaux" target="_blank"><i class="bi bi-github"></i></a>
			<a href="https://www.linkedin.com/in/colin-chomel-bb373b208/" class="lienReseaux" target="_blank"><i class="bi bi-linkedin"></i></a>
		</div>
	</div>
	<div id="main">
		<div id="entete">
			<h1 class="mainTitle">Colin</h1>
			<h4 class="secondaryTitle">Portfolio</h4>
			<p class="introduction">Bienvenue sur le portfolio d'un jeune développeur passionné par le web. J'espère que mon univers vous plaira !</p>
		</div>
		<hr class="separation">
		<h2 class="aboutTitle text-center" id="apropos">A propos</h2>
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
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div id="curve" class="card" style="background-image: url('https://www.mangasfan.fr/lib/images/banniere.webp');">
						<div class="footer">
							<div class="connections">
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/bootstrap.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/html.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/css.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/javascript.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/php.png');"></div></div>
							</div>
							<div class="info">
								<div class="name">Mangas'Fan - Site d'actualité mangas et animes</div>
								<div class="job">Mangas'Fan est un projet de site web réalisé par moi-même. Il s'agit de mon projet principal.</div>
							</div>
						</div>
						<div class="card-blur"></div>
					</div>
				</div>
				<div class="col-lg-4">
					<div id="curve" class="card" style="background-image: url('https://media.discordapp.net/attachments/821458337857273857/823928446668898404/linkedin_banner_image_1.png');">
						<div class="footer">
							<div class="connections">
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/bootstrap.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/html.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/css.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/javascript.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/php.png');"></div></div>
							</div>
							<div class="info">
								<div class="name">Le P'tit Coin - Site RP</div>
								<div class="job">Le P'tit Coin est un site réalisé pour l'intéraction avec un jeu vidéo (GTA RP).</div>
							</div>
						</div>
						<div class="card-blur"></div>
					</div>
				</div>
				<div class="col-lg-4">
					<div id="curve" class="card" style="background-image: url('/portfolioV2/images/logofda.png');">
						<div class="footer">
							<div class="connections">
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/bootstrap.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/html.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/css.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/javascript.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/php.png');"></div></div>
							</div>
							<div class="info">
								<div class="name">La Ferme des Aygues - Projet stage</div>
								<div class="job">Site e-commerce réalisé pour la validation de mon stage de deuxième année de BTS.</div>
							</div>
						</div>
						<div class="card-blur"></div>
					</div>
				</div>
				<div class="col-lg-4">
					<div id="curve" class="card" style="background-image: url('/portfolioV2/images/laravel-projet.png');">
						<div class="footer">
							<div class="connections">
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/bootstrap.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/html.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/css.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/javascript.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/php.png');"></div></div>
							</div>
							<div class="info">
								<div class="name">Classe inversée - Projet BTS</div>
								<div class="job">Projet réalisé sous Laravel 5 dans le cadre de la validation du BTS.</div>
							</div>
						</div>
						<div class="card-blur"></div>
					</div>
				</div>
				<div class="col-lg-4">
					<div id="curve" class="card" style="background-image: url('/portfolioV2/images/logoCLV.png');">
						<div class="footer">
							<div class="connections">
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/bootstrap.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/html.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/css.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/javascript.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/php.png');"></div></div>
							</div>
							<div class="info">
								<div class="name">CLV42 - Site d'association</div>
								<div class="job">Site réalisé durant l'année de licence pour l'association Centre de Loisirs et de Vacances.</div>
							</div>
						</div>
						<div class="card-blur"></div>
					</div>
				</div>
				<div class="col-lg-4">
					<div id="curve" class="card" style="background-image: url('/portfolioV2/images/ticketing.png');">
						<div class="footer">
							<div class="connections">
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/bootstrap.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/html.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/css.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/javascript.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/php.png');"></div></div>
							</div>
							<div class="info">
								<div class="name">Système de ticketing - Projet BTS</div>
								<div class="job">Projet réalisé pour l'épreuve de BTS.</div>
							</div>
						</div>
						<div class="card-blur"></div>
					</div>
				</div>
				<div class="col-lg-4">
					<div id="curve" class="card" style="background-image: url('/portfolioV2/images/accueilInes.png');">
						<div class="footer">
							<div class="connections">
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/bootstrap.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/html.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/css.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/javascript.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/php.png');"></div></div>
							</div>
							<div class="info">
								<div class="name">BlindCat - Réalisation amicale</div>
								<div class="job">Page d'accueil réalisée à la demande d'une amie pour son projet de BlindCat</div>
							</div>
						</div>
						<div class="card-blur"></div>
					</div>
				</div>
				<div class="col-lg-4">
					<div id="curve" class="card" style="background-image: url('https://media.discordapp.net/attachments/621363217779785738/722796733859627138/logo_1.png');">
						<div class="footer">
							<div class="connections">
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/bootstrap.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/html.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/css.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/javascript.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/php.png');"></div></div>
							</div>
							<div class="info">
								<div class="name">Mam's Ourson - Site d'association</div>
								<div class="job">Site réalisé dans le but de valider le stage de première année de BTS</div>
							</div>
						</div>
						<div class="card-blur"></div>
					</div>
				</div>
				<div class="col-lg-4">
					<div id="curve" class="card" style="background-image: url('https://www.pixenli.com/image/USCDvY87');">
						<div class="footer">
							<div class="connections">
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/bootstrap.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/html.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/css.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/javascript.png');"></div></div>
								<div class="connection behance"><div class="icon" style="background-image: url('/portfolioV2/images/php.png');"></div></div>
							</div>
							<div class="info">
								<div class="name">Portfolio - BOURLIER Léo</div>
								<div class="job">Portfolio de test réalisé pour un ami.</div>
							</div>
						</div>
						<div class="card-blur"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom" id="footer">
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
				Merci de lire avec attention les différentes modalités d’utilisation du présent site avant d’y parcourir ses pages. En vous connectant sur ce site, vous acceptez sans réserves les présentes modalités. Aussi, conformément à l’article n°6 de la Loi n°2004-575 du 21 Juin 2004 pour la confiance dans l’économie numérique, les responsables du présent site internet <a href="http://https://www.colin-chomel.fr">https://www.colin-chomel.fr</a> sont :

				<p style="color: #b51a00;"><span style="color: rgb(0, 0, 0);"><b>Editeur du Site : </b></span></p>
				Nom : CHOMEL
				Prénom : Colin
				5 Lotissement Le Pied des Saints
				Email : colin42660@gmail.com
				Site Web : <a href="http://https://www.colin-chomel.fr">https://www.colin-chomel.fr</a>
			</br>
			<p style="color: #b51a00;"><b><span style="color: rgb(0, 0, 0);">Hébergement :</span> </b></p>
			Hébergeur : Nexgate
			Site Web :  <a href="http://https://www.nexgate.ch">https://www.nexgate.ch</a>
		</br>
		<p style="color: #b51a00;"><span style="color: rgb(0, 0, 0);"><b>Conditions d’utilisation : </b></span></p>
		Ce site (<a href="http://https://www.colin-chomel.fr">https://www.colin-chomel.fr</a>) est proposé en différents langages web (HTML, HTML5, Javascript, CSS, etc…) pour un meilleur confort d'utilisation et un graphisme plus agréable, nous vous recommandons de recourir à des navigateurs modernes comme Internet explorer, Safari, Firefox, Google Chrome, etc…
		Les mentions légales ont été générées sur le site <a title="générateur de mentions légales pour site internet gratuit" href="http://www.generateur-de-mentions-legales.com">Générateur de mentions légales</a>, offert par <a title="imprimerie paris, imprimeur paris" href="http://welye.com">Welye</a>.

		<span style="color: #323333;">CHOMEL Colin<b> </b></span>met en œuvre tous les moyens dont elle dispose, pour assurer une information fiable et une mise à jour fiable de ses sites internet. Toutefois, des erreurs ou omissions peuvent survenir. L'internaute devra donc s'assurer de l'exactitude des informations auprès de , et signaler toutes modifications du site qu'il jugerait utile. n'est en aucun cas responsable de l'utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.

		<b>Liens hypertextes :</b> Les sites internet de peuvent offrir des liens vers d’autres sites internet ou d’autres ressources disponibles sur Internet. CHOMEL Colin ne dispose d'aucun moyen pour contrôler les sites en connexion avec ses sites internet. ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. Elle ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments. Les risques liés à cette utilisation incombent pleinement à l'internaute, qui doit se conformer à leurs conditions d'utilisation.

		Les utilisateurs, les abonnés et les visiteurs des sites internet de ne peuvent mettre en place un hyperlien en direction de ce site sans l'autorisation expresse et préalable de CHOMEL Colin.

		Dans l'hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction d’un des sites internet de CHOMEL Colin, il lui appartiendra d'adresser un email accessible sur le site afin de formuler sa demande de mise en place d'un hyperlien. CHOMEL Colin se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en justifier sa décision.
	</br>
	<p style="color: #b51a00;"><span style="color: rgb(0, 0, 0);"><b>Services fournis : </b></span></p>
	<p style="color: #323333;">L'ensemble des activités ainsi que ses informations sont présentés sur notre site <a href="http://https://www.colin-chomel.fr">https://www.colin-chomel.fr</a>.</p>
	<p style="color: #323333;">CHOMEL Colin s’efforce de fournir sur le site https://www.colin-chomel.fr des informations aussi précises que possible. les renseignements figurant sur le site <a href="http://https://www.colin-chomel.fr">https://www.colin-chomel.fr</a> ne sont pas exhaustifs et les photos non contractuelles. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne. Par ailleurs, tous les informations indiquées sur le site https://www.colin-chomel.fr<span style="color: #000000;"><b> </b></span>sont données à titre indicatif, et sont susceptibles de changer ou d’évoluer sans préavis.  </p>
</br>
<p style="color: #b51a00;"><span style="color: rgb(0, 0, 0);"><b>Limitation contractuelles sur les données : </b></span></p>
Les informations contenues sur ce site sont aussi précises que possible et le site remis à jour à différentes périodes de l’année, mais peut toutefois contenir des inexactitudes ou des omissions. Si vous constatez une lacune, erreur ou ce qui parait être un dysfonctionnement, merci de bien vouloir le signaler par email, à l’adresse colin42660@gmail.com, en décrivant le problème de la manière la plus précise possible (page posant problème, type d’ordinateur et de navigateur utilisé, …).

Tout contenu téléchargé se fait aux risques et périls de l'utilisateur et sous sa seule responsabilité. En conséquence, ne saurait être tenu responsable d'un quelconque dommage subi par l'ordinateur de l'utilisateur ou d'une quelconque perte de données consécutives au téléchargement. <span style="color: #323333;">De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</span>

Les liens hypertextes mis en place dans le cadre du présent site internet en direction d'autres ressources présentes sur le réseau Internet ne sauraient engager la responsabilité de CHOMEL Colin.
</br>
<p style="color: #b51a00;"><span style="color: rgb(0, 0, 0);"><b>Propriété intellectuelle :</b></span></p>
Tout le contenu du présent sur le site <a href="http://https://www.colin-chomel.fr">https://www.colin-chomel.fr</a>, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de la CHOMEL Colin à l'exception des marques, logos ou contenus appartenant à d'autres sociétés partenaires ou auteurs.

Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l'accord exprès par écrit de CHOMEL Colin. Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.
</br>
<p style="color: #b51a00;"><span style="color: rgb(0, 0, 0);"><b>Litiges : </b></span></p>
Les présentes conditions du site <a href="http://https://www.colin-chomel.fr">https://www.colin-chomel.fr</a> sont régies par les lois françaises et toute contestation ou litiges qui pourraient naître de l'interprétation ou de l'exécution de celles-ci seront de la compétence exclusive des tribunaux. La langue de référence, pour le règlement de contentieux éventuels, est le français.
</br>
<p style="color: #b51a00;"><span style="color: rgb(0, 0, 0);"><b>Données personnelles :</b></span></p>
De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet <a href="http://https://www.colin-chomel.fr">https://www.colin-chomel.fr</a>.

Cependant, ce principe comporte certaines exceptions. En effet, pour certains services proposés par notre site, vous pouvez être amenés à nous communiquer certaines données telles que : votre nom, votre fonction, le nom de votre société, votre adresse électronique, et votre numéro de téléphone. Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique « contact ». Dans tous les cas, vous pouvez refuser de fournir vos données personnelles. Dans ce cas, vous ne pourrez pas utiliser les services du site, notamment celui de solliciter des renseignements sur nos activités, ou de recevoir les lettres d’information.

Enfin, nous pouvons collecter de manière automatique certaines informations vous concernant lors d’une simple navigation sur notre site Internet, notamment : des informations concernant l’utilisation de notre site, comme les zones que vous visitez et les services auxquels vous accédez, votre adresse IP, le type de votre navigateur, vos temps d'accès. De telles informations sont utilisées exclusivement à des fins de statistiques internes, de manière à améliorer la qualité des services qui vous sont proposés. Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
</div>
</div>
</div>
</div>
</body>
</html>
<script>
	function openNav() {
		document.getElementById("mySidenav").style.width = "400px";
		document.getElementById("main").style.opacity = "0.4";
		document.getElementById("footer").style.opacity = "0.4";
		document.getElementById("boutonOuvrir").style.visibility = "hidden";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("main").style.opacity = "1";
		document.getElementById("footer").style.opacity = "1";
		document.getElementById("boutonOuvrir").style.visibility = "visible";
	}
</script>