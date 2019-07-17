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

			<div class="client">
				<h4 id="client1">Nom Prénom</h4>

				<div class="client_icons">
					<img src="images/edit.png" height="30px" width="30px">
					<img src="images/delete.png" height="30px" width="30px">
				</div>
			</div>
			<hr noshade>
			<div class="client">
				<h4>Nom Prénom</h4>

				<div class="client_icons">
					<img src="images/edit.png" height="30px" width="30px">
					<img src="images/delete.png" height="30px" width="30px">
				</div>
			</div>
			<hr noshade>
			<div class="client">
				<h4>Nom Prénom</h4>

				<div class="client_icons">
					<img src="images/edit.png" height="30px" width="30px">
					<img src="images/delete.png" height="30px" width="30px">
				</div>
			</div>
			<hr noshade>
			<div class="client">
				<h4>Nom Prénom</h4>

				<div class="client_icons">
					<img src="images/edit.png" height="30px" width="30px">
					<img src="images/delete.png" height="30px" width="30px">
				</div>
			</div>
		</div>

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