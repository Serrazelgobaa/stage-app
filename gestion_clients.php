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
<body class="grey" id="clients_page">
	
<?php 
  include 'components/nav_menu.php';
  include 'components/modals.php';
?>
    
	<div id="create">
		<a href="#" id="create_button" class="create_client"><img src="images/add_circle.png">Nouveau client</a>
	</div>

	<main id="clients_slider" class="marge-top">
		<div class="container_clients">

			<h2 class="titre_client">Clients</h2>

	<?php 
			$sql = "SELECT nom,prenom FROM clients";
			$resultat = mysqli_query($connexion, $sql);

			while($client = mysqli_fetch_assoc($resultat)) {
				echo "<div class=\"client\">";
				echo "<h4>";
				echo $client['nom'] ." ". $client['prenom'];
				echo "</h4>";
				echo "<div class=\"client_icons\">";
				echo "<img src=\"./images/edit.png\" height=\"30px\" width=\"30px\">";
				echo "<img src=\"./images/delete.png\" height=\"30px\" width=\"30px\">";
				echo "</div> </div>";
				echo "<hr></hr>";
			}
	?>
		</div>
		<!--fin de la liste des clients-->

		<!-- ajout nouveaux clients-->
	<?php

		if(isset($_GET['create'])) {
			$create = $_GET['create'];

			if($create === "true") {
				$client_nom = htmlspecialchars($_POST['nv_client_nom']);
				$client_prenom = htmlspecialchars($_POST['nv_client_prenom']);
				$client_adresse = htmlspecialchars($_POST['nv_client_adresse']);
				$client_cp = htmlspecialchars($_POST['nv_client_cp']);
				$client_ville = htmlspecialchars($_POST['nv_client_ville']);
				$client_tel = htmlspecialchars($_POST['nv_client_tel']);
				$client_mail = htmlspecialchars($_POST['nv_client_mail']);

			$sql_insertion = "INSERT INTO clients (nom,prenom,adresse,code_postal,ville,telephone,mail) VALUES('".$client_nom."', '".$client_prenom."', '".$client_adresse."', '".$client_cp."', '".$client_ville."', ".$client_tel.", '".$client_mail."')";

			mysqli_query($connexion, $sql_insertion);

			}
		}

	?>
<!-- /////////////////////////////////////////////////////////////-->

		<div class="container_clients">
			<img src="images/croix.png" width="40px" height="40px" id="croix">
			<h2>Nom Prénom</h2>

			<div class="info_client">
				<img src ="images/phone.png" width="40px" height="40px"><p>00.00.00.00.00</p>
			</div>
			<div class="info_client">
				<img src ="images/mail.png" width="40px" height="40px"><p>nom.prenom@gmail.com</p>
			</div>
			<div class="info_client">
				<img src ="images/home.png" width="40px" height="40px"><p>Chemin des Oliviers <br> 13352 Trifouillis les Oies</p>
			</div>
		</div>
	</main>

<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/clients.js"></script>
<script type="text/javascript" src="js/modal.js"></script>
</body>
</html>