<?php
	require_once ('/entidades/topic.php');

	require_once ('/php/bd-functions.php');
	$userQuery = RetornarUser($_GET["user"]);
	
	require ('/entidades/user.php');
	$user = new User($userQuery["Id_user"],$userQuery["Nick"],$userQuery["Avatar"],$userQuery["Faction"],$userQuery["Lema"],$userQuery["Nro_Rango"],$userQuery["Rango_name"],$userQuery["Points_Next_Level"],$userQuery["Xp"],$userQuery["Gold"],$userQuery["Post"],$userQuery["View"],$userQuery["Coment"],$userQuery["Precedence"],$userQuery["Old"],$userQuery["Avg"]);
	
	require_once ('/php/fechas.php');
	
	require_once ('/entidades/faction.php');
	$Faction = new Faction($user->get_Faction());
	
	require_once ('/entidades/range.php');
	$Range = new Range($user->get_Range(),$user->get_NroRango(),$user->get_Points_Next_Level(),$user->get_Xp());
?>
<div id="Contenido-Perfil">
	<div id="Perfil-ColIzq">
    	<div>
            <div id="Pefil-Top">
                <div id="Perfil-Top-ColIzq">
                    <a id="link-imagen" href="#"><img src=<?php echo $user->get_Avatar(); ?> /></img></a>
                </div>
                <div id="Perfil-Top-ColDer">
                    <div id="Perfil-Top-ColDer-Top">
                        <div id="PerfilNombre">
                        	<label id="Iduser"><?php echo $user->get_Id_user(); ?></label>
                            <div id="Span-Nick" class="LinkBlack"><a href="<?php echo $user->irUser(); ?>"><?php echo $user->get_Nick(); ?></a></div>
                            <div>
                                <?php echo $Faction->perfil_recuadro(); ?>
                                <span class="Span-Faction" id="PerfilLevel">Level <?php echo $Range->perfil_recuadro(); ?></span>
                            </div>
                        </div>
                    </div>
                    <div id="Div-Experiencia">
                        <div id="Div-Barra" style="width:<?php echo $Range->barra(); ?>px;"></div>
                        <span id="span-Experiencia"><?php echo $Range->xp_actual().'/'.$Range->xp_next_level(); ?></span>
                    </div>
                    <div id="Div_msj_personal" class="divMsjPersonal">
                    	<?php echo $user->get_Lema(); ?>
                    </div>
                </div>
            </div>
    	</div>
        <div class="Contenedor-AtributosPost">
            <div class="Div-Atributos">
                <section class="tabs">
                    <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
                    <label for="tab-1">Atributos</label>
                
                    <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
                    <label for="tab-2">Next Level</label>
                
                    <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
                    <label for="tab-3">Test</label>
                
                    <div class="clear-shadow"></div>
                
                    <div class="content">
                        <div class="content-1">
                            <span id="Cont1-Atributos">
                            	<span class="Cont1-Renglon">
                                	<span class="IconAtributo" id="ImgAtributo"></span>
									<span class="TextAtributo"><?php echo $Range->xp_actual();?></span>
                                </span>
                                <span class="Cont1-Renglon">
                                	<span class="IconAtributo" id="ImgOro"></span>
                                	<span class="TextAtributo"><?php echo $user->get_Gold();?></span>
                                </span>
                                <span class="Cont1-Renglon">
                                	<span class="IconAtributo" id="ImgPost"></span>
                                	<span class="TextAtributo"><?php echo $user->get_Post();?></span>
                                </span>
                                <span class="Cont1-Renglon">
                                	<span class="IconAtributo" id="ImgView"></span>
                                	<span class="TextAtributo"><?php echo $user->get_View();?></span>
                                </span>
                                <span class="Cont1-Renglon">
                                	<span class="IconAtributo" id="ImgComent"></span>
                                	<span class="TextAtributo"><?php echo $user->get_Coment();?></span>
                                </span>
                                <span class="Cont1-Renglon">
                                	<span class="IconAtributo" id="ImgPrecedencia"></span>
                                	<span class="TextAtributo"><?php echo $user->get_Precedence();?></span>
                                </span>
                                <span class="Cont1-Renglon">
                                	<span class="IconAtributo" id="ImgAntiguedad"></span>
                                	<span class="TextAtributo"><?php echo FechaRelativa($user->get_Old());?></span>
                                </span>
                                <span class="Cont1-Renglon">
                                	<span class="IconAtributo" id="ImgAvg"></span>
                                	<span class="TextAtributo"><?php echo $user->get_Avg();?></span>
                                </span>
                            </span>
                        </div>
                        <div class="content-2">
                            Contenido 2
                        </div>
                        <div class="content-3">
                            Contenido 3            
                        </div>
                    </div>
                </section>
            </div>
            <div class="Div-ListaPost">
    			<section class="tabs" id="tabs_post">
                    <input id="tab-1" type="radio" name="radio-set2" class="tab-selector-1" checked="checked" />
                    <label for="tab-1">Posts</label>
                
                    <input id="tab-2" type="radio" name="radio-set2" class="tab-selector-2" />
                    <label for="tab-2">Comments</label>
                
                    <div class="clear-shadow"></div>
                
                    <div class="content">
                        <div class="content-1">
                        	<span class="TopPostsRenglon">
                            	Total: 
                            </span>
                            <span class="Span-Contenido" id="Span-Contenido">
                            	<?php include ('/php/perfilpost.php'); ?>
                            </span>
                        </div>
                        <div class="content-2">
                            Contenido 2
                        </div>
                    </div>
                </section>
    		</div>
        </div>
	</div>
    <div id="Perfil-ColDer">
		Col Der
	</div>
</div>