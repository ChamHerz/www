$(document).ready(function(){
//	alert("Funciono");
//	IniciarConsulta();
//	$("#BtnSig").click(BotonClick);
	$("#Span-Contenido").on("click","a",BotonClick);
})

function objetoAjax(){
	var xmlhttp=false;
    try{
   		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  	}
	catch(e){
   		try {
    		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
   		}
		catch(E){
    		xmlhttp = false;
   		}
  	}
  	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
  		xmlhttp = new XMLHttpRequest();
  	}
  	return xmlhttp;
}

function BotonClick(){
	var nropagina = $(this).attr('name');
	var IdUser = $("#Iduser").text();
	//donde se mostrará los registros
	divContenido = document.getElementById('Span-Contenido');
	//var divContenido = $("#Span-Contenido");
	//divContenido.text("Cambiar");
	
	ajax=objetoAjax();
 	//uso del medoto GET
 	//indicamos el archivo que realizará el proceso de paginar
 	//junto con un valor que representa el nro de pagina
 	ajax.open("GET", "php/perfilpost.php?pag="+nropagina+"&iduser="+IdUser);
 	//divContenido.innerHTML= '<b>nada</b>';
 	ajax.onreadystatechange=function() {
  		if (ajax.readyState==4) {
   			//mostrar resultados en esta capa
			//alert("entro");
			divContenido.innerHTML = ajax.responseText
   			//divContenido.innerHTML = ajax.responseText
  		}
 	}
 	//como hacemos uso del metodo GET
 	//colocamos null ya que enviamos 
 	//el valor por la url ?pag=nropagina
 	ajax.send(null);
}