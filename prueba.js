$(document).ready(function(){
	$(".dm_box").click(cambiar);
	$("#Principal").click(cambiarDOM);
	$("#boton").click(funcionEjecutar)
})

function cambiar(){
 	$(".girando").removeClass("animar2");
	$(".girando").addClass("animar1");
	$(".girando").removeClass("rotacion2");
	$(".girando").addClass("rotacion1");
}

function cambiarDOM(){
	$(".girando").removeClass("animar1");
	$(".girando").addClass("animar2");
	$(".girando").removeClass("rotacion1");
	$(".girando").addClass("rotacion2");
}

function funcionEjecutar() {
	var enlace = $("#enlace").val();
	
	
	var file = getParameterByName("file");
	
	$("#resultado").text(file);
}

function getParameterByName(name) { 
	name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]"); 
	var regexS = "[\\?&]" + name + "=([^&#]*)"; 
	var regex = new RegExp(regexS); 
	var results = regex.exec(enlace);
	if (results == null) { 
		return ""; } 
	else { 
		return decodeURIComponent(results[1].replace(/\+/g, " ")); } 
};