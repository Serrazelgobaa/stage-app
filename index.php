<?php 
	include 'components/bdd.php';
?>

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

					<?php
						$sql = "SELECT visites.*, clients.nom AS client_nom, clients.prenom AS client_prenom FROM visites INNER JOIN clients ON visites.clients_id=clients.id LIMIT 5";
						$resultat = mysqli_query($connexion, $sql);

							while($visite = mysqli_fetch_assoc($resultat)) {
								echo "<div class=\"carte_visite\"><div class=\"carte_body\"><h3>";
								echo $visite['client_nom'];
								echo " ";
								echo $visite['client_prenom'];
								echo "</h3>";
								echo "<p>Prestation(s) :";

								$sql_presta_liste2 = "SELECT visites_prestations.*, prestations.nom AS nom_presta FROM visites_prestations INNER JOIN prestations ON visites_prestations.prestations_id=prestations.id WHERE visites_id=".$visite['id']."";

                 				$resultat_presta2 = mysqli_query($connexion, $sql_presta_liste2);

                 			while($presta_liste2 = mysqli_fetch_assoc($resultat_presta2)) {
                  				echo $presta_liste2['nom_presta'];
                  				echo " | ";
                			}

								echo "</p>";
								echo "</div><div class=\"carte_footer\"><p>";
								echo $visite['date'];
								echo "</p></div></div>";
							}
						
					?>
				</div>

				<div class="section_footer">
					<a href="gestion_visites.php">Toutes les visites >></a>
				</div>
			</section>
			<section>
				<div class="section_body">
					<h2>Impayés</h2>

					<?php
						$sql_impaye = "SELECT visites.*, clients.nom AS client_nom, clients.prenom AS client_prenom FROM visites INNER JOIN clients ON visites.clients_id=clients.id WHERE payee=0";

						$resultat_impaye = mysqli_query($connexion,$sql_impaye);

						while($impaye = mysqli_fetch_assoc($resultat_impaye)) {
							echo "<div class=\"carte_visite\">";
							echo "<div class=\"carte_body\">";
							echo "<p class=\"impaye\">";
							echo $impaye['prix_total']." €";
							echo "</p><h3>";

							$sql_presta_liste = "SELECT visites_prestations.*, prestations.nom AS nom_presta FROM visites_prestations INNER JOIN prestations ON visites_prestations.prestations_id=prestations.id WHERE visites_id=".$impaye['id']."";

                 			$resultat_presta = mysqli_query($connexion, $sql_presta_liste);

                 			while($presta_liste = mysqli_fetch_assoc($resultat_presta)) {
                  				echo $presta_liste['nom_presta'];
                  				echo " | ";
                			}

							echo "</h3>";
							echo "<p>Client : ".$impaye['client_prenom']." ".$impaye['client_nom']."</p>";
							echo "</div>";
							echo "<div class=\"carte_footer\">";
							echo "<p>Visite effectuée le ".$impaye['date']."</p>";
							echo "</div></div>";
						}
					?>
					
						
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