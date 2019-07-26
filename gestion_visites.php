<?php
  include "components/bdd.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
	
<?php 
    	if(isset($_GET['delete'])) {

      		$delete = $_GET['delete'];

      		$sql_supp = "DELETE FROM visites WHERE id=$delete";

      		mysqli_query($connexion, $sql_supp);
    	}
  ?>
</head>
<body class="grey">

<?php 
  include 'components/nav_menu.php';
  include 'components/modals.php';
?>

    <div id="create" class="create_hidden">
    	<a href="#" id="create_button" class="create_visite"><img src="images/add_circle.png">Nouvelle visite</a>
    </div>
    
    <aside class="hidden">
    	<img src="images/croix.png" id="croix2" width="40px" height="40px" class="hidden">

    	<a href="#" id="create_button2"><img src="images/add_circle.png">Nouvelle visite</a>
    	<h3>Filtres</h3>
    	<form action="gestion_visites.php?filters=true" method="post">

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

        <?php
          $sql_presta_liste = "SELECT id,nom FROM prestations";

          $presta_liste_query = mysqli_query($connexion,$sql_presta_liste);

          while($presta_opt = mysqli_fetch_assoc($presta_liste_query)) {
              echo "<option value=\"".$presta_opt['id']."\">".$presta_opt['nom']."</option>";
          }
        ?>

    		</select>

    		<h4>Par nom du client :</h4>
    		<select name="nom_client" id="nom_client">
          <option value="">Nom du Client</option>

        <?php
          $sql_clients_liste = "SELECT id,nom,prenom FROM clients";

          $clients_liste_query = mysqli_query($connexion,$sql_clients_liste);

          while($clients_opt = mysqli_fetch_assoc($clients_liste_query)) {
              echo "<option value=\"".$clients_opt['id']."\">".$clients_opt['prenom']." ".$clients_opt['nom']."</option>";
          }
        ?>

        </select>

    		<input type="submit" value="Valider" id="create_button" class="valider">

    	</form>
   	</aside>

   	<div id="btn_float">
   		<img src="images/tune.png" width="50px" height="50px">
   	</div>

   	<main id="visites_aside">
      <?php

      if (isset($_GET['filters']) && $_GET['filters'] == "true") {

        $filtres = array();

        //Vérification de la caractéristique "visite payée"

        if(isset($_POST['payee'])) {

          if($_POST['payee'] == "payee_no") {

            $filtres[] = "payee=0";
          }

          else if ($_POST['payee'] == "payee_yes") {
            $filtres[] = "payee=1";
          }

        }

        //Vérification de la caractéristique "visite effectuée"

        if(isset($_POST['faite'])) {

          if($_POST['faite'] == "faite_no") {
            $filtres[] = "effectuee=0";
          }

          else if ($_POST['faite'] == "faite_yes") {
            $filtres[] = "effectuee=1";
          }
        }

        //S'il y a des filtres, on en fait une partie de la requête SQL

        if(!empty($filtres)) {
          $filtres_query = "WHERE ".join(" AND ",$filtres);

          $sql = "SELECT visites.*, clients.nom AS client_nom, clients.prenom AS client_prenom FROM visites INNER JOIN clients ON visites.clients_id=clients.id ".$filtres_query."";

        }

        else {
          $sql = "SELECT visites.*, clients.nom AS client_nom, clients.prenom AS client_prenom FROM visites INNER JOIN clients ON visites.clients_id=clients.id";


        }

      }

      else {


        $sql = "SELECT visites.*, clients.nom AS client_nom, clients.prenom AS client_prenom FROM visites INNER JOIN clients ON visites.clients_id=clients.id";
      }
        

            $resultat = mysqli_query($connexion, $sql);

              while($visite = mysqli_fetch_assoc($resultat)) {


                echo "<div class=\"carte_visite\">";
                echo "<div class=\"card_header\">";
                echo "<div class=\"check_icons\">";

                if($visite['effectuee'] == 1) {
                  echo "<img src=\"images/check.png\" width=\"30px\" height=\"30px\"><p>Terminée</p>";
                }

                else {
                   echo "<img src=\"images/uncheck.png\" width=\"30px\" height=\"30px\"><p>En cours</p>";
                }

                if($visite['payee'] == 1) {
                  echo "<img src=\"images/paid.png\" width=\"30px\" height=\"30px\"><p>Payée</p>";
                }

                else {
                  echo "<img src=\"images/unpaid.png\" width=\"30px\" height=\"30px\"><p>Non-payée</p>";
                }

                echo "</h2></div><div class=\"icon_card\"><img src=\"./images/edit.png\" id=\"".$visite['id']."\" class=\"icon_edit ".$visite['id']."\"><a href=\"gestion_visites.php?delete=".$visite['id']."\"><img src=\"./images/delete.png\"></a></div>";

                echo "</div>";

                 $sql_presta_liste = "SELECT visites_prestations.*, prestations.nom AS nom_presta FROM visites_prestations INNER JOIN prestations ON visites_prestations.prestations_id=prestations.id WHERE visites_id=".$visite['id']."";

                 $resultat_presta = mysqli_query($connexion, $sql_presta_liste);

                echo "<div class=\"carte_body card_body\">";
                echo "<h2>Chez ".$visite['client_nom']." ".$visite['client_prenom']."</h2>";
                echo "<p>Le ".$visite['date']." à ".$visite['heure']."</p>";
                echo "<p><span class=\"bold\">Prestations : ";

                while($presta_liste = mysqli_fetch_assoc($resultat_presta)) {
                  echo $presta_liste['nom_presta'];
                  echo " | ";
                }

                echo "</span></p>";
                echo " <h3>Prix total: ".$visite['prix_total']."€</h3>";
                echo "</div></div>";

              }
            
      ?>
      
</main>        
          
         
       



<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/visites.js"></script>
<script type="text/javascript" src="js/modal.js"></script>
</body>
</html>
