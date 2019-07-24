<!--    MODIFIER INFORMATIONS CLIENT 
il faut rajouter ds le css le modal_modif_client       -->

	<?php
		$id_clients = $_GET['id'];
			include "bdd.php";

		$sql_modif = "SELECT * FROM clients WHERE id=".$id_clients." LIMIT 1";
		$resultat_modif = mysqli_query($connexion, $sql_modif);

		while($client_modif = mysqli_fetch_assoc($resultat_modif)) {

			$client_modif_nom = $client_modif['nom'];
			$client_modif_prenom = $client_modif['prenom'];
			$client_modif_adr = $client_modif['adresse'];
			$client_modif_cp = $client_modif['code_postal'];
			$client_modif_ville = $client_modif['ville'];
			$client_modif_telephone = $client_modif['telephone'];
			$client_modif_mail = $client_modif['mail'];

				echo "<div id=\"modal_modif_client\" class=\"hidden\">";
				echo "<img src=\"images/croix.png\" id=\"croix6\" width=\"35px\" height=\"35px\">";

				echo "<form action=\"gestion_clients.php?edit=".$client_modif['id']."\" method=\"post\">";
				echo "<h2>Modifier les informations du client</h2>";

				echo "<label for=\"edit_client_nom\" name=\"edit_client_nom\">Nom : </label><br><input type=\"text\" name=\"edit_client_nom\" id=\"edit_client_nom\" value=\"".$client_modif_nom."\"><br>";

				echo "<label for=\"edit_client_prenom\" name=\"edit_client_prenom\">Prenom : </label><br><textarea name=\"edit_client_prenom\" id=\"edit_client_prenom\">".$client_modif_prenom."</textarea><br>";

				echo "<label for=\"$edit_client_adr \" name=\"$edit_client_adr \">Adresse : </label><br><textarea name=\"$edit_client_adr \" id=\"$edit_client_adr \" value=\"".$client_modif_adr."</textarea><br>";


				echo "<label for=\"$edit_client_cp\" name=\"$edit_client_cp\">Adresse : </label><br><textarea name=\"$edit_client_cp\" id=\"$edit_client_cp  \" value=\"".$client_modif_cp."</textarea><br>";

				echo "<label for=\"$edit_client_ville\" name=\"$edit_client_ville\">Ville : </label><br><textarea name=\"$edit_client_ville\" id=\"$edit_client_ville\" value=\"".$client_modif_ville."</textarea><br>";

				echo "<label for=\"$edit_client_telephone\" name=\"$edit_client_telephone  \">Téléphone : </label><br><textarea name=\"$edit_client_telephone\" id=\"$edit_client_telephone\" value=\"".$client_modif_ville."</textarea><br>";

				echo "<label for=\"$edit_client_mail\" name=\"$edit_client_mail\">Mail : </label><br><textarea name=\"$edit_client_mail\" id=\"$edit_client_mail\" value=\"".$client_modif_ville."</textarea><br>";
				echo "</form>";
				echo "</div>";
			}
	?>

	<script type="text/javascript">

			$("#croix6").click(function() {
				$("#modal_modif_client").addClass("hidden");
				$("#noir_modal").addClass("hidden");
			});

			$("#noir_modal").click(function() {
				$("#modal_modif_client").addClass("hidden");
				$("#noir_modal").addClass("hidden");
			});
	</script>
