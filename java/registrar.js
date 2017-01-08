document.write("<script type='text/javascript' src='javascript/modal.js'></script>"); //Libreria modal - Chamherz
$(document).ready(function(){
	$("#SubMenu").hide();
	resultadoCapcha="error";
	$('form[name=creator]').submit(BotonRegistrar);
	$("#linkCapcha").click(cambiarCapcha);
	$("#Div-Medio-der a").click(activarExtencion);
	$("#btnAvatar").click(botonCambiarAvatar);
	$("#Navegacion").hide();
	$(".Error-cartel").hide();
	$("#selectPais").change(cambiarFlag);
	$("#selectSexo").change(cambiarSexo);
	$("#tbNick").keypress(function(tecla)
		{
		t=tecla.charCode;
		if( (t>=65 && t<=90) || (t>=97 && t<=122) || (t>=48 && t<=57) || t==46 || t==95 || t==8 || t==16 || t==0) 
			{
			$("#Error-nick").hide();
			}
		else
			{
			mostrarError("#Error-nick","Solo 0-9 a-z A-Z - _","#FDCDCD","url(imagenes/registro-error.png)");
			return false;
			}
		})
	$("#tbNick").blur(verificarNick);
	$("#tbCapcha").blur(verificarCapcha);
	$("#tbEmail").keypress(function(tecla)
		{
		t=tecla.charCode;
		if(t==32) 
			{
			mostrarError("#Error-email","Sin espacios","#FDCDCD","url(imagenes/registro-error.png)");
			return false;
			}
		else
			{
            $("#Error-email").hide();
			}
		})
	$("#tbEmail").blur(function()
		{
		valor=$(this).val();
		if (valor.length==0)
			mostrarError("#Error-email","Ingrese Email","#FDCDCD","url(imagenes/registro-error.png)");
		else
			{
			var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}$/;
			if(filter.test(valor))
				{
				var filter = /@hotmail\.|@gmail\.|@yahoo\./;
				if(filter.test(valor))
					{
					var pasaje = new Object();
					pasaje['tag'] = "verEmail";
					pasaje['email'] = $(this).val();
					$("#Error-email label").text("antes ajax");
					$("#Error-email").show();
					$.ajax({
						beforeSend: function(){
							mostrarError("#Error-email","Verificando","#FFDE95","url(imagenes/registro-cargar.gif)");
							},
						type: "POST",
						data: pasaje,
						url: 'php/consultas.php',
						success: function(data){
							var res = jQuery.parseJSON(data);
							mostrarError("#Error-email",res.resultado,res.colorfondo,res.imagen);
							},
						error: function(e){ 
							alert("Error en el servidor, por favor, intentalo de nuevo mas tarde");
							}
						});
					}
				else
					{
					mostrarError("#Error-email","Dominio no permitido","#FDCDCD","url(imagenes/registro-error.png)");
					}
				}
			else
				{
				mostrarError("#Error-email","Error de Email","#FDCDCD","url(imagenes/registro-error.png)");
				}
			}
		})
	$("#tbPass1").blur(function(){
		pass=$(this).val();
		if(pass.length == 0)
			mostrarError("#Error-pass-1","Falta password","#FDCDCD","url(imagenes/registro-error.png)");
		else
			{
			if(pass.length > 7)
				{
				if($("#tbPass2").val().length == 0)
					mostrarError("#Error-pass-1","Confirmar password","#FFDE95",'url(imagenes/registro-cargar.gif)');
				else
					{
					if($("#tbPass2").val()==pass)
						mostrarError("#Error-pass-1","Pass correcta","#81E573","url(imagenes/registro-bien.png)");
					else
						mostrarError("#Error-pass-1","No coinciden","#FDCDCD","url(imagenes/registro-error.png)");
					}
				}
			else
				mostrarError("#Error-pass-1","Minimo 8 caracteres","#FDCDCD","url(imagenes/registro-error.png)");
			}
	})
	$("#tbPass2").blur(function(){
		contra=$(this).val();
		if(contra.length == 0)
			mostrarError("#Error-pass-1","Falta password","#FDCDCD","url(imagenes/registro-error.png)");
		else
			{
			if(contra.length > 7)
				{
				if($("#tbPass1").val()==contra)
					mostrarError("#Error-pass-1","Pass correcta","#81E573","url(imagenes/registro-bien.png)");
				else
					mostrarError("#Error-pass-1","No coinciden","#FDCDCD","url(imagenes/registro-error.png)");
				}
			else
				mostrarError("#Error-pass-1","Minimo 8 caracteres","#FDCDCD","url(imagenes/registro-error.png)");
			}
	})
})

function verificarNick(){
	dato=$("#tbNick").val().length;
	if(dato<1){
		mostrarError("#Error-nick","Nick Obligatorio","#FDCDCD","url(imagenes/registro-error.png)");
		return false;}
	if (dato<4){
		mostrarError("#Error-nick","Minimo 4 caracteres","#FDCDCD","url(imagenes/registro-error.png)");
		return false;}
	var variable = new Object();
	variable['tag'] = "verNick";
	variable['usuario'] = $("#tbNick").val();
	$.ajax({
		beforeSend: function(){
		mostrarError("#Error-nick","Verificando","#FFDE95","url(imagenes/registro-cargar.gif)");},
		type: "POST",
		data: variable,
		url: 'php/consultas.php',
		success: function(data){
			var res = jQuery.parseJSON(data);
			mostrarError("#Error-nick",res.resultado,res.colorfondo,res.imagen);
			$("#Span-Nick a").text(variable['usuario']);}
	});
}

function verificarCapcha(){
	var variable = new Object();
	variable['capcha'] = $("#tbCapcha").val();
	variable['tag'] = "verCapcha";
	$.ajax({
		type: "POST",
		data: variable,
		url: 'php/consultas.php',
		success: function(data){
			var res = jQuery.parseJSON(data);
			resultadoCapcha = res.resultado;
			}
	});
}

function mostrarError(iden,texto,color,grafico){
	$(iden).css("background-color",color);
	$(iden).css("background-image",grafico);
	$(iden+" label").text(texto);
	$(iden).show();
}
function cambiarFlag() {
	var indice = $(this).val();
	if (indice!=-1){
		$(".Bandera").css("background-image","url(imagenes/flag/"+indice+".png)");
		mostrarError("#Error-pais","País correcto","#81E573","url(imagenes/registro-bien.png)");}
	else{
		mostrarError("#Error-pais","País obligatorio","#FDCDCD","url(imagenes/registro-error.png)");}
}

function cambiarSexo() {
	var indice = $(this).val();
	if (indice!=-1){
		mostrarError("#Error-sexo","Sexo correcto","#81E573","url(imagenes/registro-bien.png)");}
	else{
		mostrarError("#Error-sexo","Sexo obligatorio","#FDCDCD","url(imagenes/registro-error.png)");}
}

function botonCambiarAvatar() {
	logica = mostrarModal();
 	if (logica==true) {
 		$('#Div-Preliminar').text("Verdadero");
 	};
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

function cambiarCapcha(){
	$("#ver img").attr("src","/ChamHerz/php/img.php?"+Math.random());
	$("#tbCapcha").val("");
	$("#tbCapcha").focus();
}

function BotonRegistrar(){
	if ($("#Error-nick label").text()!="Nick correcto"){
		alert("Verificar el Nick");
		return false;}
	if ($("#Error-email label").text()!="Email correcto"){
		alert("Verificar el Email");
		return false;}
	if ($("#Error-pass-1 label").text()!="Pass correcta"){
		alert("Verificar las passwords");
		return false;}
	if ($("#Error-pais label").text()!="País correcto"){
		alert("El país es obligatorio");
		return false;}
	if ($("#Error-sexo label").text()!="Sexo correcto"){
		alert("El sexo es obligatorio");
		return false;}
	if ($("#tbAvatar").attr("value")==""){
		alert("Debes elegir un avatar");
		return false;}
	if (resultadoCapcha!="correcto"){
		alert("Error de capcha");
		cambiarCapcha();
		return false;}
}