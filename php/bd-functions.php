<?php
function conectar() {
	$db_host = 'localhost'; //host donde se encuentra la base de datos
	$db_user = 'felix'; //Usuario de la base de datos
	$db_password = 'master2008'; //Contraseña de la base de datos
	$db_database = 'chamherzbd'; //Nombre de base de datos
	return new mysqli($db_host, $db_user, $db_password, $db_database);
}
function existeUsuario($usuario) {
	$db = conectar();
	$resultado = $db->query("SELECT Nick FROM tbpassword WHERE Nick = '$usuario' LIMIT 1");
	$numero = $resultado->num_rows;
	$db->close();
	if ($numero > 0) {
	// el usuario existe
		return true;} 
	else {
 		return false;}
}
function existeEmail($email) {
	$db = conectar();
	$resultado = $db->query("SELECT Nick FROM tbpassword WHERE Email = '$email' LIMIT 1");
	$numero = $resultado->num_rows;
	$db->close();
	if ($numero > 0) {
	// el usuario existe
		return true;} 
	else {
 		return false;}
}
function DarAltaUsuario($usuario,$pais,$sexo,$avatar,$pass,$email) {
	$db = conectar();
	$resultado = $db->query("CALL proc_user_alta('$usuario','$pais.','$sexo','$avatar','$pass','$email')");
	$db->close();	
	return true;
}
function LoginUser($usuario,$pass) {
	$db = conectar();
	$resultado = $db->query("CALL proc_user_login('$usuario','$pass')");
	$numero = $resultado->num_rows;
	$db->close();
	if ($numero > 0) {
	// el usuario logeo
		return true;} 
	else {
 		return false;}
}
function RetornarPost($idPost) {
	$db = conectar();
	$res = $db->query("CALL proc_post_get('$idPost')");
	$row = $res -> fetch_array();
	$db->close();
	return $row;
}
//Devolver comentarios de a 10
//function RetornarComent($idPost,$InicioComent) {
//	$db = conectar();
//	$res = $db->query("CALL proc_coment_get('$idPost','$InicioComent')");
//	$db->close();
//	return $res;
//}
function RetornarComent($idPost) {
	$db = conectar();
	$res = $db->query("CALL proc_coment_get('$idPost')");
	$db->close();
	return $res;
}
function RetornarComentReply($idComent,$InicioReply,$CantReply) {
	$db = conectar();
	$res = $db->query("CALL proc_coment_reply('$idComent','$InicioReply','$CantReply')");
	$db->close();
	return $res;
}
function RetornarUser($nick) {
	$db = conectar();
	$res = $db->query("CALL proc_user_get('$nick')");
	$row = $res -> fetch_array(MYSQL_ASSOC);
	$db->close();
	return $row;
}
function RetornarUserByIduser($iduser) {
	$db = conectar();
	$res = $db->query("CALL proc_user_get_by_iduser('$iduser')");
	$row = $res -> fetch_array(MYSQL_ASSOC);
	$db->close();
	return $row;
}
function RetornarListaPost() {
	$db = conectar();
	$res = $db->query("CALL proc_post_getlist()");
	$db->close();
	return $res;
}
function RealizarComentario($idpost,$iduser,$comentario) {
	$db = conectar();
	$resultado = $db->query("CALL proc_coment_alta('$idpost','$iduser','$comentario')");
//	$resultado = $db->query("CALL proc_coment_alta('1','1','Comentario forzozo')");
	$db->close();	
	return true;
}
function ReplyComentario($idcoment,$iduser,$comentario) {
	$db = conectar();
	$resultado = $db->query("CALL proc_reply_coment_alta('$idcoment','$iduser','$comentario')");
	$db->close();	
	return true;
}
function PostAlta($Para_Iduser,$Para_Titulo,$Para_Idcategoria,$Para_Body,$Para_Tags) {
	$db = conectar();
	$resultado = $db->query("CALL proc_post_alta('$Para_Iduser','$Para_Titulo','$Para_Idcategoria','$Para_Body','$Para_Tags')");
	$db->close();	
	return true;
}
function RetornarPerfilListaPost($IdUser,$Start,$Interval) {
	$db = conectar();
	$res = $db->query("CALL proc_perfil_listpost('$IdUser','$Start','$Interval')");
	$db->close();
	return $res;
}
function RetornarPerfilCountPost($IdUser) {
	$db = conectar();
	$res = $db->query("CALL proc_perfil_count_post ('$IdUser')");
	$row = $res -> fetch_array(MYSQL_ASSOC);
	$db->close();
	return $row;
}
?>