<!--    MODIFIER UNE PRESTATION         -->

	<?php
		$id_presta = $_GET['id'];
			include "bdd.php";

		$sql_modif = "SELECT * FROM prestations WHERE id=".$id_presta." LIMIT 1";
		$resultat_modif = mysqli_query($connexion, $sql_modif);

		while($prestation_modif = mysqli_fetch_assoc($resultat_modif)) {

			$prestation_modif_nom = $prestation_modif['nom'];
			$prestation_modif_desc = $prestation_modif['description'];
			$prestation_modif_prix = $prestation_modif['prix'];

				echo "<div id=\"modal_modif_presta\">";
				echo "<img src=\"images/croix.png\" id=\"croix6\" width=\"35px\" height=\"35px\">";
				echo "<form action=\"gestion_prestas.php?edit=".$prestation_modif['id']."\" method=\"post\">";
				echo "<h2>Modifier la prestation</h2>";
				echo "<label for=\"edit_presta_nom\" name=\"edit_presta_nom\">Nom : </label><br><input type=\"text\" name=\"edit_presta_nom\" id=\"edit_presta_nom\" value=\"".$prestation_modif_nom."\"><br>";
				echo "<label for=\"edit_presta_desc\" name=\"edit_presta_desc\">Description : </label><br><textarea name=\"edit_presta_desc\" id=\"edit_presta_nom\">".$prestation_modif_desc."</textarea><br>";
				echo "<label for=\"edit_presta_prix\" name=\"edit_presta_prix\">Tarif : </label><br><input type=\"text\" name=\"edit_presta_prix\" id=\"edit_presta_prix\" value=\"".$prestation_modif_prix."\"> €<br>";
				echo "<input type=\"submit\" value=\"Modifier la prestation\" class=\"submit_modal\" name=\"submit\">";
				echo "</form>";
				echo "</div>";
			}
	?>

	<script type="text/javascript">

			$("#croix6").click(function() {
				$("#modal_modif_presta").addClass("hidden");
				$("#noir_modal").addClass("hidden");
			});

			$("#noir_modal").click(function() {
				$("#modal_modif_presta").addClass("hidden");
				$("#noir_modal").addClass("hidden");
			});
	</script>
