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
	<nav id="tiny_bar">
		<div id="align-left">
				<img id="btn_burger" src="images/menu_hamburger.png" height="36px" width="36px">
				<a href="index.php"><img src="images/logo-blanc.png" height="30px" width="45px"></a>

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
    
	<div id="create">
		<a href="#" id="create_button"><img src="images/add_circle.png">Nouveau client</a>
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
</body>
</html>