<?php
session_start();
//Vaciamos la sesión
$_SESSION = array();
//Borramos cada cookie que tengamos
setcookie("usuario","",time()-3600,"/","miweb.com");
//Destruimos la sesión
session_destroy();
//Redirigimos hacia la pagina index.php
header("Location: index.php");
?>