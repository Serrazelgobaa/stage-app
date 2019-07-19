<?php
	include 'bdd.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="./style.css">
	<title></title>
</head>
<body class="grey">
	
<?php 
  include 'components/nav_menu.php';
  include 'components/modals.php';

  
?>

	<div id="create">
		<a href="#" id="create_button" class="create_presta"><img src="images/add_circle.png">Nouvelle prestation</a>
	</div>

	<main class="marge-top">

				<?php 

					$sql = "SELECT * FROM prestations";
					$resultat = mysqli_query($connexion, $sql);

					while($prestation = mysqli_fetch_assoc($resultat)) {
						echo "<div class=\"art_card\"><div class=\"card_header\">";
						echo "<h2 class=\"titre_client\">";
						echo utf8_encode($prestation['nom']);
						echo "</h2><div class=\"icon_card\"><img src=\"./images/edit.png\"><img src=\"./images/delete.png\"></div></div>";
						echo "<div class=\"body_card\"><p>";
						echo utf8_encode($prestation['description']);
						echo "</p>";
						echo "<h3>Tarif : ";
						echo utf8_encode($prestation['prix']);
						echo " €</h3></div></div>";
					}


					if(isset($_GET['create'])) {
  						$create = $_GET['create'];

  						if($create === "true") {

  							$presta_nom = htmlspecialchars($_POST['nv_presta_nom']);
  							$presta_desc = htmlspecialchars($_POST['nv_presta_desc']);
  							$presta_prix = htmlspecialchars($_POST['nv_presta_prix']);

  							mysqli_query($connexion, "INSERT INTO prestations (nom,prix,description) VALUES(".$presta_nom.",".$presta_prix.",".$presta_desc.")");
  						}

  					}

				?>
	</main>
	

<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/modal.js"></script>
</body>
</html>