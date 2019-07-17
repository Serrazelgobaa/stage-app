const ouvrirCreerClient = () => {
	document.getElementById('noir_modal').classList.remove('hidden');
	document.getElementById('modal_creation_client').classList.remove('hidden');
};

const fermerCreerClient = () => {
	document.getElementById('noir_modal').classList.add('hidden');
	document.getElementById('modal_creation_client').classList.add('hidden');
};

const ouvrirCreerVisite = () => {
	document.getElementById('noir_modal').classList.remove('hidden');
	document.getElementById('modal_creation_visite').classList.remove('hidden');
};

const fermerCreerVisite = () => {
	document.getElementById('noir_modal').classList.add('hidden');
	document.getElementById('modal_creation_visite').classList.add('hidden');
};

const button = document.getElementById('create_button');

if (button.classList.contains('create_client')) {
	button.addEventListener('click', ouvrirCreerClient);
	document.getElementById('croix3').addEventListener('click',fermerCreerClient);
	document.getElementById('noir_modal').addEventListener('click',fermerCreerClient);
}

else if (button.classList.contains('create_visite')){
	console.log('autre');
	button.addEventListener('click', ouvrirCreerVisite);
	document.getElementById('croix4').addEventListener('click',fermerCreerVisite);
	document.getElementById('noir_modal').addEventListener('click',fermerCreerVisite);
}
