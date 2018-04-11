var perPeso, perCodigo;
window.addEvent('domready', function(){
	perPeso = window.setInterval(leePeso, 5000);
	perCodigo = window.setInterval(leeCodigo, 5000);
	leePeso();
	leeCodigo();
});
