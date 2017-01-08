// JavaScript Document
function mostrarModal(){
	$("#Cabezera").text("Chambi");
	$('body').prepend('<div id="bgmodal11" class="Postmodal"></div>');
	$('#bgmodal11').append('<div id="BotonCerrar" class="clCerrar"></div>');
	$('#BotonCerrar').append('<a class="LinkWhite">X</a>');
	$('#bgmodal11').append('<div id="Post_Body_Modal"></div>');
	$('#bgmodal11').append('<div id="modalBotones"></div>');
	$('#Post_Body_Modal').append('<div id="resultados">Aqui va</div>');
	$('#modalBotones').append('<span id="spPublicar"><a class="LinkWhite">Aceptar</a></span>');
	$('#modalBotones').append('<span id="spCerrar" class="clCerrar"><a class="LinkWhite">Cerrar</a></span>');
	$('body').prepend('<div id="bgmodalPost" class="Postmodal"></div>');
	$('#bgmodalPost').append('<p>Vista Previa</p>');
	$('body').prepend('<div id="bgtransparent" class="bgtransparent"></div>');
	//Posisionamiento en la pantalla:
	var wscr = $(window).width();
	var hscr = $(window).height();
	var mleft = ( wscr - 900 ) / 2;
    var mtop = ( hscr - 500 ) / 2;
	$('.Postmodal').css("left", mleft+'px');
    $('.Postmodal').css("top", mtop+'px');
	//prettyPrint();
	$("#spPublicar").click(function(){
		FuncPublicar();
		cerrarModal();
	});
	$('.clCerrar').click(function(){
		cerrarModal();
	});
}

function cerrarModal(){
	$('#bgmodal11').remove();
	$('#bgmodalPost').remove();
	$('#bgtransparent').remove();
}