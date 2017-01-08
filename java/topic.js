document.write("<script type='text/javascript' src='javascript/funciones-ajax.js'></script>");
$(document).ready(function(){
	$("#Div-Medio-der a").click(activarExtencion);     								//Efecto usuario
	$('.Comet-Text-Area').focus(TomaFocoTxtComent); 								//Efecto Ingreso Texto Comentario
	$('.Comet-Text-Area').blur(PierdeTxtComent);    								//Efecto Ingreso Texto Comentario
	$('.div-topic-comentarios').hover(MostrarBotonesComent,QuitarBotonesComent); 	//Efecto aparecer botones coment
	$(".BC_response").click(ActionResponse);										//Boton Responder
	$(".BC_denunciar").click(ActionDenunciar);										//Boton Denunciar
	//$(".BotonMasComent").click(MostrarMasComantarios);
	//$("#btnIdCard").click(fnBotonPrueba);
	
	//Boton Comentar del Reply
	$(".div-TotalComentarios").on("click",".div-ResplyComent input.ComentBoton",function(){
		var pasarComentario = $(this).parent().prev().children('div.DivComentColDer').children('textarea').val();
		if (pasarComentario=='') {
			$(this).next().css('visibility','visible');
		}
		else {
			var pasarIdComent = $(this).attr('name');
			var pasarIdUser = $('#div-oculta-idUser').text();
			FuncionReplyComentar(pasarIdComent,pasarIdUser,pasarComentario);
			var URL = $("#AvatarChiuito").attr('src');
			var nick = $("#nickTop").text();
				$("#Temporal"+pasarIdComent).load('php/insertComentReply.php',{PasarURL:URL,PasarComent:pasarComentario,pasarNick:nick});
			$("#Respuesta"+pasarIdComent).fadeOut(1000,function(){
				$("#CapaReply"+pasarIdComent).append($("#Temporal"+pasarIdComent+" div.div-topic-comentarios"));
			});
		}
	});
	
	$(".ComentBoton").click(function(e) {
		e.preventDefault();
		var Comentario = $('#Id_textarea_coment').val();
		if (Comentario=='') {
			$('#ErrorPrimerComent').css('visibility','visible');
		}
		else {
			var pasarIdPost = $('.spanIdpost').text();
			var pasarIdUser = $('#div-oculta-idUser').text();
			FuncionComentar(pasarIdPost,pasarIdUser,Comentario);
			var URL = $("#AvatarChiuito").attr('src');
			var nick = $("#nickTop").text();
			$("#UltimoComentario").load('php/insertComent.php',{PasarURL:URL,PasarComent:Comentario,pasarNick:nick});
			$(".ComentEnElPost").fadeOut(1000,function(){
				$("#UltimoComentario").fadeIn(1000);
				$("#UltimoComentario").appendTo(".div-TotalComentarios");
				$("#UltimoComentario").attr('id','pasado');
				$(".div-TotalComentarios").after("<div id='UltimoComentario'>Entro como pina</div>");
			});
		}
	});
	
})

function ActionResponse(){
	var URL = $("#AvatarChiuito").attr('src');
	var IdComent = $(this).attr('id');
	var pasarIdUser = $('#div-oculta-idUser').text();
	$("#Respuesta"+IdComent).load('php/replyComent.php',{IdDelUser:pasarIdUser,IdDelComent:IdComent,UrlDelAvatar:URL});
	$("#Respuesta"+IdComent).fadeIn(1000);
}

function working() {
	alert("work");
}

function ActionDenunciar(){
	var IdComent = $(this).attr('id');
	alert(IdComent);
	$("#Respuesta"+IdComent).append("<label id='Id_agregado'>Agregado</label>");
	$("#Id_agregado").click(working);
}

function MostrarBotonesComent(){
	var Objeto = $(this).children().eq(1).children().eq(2);
	$(Objeto).css('opacity','1');
}

function QuitarBotonesComent(){
	$('.div-pie-coment').css('opacity','0');
}

function MostrarMasComantarios(){
	$(this).remove();
	var pasarIdPost = $('.spanIdpost').text();
	var PostCantComent = $(this).attr('name');
	var totalComent = $('#SpanComent').text();
	var pasarIdUser = $('#div-oculta-idUser').text();
	$(".divMasComent").load('php/masComent.php',{IdDelPost:pasarIdPost,pasarCantComent:PostCantComent,PostTotalComent:totalComent,PostIdUser:pasarIdUser});
}

function fnBotonPrueba(){
	alert("Apretaron boton");
	var temp = new Object();
	temp['tag'] = "prueba";
	temp['datoVan'] = "VaelDato";
	$.ajax({
		//beforeSend: function(){
		//mostrarError("#Error-nick","Verificando","#FFDE95","url(imagenes/registro-cargar.gif)");},
		type: "POST",
		data: temp,
		url: 'php/fncomentar.php',
		success: function(data){
			var dataJson = eval(data);
			alert(dataJson[1].manolo);
			//for(var i in dataJson){
                //alert(dataJson[i].manolo);
			//	alert("entro");
            //	}
			//var res = jQuery.parseJSON(data);
			//alert(res[0].Fecha);
			}
	});
}

function TomaFocoTxtComent(){
	$(this).addClass("active"); 
}

function PierdeTxtComent(){
	$(this).removeClass("active"); 
}

function activarExtencion(){
	if ($(this).text()==">") {
		$("#divExtencion").css("visibility","visible");
		$("#divExtencion").css("width","205px");
		$(this).text("<");
	}
	else {
		$("#divExtencion").css("width","0px");
		$("#divExtencion").css("visibility","hidden");
		$(this).text(">");
	}
}