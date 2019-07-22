$(document).ready(function() {

	$(".icon_edit").each(function() {
		$(this).click(function() {

			const idIcon= $(this).attr("id");

			console.log(idIcon);

			$("#container_modal").load("components/modal_edit.php?id="+ idIcon +"");
			$("#noir_modal").removeClass("hidden");
			$("#modal_modif_presta").removeClass("hidden");
		});

	});
		
	});