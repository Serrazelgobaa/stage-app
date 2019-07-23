
const glisserGauche = () => {
	document.getElementById('clients_slider').style.transform = 'translateX(-50%)';
	document.getElementById('clients_slider').style.transition = 'transform 0.4s ease';
};

$(document).ready(function() {

	$(".client").each(function() {
		$(this).click(function() {

			const idClient= $(this).attr("id");


			$("#profil_client").load("components/profil_client.php?id="+ idClient +"");
			glisserGauche();
		});

	});
		
	});


