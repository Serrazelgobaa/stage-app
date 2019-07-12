<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<header>
		<nav>
			<div id="align-left">
				<img src="images/menu_hamburger.png" height="36px" width="36px">
				<a href="#"><img src="images/logo-blanc.png" height="30px" width="45px"></a>
			</div>
			<img src="images/menu_profil.png" height="36px" width="36px">
		</nav>
		<h1>PapyNum</h1>
	</header>

	<main>
		<div id="bande_icones">
			<a href="gestion_prestas.php"><div class="icon_container">
				<img src="images/build.png" height="52px" width="52px">
				<p>Gérer les prestations</p>
			</div></a>
			<a href="gestion_clients.php"><div class="icon_container">
				<img src="images/people.png" height="52px" width="76px">
				<p>Gérer les clients</p>
			</div></a>
		</div>


		<section>
			<div class="section_body">
				<h2>Dernières visites</h2>

				<div class="carte_visite">
					<div class="carte_body">
						<h3>Mme Truc</h3>
						<p>Prestation : Récupération de données</p>
					</div>

					<div class="carte_footer">
						<p>20/05/2020</p>
					</div>
				</div>
			</div>

			<div class="section_footer">
				<a href="gestion_visites.php">Toutes les visites >></a>
			</div>
		</section>
		<section>
			<div class="section_body">
				<h2>Impayés</h2>
				<div class="carte_visite">
					<div class="carte_body">
						<p class="impaye">31€</p><h3>Installation d'imprimante</h3>
						<p>Client : M. Bidule</p>
					</div>

					<div class="carte_footer">
						<p>Visite effectuée le 25/03/2019</p>
					</div>
				</div>
			</div>

			<div class="section_footer">
				<a href="gestion_visites.php">Tous les impayés >></a>
			</div>
		</section>
	</main>

<script type="text/javascript" src="main.js"></script>
</body>
</html>