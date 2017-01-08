function mostrarModal(){
	$("#Cabezera").text("Chambi");
	$('body').prepend('<div id="bgmodal1" class="bgmodal"></div>');
	$('#bgmodal1').append('<div id="modalX" class="clCerrar"></div>');
	$('#modalX').append('<a class="LinkWhite">X</a>');
	$('#bgmodal1').append('<div id="modalIngreso"></div>');
	$('#bgmodal1').append('<div id="modalBotones"></div>');
	$('#modalIngreso').append('<input id="urlAvatar" type="text" class="Tb-ingreso" placeholder="Ingrese la URL" />');
	$('#urlAvatar').focus();
	$('#modalBotones').append('<span id="spAceptar"><a class="LinkWhite">Aceptar</a></span>');
	$('#modalBotones').append('<span id="spCerrar" class="clCerrar"><a class="LinkWhite">Cerrar</a></span>');
	$('body').prepend('<div id="bgmodal2" class="bgmodal"></div>');
	$('#bgmodal2').append('<p>Ingresa la URL de tu Avatar</p>');
	$('body').prepend('<div id="bgtransparent" class="bgtransparent"></div>');
	//Posisionamiento en la pantalla:
	var wscr = $(window).width();
	var hscr = $(window).height();
	var mleft = ( wscr - 500 ) / 2;
    var mtop = ( hscr - 150 ) / 2;
	$('.bgmodal').css("left", mleft+'px');
    $('.bgmodal').css("top", mtop+'px');
	$("#spAceptar").click(function(){
		AvatarUrl = $("#urlAvatar").val();
		$("#Div-Medio-izq img").attr("src",AvatarUrl);
		$("#tbAvatar").attr("value",AvatarUrl);
		cerrarModal();
	});
	$('.clCerrar').click(function(){
		cerrarModal();
	});
}

function cerrarModal(){
	$('#bgmodal1').remove();
	$('#bgmodal2').remove();
	$('#bgtransparent').remove();
}