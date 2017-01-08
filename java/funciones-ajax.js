// Libreria Ajax
function FuncionComentar(Post,User,Coment){
	var Resultado;
	var variable = new Object();
	variable['tag'] = "altaComent";
	variable['post_comentario'] = Coment;
	variable['idpost'] = Post;
	variable['iduser'] = User;
	$.ajax({
		//beforeSend: function(){
		//mostrarError("#Error-nick","Verificando","#FFDE95","url(imagenes/registro-cargar.gif)");},
		type: "POST",
		data: variable,
		url: 'php/fncomentar.php',
		success: function(data){
			var res = jQuery.parseJSON(data);
			//no hacer nada
			}
	});
}

function FuncionReplyComentar(Id_coment,User,Coment){
	var variable = new Object();
	variable['tag'] = "replyComent";
	variable['post_comentario'] = Coment;
	variable['idcoment'] = Id_coment;
	variable['iduser'] = User;
	$.ajax({
		type: "POST",
		data: variable,
		url: 'php/fncomentar.php',
		success: function(data){
			var res = jQuery.parseJSON(data);
			//no hacer nada
			}
	});
}