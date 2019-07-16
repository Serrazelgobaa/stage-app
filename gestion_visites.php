<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body class="grey">

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

    <div id="create" class="create_hidden">
    	<a href="#" id="create_button"><img src="images/add_circle.png">Nouvelle visite</a>
    </div>
    
    <aside class="hidden">
    	<img src="images/croix.png" id="croix2" width="40px" height="40px" class="hidden">

    	<a href="#" id="create_button2"><img src="images/add_circle.png">Nouvelle visite</a>
    	<h3>Filtres</h3>
    	<form action="gestion_visites.php" method="post">

    		<label for="date" name="date"><h4>A partir d'une date :</h4></label>
    		<input type="date" name="date" id="date">
    		<h4>Payée</h4>
    		<p><input type="radio" name="payee" id="payee_yes" value="payee_yes"><label for="payee_yes" name="payee_yes">Oui</label>
    		<input type="radio" name="payee" id="payee_no" value="payee_no"><label for="payee_no" name="payee_no">Non</label>
    		<input type="radio" name="payee" id="payee_ind" value="payee_ind"><label for="payee_ind" name="payee_ind">Indifférent</label></p>

    		<h4>Effectuée</h4>
    		<p><input type="radio" name="faite" id="faite_yes" value="faite_yes"><label for="faite_yes" name="faite_yes">Oui</label>
    		<input type="radio" name="faite" id="faite_no" value="faite_no"><label for="faite_no" name="faite_no">Non</label>
    		<input type="radio" name="faite" id="faite_ind" value="faite_ind"><label for="faite_ind" name="faite_ind">Indifférent</label></p>

    		<h4>Par prestation</h4>

    		<select name="choix_presta" id="choix_presta">
    			<option value="">Choisissez la prestation</option>
    			<option value="1">Presta 1</option>
    			<option value="2">Presta 2</option>
    			<option value="3">Presta 3</option>
    			<option value="4">Presta 4</option>
    		</select>

    		<label for="nom_client" name="nom_client"><h4>Par nom du client :</h4></label>
    		<input type="text" name="nom_client" id="nom_client"><br>

    		<input type="submit" value="Valider" id="create_button" class="valider">

    	</form>
   	</aside>

   	<div id="btn_float">
   		<img src="images/tune.png" width="50px" height="50px">
   	</div>

   	<main>

   	</main>



<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/visites.js"></script>
</body>
</html>