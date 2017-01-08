(function($) {  
	$.get = function(key)   {  
		key = key.replace(/[\[]/, '\\[');  
		key = key.replace(/[\]]/, '\\]');  
		var pattern = "[\\?&]" + key + "=([^&#]*)";  
		var regex = new RegExp(pattern);  
		var url = unescape(window.location.href);  
		var results = regex.exec(url);  
		if (results === null) {  
			return null;  
		} else {  
			return results[1];  
		}  
	}  
    })(jQuery);

$(document).ready(function(){
	SetearColor();
	$('#Menu a').hover(cambiarColor,vuelveColor);
	$('#Menu a[name="home"]').addClass("menuActivado");
	$('#aLogin').click(LoginClick);
	$('#tbBuscador').focus(TomaFocoBuscador);
	$('#tbBuscador').blur(PierdeFocoBuscador);
})

function TomaFocoBuscador(){
	$('#tbBuscador').addClass("active"); 
}

function PierdeFocoBuscador(){
	$('#tbBuscador').removeClass("active"); 
}

function SetearColor(){
	var a = $.get("action");
	$("#Cabezera").text(a);
	var Dir;
	Dir = window.location;
	if (a=="menuAndroid") {
		ColorActual = "green";
		ColorFondo = "#83F983";
		return true;}
	if (a=="menuJava") {
		ColorActual = "orange";
		ColorFondo = "#EDBB6D";
		return true;}
	if (a=="menuHtml") {
		ColorActual = "#666666";
		ColorFondo = "#999999";
		return true;}
	if (a=="menuCss") {
		ColorActual = "#66FF66";
		ColorFondo = "#99FF00";
		return true;}
	if (a=="menuJavaScript") {
		ColorActual = "#F2DB4F";
		ColorFondo = "#F6E782";
		return true;}
	if (a=="menuPHP") {
		ColorActual = "#5A68A5";
		ColorFondo = "#7B83A1";
		return true;}
	if (a=="menuMySQL") {
		ColorActual = "#007B7B";
		ColorFondo = "#00A8A6";
		return true;}
	if (a=="menuSQLServer") {
		ColorActual = "red";
		ColorFondo = "#FF9797";
		return true;}
	ColorActual = "blue";
	ColorFondo = "#2F8FF1";
}

function cambiarColor(){
	if ($(this).text()=="Home") {
		$(".colorCambia").css("background-color","blue");
		$("body").css("background-color","#2F8FF1");
		return true;}
	if ($(this).text()=="Java") {
		$(".colorCambia").css("background-color","orange");
		$("body").css("background-color","#EDBB6D");
		return true;}
	if ($(this).text()=="Android") {
		$(".colorCambia").css("background-color","green");
		$("body").css("background-color","#83F983");
		return true;}
	if ($(this).text()=="Html") {
		$(".colorCambia").css("background-color","#666666");
		$("body").css("background-color","#999999");
		return true;}
	if ($(this).text()=="Css") {
		$(".colorCambia").css("background-color","#66FF66");
		$("body").css("background-color","#99FF00");
		return true;}
	if ($(this).text()=="JavaScript") {
		$(".colorCambia").css("background-color","#F2DB4F");
		$("body").css("background-color","#F6E782");
		return true;}
	if ($(this).text()=="Php") {
		$(".colorCambia").css("background-color","#5A68A5");
		$("body").css("background-color","#7B83A1");
		return true;}
	if ($(this).text()=="MySQL") {
		$(".colorCambia").css("background-color","#007B7B");
		$("body").css("background-color","#00A8A6");
		return true;}
	if ($(this).text()=="SQL Server") {
		$(".colorCambia").css("background-color","red");
		$("body").css("background-color","#FF9797");
		return true;}
}

function vuelveColor(){
	$(".colorCambia").css("background-color",ColorActual);
	$("body").css("background-color",ColorFondo);
}

function LoginClick(){
	if ($("#contenedor").css("visibility")=="hidden"){
		LoginAparecer();}
	else{
		LoginDesaparecer();}
}

function LoginDesaparecer(){
	$("#contenedor").css("visibility","hidden");
//	$(".divTopLeft").css("visibility","hidden");
 	$(".divTopLeft").css("height","30");
	$(".girando").removeClass("animar2");
	$(".girando").addClass("animar1");
	$(".girando").removeClass("rotacion2");
	$(".girando").addClass("rotacion1");
	$("#aLogin").removeClass("DefaultActivado");
}

function LoginAparecer(){
	$(".girando").removeClass("animar1");
	$(".girando").addClass("animar2");
	$(".girando").removeClass("rotacion1");
	$(".girando").addClass("rotacion2");
	$("#contenedor").css("visibility","visible");
//	$(".divTopLeft").css("visibility","visible");
	$(".divTopLeft").css("height","385");
	$("#aLogin").addClass("DefaultActivado");
}