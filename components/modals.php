<?php
include"bdd.php";
?>

<div id="noir_modal" class="hidden">
</div>

<!--               AJOUTER UN NOUVEAU CLIENT ---------------->


<div id="modal_creation_client" class="hidden">
	<img src="images/croix.png" id="croix3" width="35px" height="35px">
	<form action="gestion_clients.php?create=true" method="post">
		<h2>Nouveau client</h2>
		<label for="nv_client_nom" name="nv_client_nom">Nom : </label><br><input type="text" name="nv_client_nom" id="nv_client_nom"><br>
		<label for="nv_client_prenom" name="nv_client_prenom">Prénom : </label><br><input type="text" name="nv_client_prenom" id="nv_client_prenom"><br>
		<label for="nv_client_adresse" name="nv_client_adresse">Adresse : </label><br><input type="text" name="nv_client_adresse" id="nv_client_adresse"><br>
		<label for="nv_client_cp" name="nv_client_cp">Code postal : </label><br><input type="text" name="nv_client_cp" id="nv_client_cp"><br>
		<label for="nv_client_ville" name="nv_client_ville">Ville : </label><br><input type="text" name="nv_client_ville" id="nv_client_ville"><br>
		<label for="nv_client_tel" name="nv_client_tel">Numéro de téléphone : </label><br><input type="text" name="nv_client_tel" id="nv_client_tel"><br>
		<label for="nv_client_mail" name="nv_client_mail">Adresse email : </label><br><input type="text" name="nv_client_mail" id="nv_client_mail"><br>



		<input type="submit" value="Ajouter le client" class="submit_modal">

	</form>
</div>

<!--            AJOUTER UNE NOUVELLE VISITE ---------------->

<div id="modal_creation_visite" class="hidden">
	<img src="images/croix.png" id="croix4" width="35px" height="35px">
	<form action="gestion_visites.php" method="post">
		<h2>Nouvelle visite</h2>
		<label for="nv_visite_date" name="nv_visite_date">Date  </label><br>
		<input type="datetime" name="nv_visite_date" id="nv_visite_date"><br>
		<label for ="nv_visite_heure" name="nv_visite_heure">et heure :</label><br>
		<input type="time" name="nv_visite_heure" id="nv_visite_heure"><br>
		<label for="nv_visite_prix_total" name="nv_visite_prix_total">Prix Total :</label><br>
		<input type="text" name="nv_visite_prix_total" id="nv_visite_prix_total"><br><br>


		<select name="quel_clients" id="quel_clients">
			<option value="">Sélectionner un client :</option>
			<?php
				$sql = "SELECT nom FROM clients ";
				$res = mysqli_query($connexion, $sql);
				while($quel_client=mysqli_fetch_assoc($res)) {
					echo '<option>'.$quel_client["nom"].'</option>';
				}
			?>
		</select><br>


		<input type="submit" value="Ajouter la visite" class="submit_modal">

	</form>
</div>

<!------------- AJOUTER UNE NOUVELLE PRESTATION ---------------->

<div id="modal_creation_presta" class="hidden">
	<img src="images/croix.png" id="croix5" width="35px" height="35px">
	<form action="gestion_prestas.php?create=true" method="post">
		<h2>Nouvelle prestation</h2>
		<label for="nv_presta_nom" name="nv_presta_nom">Nom : </label><br><input type="text" name="nv_presta_nom" id="nv_presta_nom"><br>
		<label for="nv_presta_desc" name="nv_presta_desc">Description : </label><br><textarea name="nv_presta_desc" id="nv_presta_nom"></textarea><br>
		<label for="nv_presta_prix" name="nv_presta_prix">Tarif : </label><br><input type="text" name="nv_presta_prix" id="nv_presta_prix"> €<br>

		<input type="submit" value="Ajouter la prestation" class="submit_modal" name="submit">

	</form>
</div>