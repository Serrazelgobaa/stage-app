<?php
	include 'components/bdd.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="./style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/ajax_modal.js"></script>
	<title></title>
	<?php

  	if(isset($_GET['create'])) {
  						
  						$create = $_GET['create'];

  						if($create === "true") {

  							$presta_nom = utf8_decode(htmlspecialchars($_POST['nv_presta_nom']));
  							$presta_desc = utf8_decode(htmlspecialchars($_POST['nv_presta_desc']));
							$presta_prix = utf8_decode(htmlspecialchars($_POST['nv_presta_prix']));

  				

  							$sql_insertion = "INSERT INTO prestations (nom,prix,description) VALUES('".$presta_nom."',".$presta_prix.",'".$presta_desc."')";

  							mysqli_query($connexion, $sql_insertion); 

  				
  						}

  					}

  	if(isset($_GET['delete'])) {

  		$delete = $_GET['delete'];

  		$sql_suppression = "DELETE FROM prestations WHERE id=$delete";

  		mysqli_query($connexion, $sql_suppression);
  	}

  	if(isset($_GET['edit'])) {
  						
  		$edit = $_GET['edit'];

  		$edit_presta_nom = utf8_decode(htmlspecialchars($_POST['edit_presta_nom']));
  		$edit_presta_desc = utf8_decode(htmlspecialchars($_POST['edit_presta_desc']));
		$edit_presta_prix = utf8_decode(htmlspecialchars($_POST['edit_presta_prix']));

  		$sql_edit = "UPDATE prestations SET nom = '".$edit_presta_nom."', description = '".$edit_presta_desc."', prix = '".$edit_presta_prix."' WHERE id=".$edit."";

  		mysqli_query($connexion, $sql_edit);
  	}
  	?>
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

		<div id="container_modal">
	
		</div>

				<?php 

					$sql = "SELECT * FROM prestations";
					$resultat = mysqli_query($connexion, $sql);

					while($prestation = mysqli_fetch_assoc($resultat)) {
						echo "<div class=\"art_card\"><div class=\"card_header\">";
						echo "<h2 class=\"titre_client\">";
						echo utf8_encode($prestation['nom']);
						echo "</h2><div class=\"icon_card\"><img src=\"./images/edit.png\" id=\"".$prestation['id']."\" class=\"icon_edit ".$prestation['id']."\"><a href=\"gestion_prestas.php?delete=".$prestation['id']."\"><img src=\"./images/delete.png\"></a></div></div>";
						echo "<div class=\"body_card\"><p>";
						echo utf8_encode($prestation['description']);
						echo "</p>";
						echo "<h3>Tarif : ";
						echo utf8_encode($prestation['prix']);
						echo " €</h3></div></div>";
					}

	

				?>
	</main>
	

<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/modal.js"></script>
</body>
</html>