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
			$client_modif_tel = $client_modif['telephone'];
			$client_modif_mail = $client_modif['mail'];

			echo "<div id=\"modal_edit_client\">";
			echo "<img src=\"images/croix.png\" id=\"croix\" width=\"35px\" height=\"35px\">";
			echo "<form action=\"gestion_clients.php?edit=".$client_modif['id']."\" method=\"post\">";
			echo "<h2>Modifier client</h2>";
			echo "<label for=\"edit_client_nom\" name=\"edit_client_nom\">Nom : </label><br><input type=\"text\" name=\"edit_client_nom\" id=\"edit_client_nom\" value=\"".$client_modif_nom."\"><br>";
			echo "<label for=\"edit_client_prenom\" name=\"edit_client_prenom\">Prénom : </label><br><input type=\"text\" name=\"edit_client_prenom\" id=\"edit_client_prenom\" value=\"".$client_modif_prenom."\"><br>";
			echo "<label for=\"edit_client_adresse\" name=\"edit_client_adresse\">Adresse : </label><br><input type=\"text\" name=\"edit_client_adresse\" id=\"edit_client_adresse\" value=\"".$client_modif_adr."\"><br>";
			echo "<label for=\"edit_client_cp\" name=\"edit_client_cp\">Code postal : </label><br><input type=\"text\" name=\"edit_client_cp\" id=\"edit_client_cp\" value=\"".$client_modif_cp."\"><br>";
			echo "<label for=\"edit_client_ville\" name=\"edit_client_ville\">Ville : </label><br><input type=\"text\" name=\"edit_client_ville\" id=\"edit_client_ville\" value=\"".$client_modif_ville."\"><br>";
			echo "<label for=\"edit_client_tel\" name=\"edit_client_tel\">Numéro de téléphone : </label><br><input type=\"text\" name=\"edit_client_tel\" id=\"edit_client_tel\" value=\"".$client_modif_tel."\"><br>";
			echo "<label for=\"edit_client_mail\" name=\"edit_client_mail\">Adresse email : </label><br><input type=\"text\" name=\"edit_client_mail\" id=\"edit_client_mail\" value=\"".$client_modif_mail."\"><br>";
			echo "<input type=\"submit\" value=\"Modifier les informations\" class=\"submit_modal\">";
			echo "</form>";
			echo "</div>";

				
			}
	?>


	<script type="text/javascript">

			$("#croix").click(function() {
				$("#modal_edit_client").addClass("hidden");
				$("#noir_modal").addClass("hidden");
			});

			$("#noir_modal").click(function() {
				$("#modal_edit_client").addClass("hidden");
				$("#noir_modal").addClass("hidden");
			});
	</script>
