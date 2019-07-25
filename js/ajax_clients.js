
const glisserGauche = () => {
	document.getElementById('clients_slider').style.transform = 'translateX(-50%)';
	document.getElementById('clients_slider').style.transition = 'transform 0.4s ease';
};

$(document).ready(function() {

	$(".client_titre").each(function() {
		$(this).click(function() {

			const idClient= $(this).attr("id");


			$("#profil_client").load("components/profil_client.php?id="+ idClient +"");
			glisserGauche();
		});

	});
		
	});

/* un peu d'ajax :) pour chaque icone crayon, si clic dessus on obtient l'id de
ce client ///////////////////////////// */
$(document).ready(function() {

	$(".icon_edit").each(function() {
		$(this).click(function() {

			const idIcon= $(this).attr("id");


			$("#container_modal").load("components/modal_edit_client.php?id="+ idIcon +"");
			$("#noir_modal").removeClass("hidden");
			$("#modal_edit_client").removeClass("hidden");
		});

	});
		
	});


