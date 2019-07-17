<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"> 
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>

	<header>
		<nav>
			<div id="align-left">
				<img id="btn_burger" src="images/menu_hamburger.png" height="36px" width="36px">
				<a href="#"><img src="images/logo-blanc.png" height="30px" width="45px"></a>

				<ul id="menu_nav">
					<a href="gestion_clients.php"><li>Clients</li></a>
					<a href="gestion_visites.php"><li>Visites</li></a>
					<a href="gestion_prestas.php"><li>Prestations</li></a>
				</ul>

			</div>
			<div id="align-right">
				<ul id="login">
					<a href="#"><li>Connexion</li></a>
					<a href="#"><li id="btn_signup">Inscription</li></a>
				</ul>
				<img src="images/menu_profil.png" height="36px" width="36px" id="menu_profil">
			</div>
		</nav>
		<h1>PapyNum</h1>
		<p>Cette application permet de gérer des visites à domicile de clients en demande d’apprentissage numérique.</p>
	</header>

	  <div id="menu_hamburger" class="hidden">
        <ul id="menu_options">
          <a href="index.php"><li>Accueil</li></a>
          <hr>
          <a href="gestion_clients.php"><li>Clients</li></a>
          <hr>
          <a href="gestion_visites.php"><li>Visites</li></a>
          <hr>
          <a href="gestion_prestas.php"><li>Prestations</li></a>
        </ul>
    </div>

    <div id="noir" class="hidden"></div>

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

		<div id="accueil">
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
		</div>
	</main>

<script type="text/javascript" src="js/main.js"></script>
</body>
</html>