document.write("<script type='text/javascript' src='javascript/previa.js'></script>"); //Libreria modal - Chamherz
//variables Grobales
var loadCSS = function(url, callback){
				var link = document.createElement('link');
				link.type = 'text/css';
				link.rel = 'stylesheet';
				link.href = url;
				link.id = 'theme-style';

				document.getElementsByTagName('head')[0].appendChild(link);

				var img = document.createElement('img');
				img.onerror = function(){
					if(callback) callback(link);
				}
				img.src = url;
			}

$(document).ready(function() {
	$("#btnVistaPrevia").click(FuncionVistaPrevia);
	$("#btnPostear").click(AccionPrevia);
	
	//Boton de prueba
	$("#btnTest").click(AccionBotonPrueba);
	//Boton de prueba
	
	var initEditor = function() {
		$("textarea").sceditor({
			plugins: 'bbcode',
			toolbar: "bold,italic,underline|left,center,right,justify|font,size,color,removeformat|cut,copy,paste,pastetext|code,quote|image,link,unlink|emoticon,youtube,date|print,source",
			resizeWidth :false,
			resizeMinHeight:400,
			resizeMaxHeight:650,
			style: "javascript/Editor/minified/jquery.sceditor.default.min.css"
		});
	};

	initEditor();
	
});

//Accion de Boton para Pruebas
function AccionBotonPrueba() {
	alert($("#categorias").val());	
}
//Accion de Boton para Pruebas

function FuncionVistaPrevia() {
	//var CodigoBBCode = $("textarea").text();
	//alert(CodigoBBCode);
	//var html = $("textarea").sceditor('instance').fromBBCode('[b]Bold![b]');
	//$("#divVistaPrevia").text(html);
	mostrarModal();
}

function ObtenerBody(){
	return $('textarea').sceditor('instance').val();
}

function AccionPrevia(){
	//controlar titulo:
	var Titulo = $("#tbTitulo").val();
	if(Titulo==""){
		alert("El titulo esta vacio");
		return false;	
	}
	
	//controlar tamano del post:
	var Body_post = ObtenerBody();
	if(Body_post.length < 200) {
		alert("El post debe tener mas de 200 caracteres");
		return false;
	}
	
	//controlar los Tags:
	var Tags = $("#tbTags").val();
	
	//Tag vacios
	if(Tags.length==0){
		alert("No definiste ningun Tags");
		return false;
	}
	
	//Divido los tags por ","
	var TagsDiv = Tags.split(",");
	
	//Controlar que al menos ponga 3 Tags:
	if (TagsDiv.length < 3) {
		alert("Debes definir al menos 3 Tags");
		return false;
	}
	
	//Controlar cada tag hasta encontrar un error:
	var ResultTags = "";
	var TagCorrectos = new Array();
	for(n = 0; n < TagsDiv.length; n++) {
		var ControlarTag = TagsDiv[n];
		//Quitar espacios en blanco de los extremos:
		var TagRemplazado = ControlarTag.replace(/^\s+|\s+$/g,"");
		
		//Controlar si Tag es menor a 3 letras
		if(TagRemplazado.length < 3){
			alert(TagRemplazado);
			ResultTags = "uno de los tags es menor de 3 letras";
			break;
		}
		
		//controlar tamano del tag:
		if(TagRemplazado.length > 30){
			ResultTags = "No se permiten Tag mayores de 30 caracteres";
			break;
		}
		
		//Controlar si tag tiene espacio en blanco
		if (/\s\s/.test(TagRemplazado)) { 
			ResultTags = "No se permiten dos espacios en blanco deguidos dentro de un TAG"; 
			break;
		}
		
		//El Tag es correocto: lo agrego a una matriz para controlar su coincidencia despues:
		TagCorrectos.push(TagRemplazado);
	}
	
	//Recorrer Tags en busca de coincidencia:
	var Coincide = false;
	TagSuma = "";
	for(i = 0; i < TagCorrectos.length - 1; i++) {
		TagReferencia = TagCorrectos[i];
		for(j = i + 1; j < TagCorrectos.length; j++) {
			// alert(TagCorrectos[j]);
			if (TagReferencia == TagCorrectos[j]) {
				Coincide = true;
				break;
			}
		}
		if (Coincide == true) {
			ResultTags = "No puede haber tags iguales";
			break;
		}
	}
	
	//Contralar la categoria elegida:
	var MySelect = $("#categorias");
	var Seleccionado = MySelect.val();
	
	if (Seleccionado==null || Seleccionado==-1) {
		ResultTags = "Debe seleccionar una categoria";
	}
	//alert ($MySelect.val());
	
	//mostrar error:
	if (ResultTags != "") {
		alert(ResultTags);
		return false;
	}
	//alert (Body_post);
	
	mostrarModal();
	cargar(Body_post);
}

//PARTE QUE FUNCIONA
var conexion1;
function cargar(BCodePost) 
{
  conexion1=crearXMLHttpRequest()
  conexion1.onreadystatechange = procesarEventos;
  conexion1.open('POST','php/PreviarPost.php', true);
  conexion1.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  conexion1.send(retornarDatos(BCodePost));
}

function retornarDatos(BCode)
{
  var cad='';
  cad='codigo='+encodeURIComponent(BCode)+'&comentarios='+encodeURIComponent('Chambi');
  return cad;
}

function procesarEventos()
{
  var resultados = document.getElementById("resultados");
  if(conexion1.readyState == 4)
  {
    resultados.innerHTML = conexion1.responseText;
	prettyPrint();
  } 
  else 
  {
    resultados.innerHTML = 'Cargando...';
  }
}

function crearXMLHttpRequest() 
{
  var xmlHttp=null;
  if (window.ActiveXObject) 
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  else 
    if (window.XMLHttpRequest) 
      xmlHttp = new XMLHttpRequest();
  return xmlHttp;
}

function FuncPublicar(){
	//alert($("#AvatarChiuito").att('name'));
	var IdUser_post = $("#AvatarChiuito").attr('name');
	var Titulo_post = $("#tbTitulo").val();
	var Categoria_post = $("#categorias").val();
	var Body_post = ObtenerBody();
	var Tags_post = $("#tbTags").val();
	Publicar(IdUser_post,Titulo_post,Categoria_post,Body_post,Tags_post);
}

var conexion2;
function Publicar(BIdUser,BTituloPost,BCategoriaPost,BCodePost,TagsPost)
{
  conexion2=crearXMLHttpRequest()
  conexion2.onreadystatechange = procesarPublicacion;
  conexion2.open('POST','action/publicar.php', true);
  conexion2.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  conexion2.send(retornarDatosPost(BIdUser,BTituloPost,BCategoriaPost,BCodePost,TagsPost));
}

function retornarDatosPost(BIdUser,BTil,BCat,BCode,BTags)
{
  var cad='';
  cad='iduser='+encodeURIComponent(BIdUser)+
      '&titulo='+encodeURIComponent(BTil)+
	  '&categoria='+encodeURIComponent(BCat)+
  	  '&codigo='+encodeURIComponent(BCode)+
  	  '&tags='+encodeURIComponent(BTags);
  return cad;
}


function procesarPublicacion()
{
  if(conexion2.readyState == 4)
  {
	  alert(conexion2.responseText);
    //resultados.innerHTML = conexion1.responseText;
	//location.href = "action/publicar.php";	
	//prettyPrint();
  } 
  else 
  {
    resultados.innerHTML = 'Cargando...';
  }
}
//Fin Ajax Previa