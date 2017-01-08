<?php
	if(isset($_SESSION['login'])&&($_SESSION['login']==1)) {
		$usuario_activo = $_SESSION['user'];
		$userActive = $usuario_activo->get_id_user();
	}
	else {
		$userActive = '';
	}
	require_once (__DIR__.'/../php/bd-functions.php');
	$topic_post = RetornarPost($_GET['topic']);
	
	require_once (__DIR__.'/../entidades/post.php');
	$post = new Post($topic_post["Id_post"],$topic_post["Id_user"],$topic_post["Titulo"],$topic_post["Fecha"],$topic_post["Categoria_name"],$topic_post["Body_post"],$topic_post["Puntos"],$topic_post["Visitas"],$topic_post["Favoritos"],$topic_post["Comentarios"]);
	
	require_once (__DIR__.'/../entidades/user.php');
	$userQuery = RetornarUserByIduser($post->get_Id_user());
	$user = new User($userQuery["Id_user"],$userQuery["Nick"],$userQuery["Avatar"],$userQuery["Faction"],$userQuery["Nro_Rango"],$userQuery["Rango_name"],$userQuery["Points_Next_Level"],$userQuery["Xp"],$userQuery["Gold"],$userQuery["Post"],$userQuery["View"],$userQuery["Coment"],$userQuery["Precedence"],$userQuery["Old"],$userQuery["Avg"]);
	
	require_once (__DIR__.'/../entidades/StringFunctions.php');
	$html_convertido = new StringFunctions();
	
	require_once (__DIR__.'/../entidades/range.php');
	$Range = new Range($user->get_Range(),$user->get_NroRango(),$user->get_Points_Next_Level(),$user->get_Xp());
?>
<div class="div-topic">
	<div class="div-topic-col-izq">
		<div id="Div-Usuario">
        	<div id="div-oculta-idUser"><?php echo $userActive; ?></div>
            <div id="Div-Arriba">
                <span id="Span-Nick" class="LinkBlack"><a href="<?php echo $user->irUser() ?>"><?php echo $user->get_Nick(); ?></a></span>
            </div>
            <div id="Div-Medio">
                <div id="Div-Medio-izq">
                    <a id="link-imagen" href="#"><img src=<?php echo $user->get_Avatar(); ?> /></img></a>
                    <div id="Div-Level">Level <?php echo $user->get_Nro_Range(); ?></div>
                    <div id="Div-Experiencia">
                        <div id="Div-Barra" style="width:<?php echo $Range->barra_chiquita(); ?>px;"></div>
                        <span id="span-Experiencia"><?php echo $Range->xp_actual().'/'.$Range->xp_next_level(); ?></span>
                    </div>
                </div>
                <div id="Div-Medio-der" class="LinkBlack">
                    <a>></a>
                    <div id="divExtencion" >
                        <div class="divMsjPersonal">Sin mensaje personal</div>
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
        	<div class="spanIdpost"><?php echo $post->get_Id_post(); ?></div>
        	<div class="div-topic-titulo">
            	<?php echo $post->get_Titulo(); ?>
        	</div>
        	<div class="div-topic-datos letraPuntos">
        		<?php
					require_once ('/php/fechas.php');
					echo FechaRelativa($post->get_Fecha());
					echo ' - '.$post->get_Categoria_name();
				?>
        	</div>
        	<div class="div-topip-body">
        	<?php
				echo nl2br($html_convertido->bbcode2html2($post->get_Body_post()));
			?>
        	</div>
        	<div class="div-topic-pie">
                <span class="span-topic-datos">
                    <span class="icon-post"></span><span class="letraPuntos span-dato-puntos"><?php echo $post->get_Puntos(); ?></span>
                </span>
                <span class="span-topic-datos">
                    <span class="icon-post" id="iconVisit"></span><span class="letraPuntos span-dato-puntos"><?php echo $post->get_Visitas(); ?></span>
                </span>
                <span class="span-topic-datos">
                    <span class="icon-post" id="iconFavorito"></span><span class="letraPuntos span-dato-puntos"><?php echo $post->get_Favoritos(); ?></span>
                </span>
                <span class="span-topic-datos">
                    <span class="icon-post" id="iconComent"></span><span id="SpanComent" class="letraPuntos span-dato-puntos"><?php echo $post->get_Comentarios(); ?></span>
                </span>
        	</div>
      	</div>
        <div class="div-TotalComentarios">
        	<?php
			if($post->get_Comentarios()==0)
			{
				echo "<div class='Div-NoRegistro' id='BoxSinComent'>Este Post no tiene Comentarios</div>";
			}
			else{
				include ("php/PrimerosComentarios.php");
			}
			?>
        </div>
        <div id="UltimoComentario"></div>
        <?php
			if(isset($_SESSION['login'])&&($_SESSION['login']==1))
			{
				include ("php/comentar.php");
			}
			else{
				include ("php/no_registrado.php");
			}
		?>
    </div>
</div>