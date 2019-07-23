
	<?php 
		$id_client = $_GET['id'];

		include "bdd.php";


		$sql_client = "SELECT * FROM clients WHERE id=".$id_client." LIMIT 1";
		$resultat_client = mysqli_query($connexion, $sql_client);

		while ($sql_client_info = mysqli_fetch_assoc($resultat_client)) {
		

		echo "<h2>".$sql_client_info['nom']." ".$sql_client_info['prenom']."</h2>";
		echo "<div class=\"info_client\" >";
		echo "<img src =\"images/phone.png\" width=\"40px\" height=\"40px\">";
		echo "<p>" .$sql_client_info['telephone']."</p>";
		echo "</div>";
		echo "<div class=\"info_client\">";
		echo "<img src =\"images/mail.png\" width=\"40px\" height=\"40px\"><p>";
		echo $sql_client_info['mail']."</p>";
		echo "</div>";
		echo "<div class=\"info_client\">";
		echo "<img src =\"images/home.png\" width=\"40px\" height=\"40px\"><p>";
		echo $sql_client_info['adresse'];
		echo "<br>";
		echo $sql_client_info['code_postal']. " " . $sql_client_info['ville']."</p>";
		echo "</div>";
	}
	?>		

