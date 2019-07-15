
const glisserGauche = () => {
	document.getElementById('clients_slider').style.transform = 'translateX(-50%)';
	document.getElementById('clients_slider').style.transition = 'transform 0.4s ease';
};

const glisserDroite = () => {
	document.getElementById('clients_slider').style.transform = 'translateX(0%)';
	document.getElementById('clients_slider').style.transition = 'transform 0.4s ease';
};

document.getElementById('client1').addEventListener('click', glisserGauche);
document.getElementById('croix').addEventListener('click', glisserDroite);