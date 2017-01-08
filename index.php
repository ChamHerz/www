<?php
require_once ('entidades/usuario.php');
session_start();
define('RAIZ_APLICACION', __DIR__);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="java/jquery-1.9.1.js"></script>
<?php if(isset($_GET['action'])){
	      echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"estilo/".$_GET['action'].".css\">";
		  if($_GET['action']=="post"){
		      include ("head/posthead.php");
		  }
	   };
?>
<link rel="stylesheet" type="text/css" href="estilo.css">
<script type="text/javascript" src="java/siempre.js"></script>

<?php if(isset($_GET['action'])){echo "<script type=\"text/javascript\" src=\"java/".$_GET['action'].".js\"></script>";}; ?>
<?php if(isset($_GET['topic'])){echo "<script type=\"text/javascript\" src=\"javascript/topic.js\"></script>";}; ?>
<title>ChamHerz</title>
</head>
<body class="cambiarFondo">
	<div id="divTop" class="colorCambia">
    	<div id="divTopCentral">
        	<?php if(isset($_SESSION['login'])&&($_SESSION['login']==1)){include ("php/barraUsuario.php");}else{include ("php/barraDefault.php");}?>
        </div>
    </div>
	<div id="Cabezera">Cabezera</div>
    <div id="SubMenu">
    	<div id="SubMenu-Central">
        	<div id="DivBuscador">
                <form id="form_bucador" name="form_buscador" accept-charset="UTF-8" method="post" action="/ChamHerz/index.php?action=buscar">
                    <input id="tbBuscador" name="tbBuscador" type="text" value="" placeholder="Busca..." />
                    <input id="btnBuscar" class="botonBuscar" type="submit" value="">
                </form>
        	</div>
            <div id="BotonesPrincipales">
                <ul>
                	<li><a href="index.php?action=post"><span class="BotonPrincipal">Post</span></a></li>
                    <li><span class="BotonPrincipal"></span></li>
                </ul>
            </div>
        </div>
	</div>
    <div class="NaveCentral colorCambia">
        <div id="Menu">
            <ul>
                <li><a name="home" class="" href="index.php">Home</a></li>
                <li><a name="menuJava" class="" href="index.php?action=menuJava">Java</a></li>
                <li><a name="menuAndroid" class="" href="index.php?action=menuAndroid">Android</a></li>
                <li><a name="menuHtml" class="" href="index.php?action=menuHtml">Html</a></li>
                <li><a name="menuCss" class="" href="index.php?action=menuCss">Css</a></li>
                <li><a name="menuJavaScript" class="" href="index.php?action=menuJavaScript">JavaScript</a></li>
                <li><a name="menuPHP" class="" href="index.php?action=menuPHP">Php</a></li>
                <li><a name="menuMySQL" class="" href="index.php?action=menuMySQL">MySQL</a></li>
                <li><a name="menuC++" class="" href="index.php?action=menuC++">C++</a></li>
                <li><a name="menuC#" class="" href="index.php?action=menuC#">C#</a></li>
                <li><a name="menuASP" class="" href="index.php?action=menuASP">ASP</a></li>
                <li><a name="menuSQLServer" class="" href="index.php?action=menuSQLServer">SQL Server</a></li>
            </ul>
        </div>
        <div id="NavDerecha">

        </div>
    </div>
    <div id="Global">
        <div id="Contenido">
        	<?php
				if ($_GET==[]) {
					include ("php/home.php");
				}
				if(isset($_GET['action'])){
					include ("action/".$_GET['action'].".php");
				}
				if(isset($_GET['topic'])){
					include ("topic/topic.php");
				}
			?>
        </div>
        <div class="NaveCentral colorCambia ModificaPie">
        	<div class="Pie-Renglon-Sup">
            	Superior
            </div>
            <div class="Pie-Renglon-Inf LetraBlanca">
            	 ©2014-2015 ShadersGames - Todos los derechos reservados
            </div>
        </div>
    </div>
</body>
</html>
