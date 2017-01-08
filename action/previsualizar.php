<?php
	if(isset($_SESSION['login'])&&($_SESSION['login']==1)) {
		$usuario_activo = $_SESSION['user'];
		$userActive = $usuario_activo->get_id_user();
	}
	else {
		$userActive = '';
	}
	//require_once ('/php/bd-functions.php');
	//$idPost_get = $_GET['topic'];
	//$topic_post = RetornarPost($idPost_get);
	//$user_post = RetornarUserByIduser($topic_post["Id_user"]);
	
	$BB_Code = $_POST["bbcode_field"];
	require_once ('/entidades/StringFunctions.php');
	$html_convertido = new StringFunctions();
	echo nl2br($BB_Code);
	echo nl2br($html_convertido->bbcode2html2($BB_Code));
?>
<div class="div-topic">
	<div class="div-topic-col-izq">
		<div id="Div-Usuario">
        	<div id="div-oculta-idUser"><?php //echo $userActive; ?></div>
            <div id="Div-Arriba">
                <span id="Span-Nick" class="LinkBlack"><a><?php //echo $user_post["Nick"]; ?></a></span>
            </div>
            <div id="Div-Medio">
                <div id="Div-Medio-izq">
                    <a id="link-imagen" href="#"><img src=<?php //echo $user_post["Avatar"]; ?> /></img></a>
                    <div id="Div-Level">Level 12 Commander</div>
                    <div id="Div-Experiencia">
                        <div id="Div-Barra"></div>
                        <span id="span-Experiencia">0/500</span>
                    </div>
                </div>
                <div id="Div-Medio-der" class="LinkBlack">
                    <a>></a>
                    <div id="divExtencion" >
                        <div id="divMsjPersonal">Sin mensaje personal</div>
                        <div id="divGrandePuntos">
                            <div class="divIconos">
                                <span id="iconMoney" class="icon"></span>
                                <span id="iconEye" class="icon"></span>
                                <span id="iconPost" class="icon"></span>
                                <span id="iconTilde" class="icon"></span>
                                <span id="iconPrecedencia" class="icon"></span>
                                <span id="iconAntiguedad" class="icon"></span>
                            </div>
                            <div class="divIconos">
                                <span id="ptsMoney" class="clasePts">2351</span>
                                <span id="ptsEye" class="clasePts">321</span>
                                <span id="ptsPost" class="clasePts">35</span>
                                <span id="ptsTilde" class="clasePts">150</span>
                                <span id="ptsPrecedencia" class="clasePts">721</span>
                                <span id="ptsAntiguedad" class="clasePts">1 Año</span>
                            </div>
                            <div class="divIconos fRight">
                                <span id="iconFlag" class="Bandera iconRight"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    </div>
    <div class="div-topic-col-der">
    	<div class="div-topic-post">
        	<div class="spanIdpost"><?php //echo $topic_post["Id_post"]; ?></div>
        	<div class="div-topic-titulo">
            	<?php //echo $topic_post["Titulo"]; ?>
        	</div>
        	<div class="div-topic-datos letraPuntos">
        		<?php
					//require_once ('/php/fechas.php');
					//echo FechaRelativa($topic_post["Fecha"]);
					//echo ' - '.$topic_post["Categoria_name"];
				?>
        	</div>
        	<div class="div-topip-body">
        	<?php
				//echo nl2br($BB_Code);
				echo nl2br($html_convertido->bbcode2html2($BB_Code));
			?>
        	</div>
        	<div class="div-topic-pie">
                <span class="span-topic-datos">
                    <span class="icon-post"></span><span class="letraPuntos span-dato-puntos"><?php //echo $topic_post["Puntos"]; ?></span>
                </span>
                <span class="span-topic-datos">
                    <span class="icon-post" id="iconVisit"></span><span class="letraPuntos span-dato-puntos"><?php //echo $topic_post["Visitas"]; ?></span>
                </span>
                <span class="span-topic-datos">
                    <span class="icon-post" id="iconFavorito"></span><span class="letraPuntos span-dato-puntos"><?php //echo $topic_post["Favoritos"]; ?></span>
                </span>
                <span class="span-topic-datos">
                    <span class="icon-post" id="iconComent"></span><span id="SpanComent" class="letraPuntos span-dato-puntos"><?php //echo $topic_post["Comentarios"]; ?></span>
                </span>
        	</div>
      	</div>
        <div class="div-TotalComentarios">
        	<?php
			//	echo "Comentarios cerrados";
			//if($topic_post["Comentarios"]==0)
			//{
			//	echo "<div class='Div-NoRegistro' id='BoxSinComent'>Este Post no tiene Comentarios</div>";
			//}
			//else{
			//	include ("php/PrimerosComentarios.php");
			//}
			//
			?>
        </div>
        <div id="UltimoComentario"></div>
        <?php
			//if(isset($_SESSION['login'])&&($_SESSION['login']==1))
			//{
			//	include ("php/comentar.php");
			//}
			//else{
			//	include ("php/no_registrado.php");
			//}
		?>
    </div>
</div>