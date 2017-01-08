<div class="div-pagina-body">
	<div class="div-pagina-post div-topic-post">
    	<?php
			require_once ('bd-functions.php');
			require_once ('fechas.php');
			require_once (__DIR__.'/../entidades/topic.php');
			$list_post = RetornarListaPost();
			while($item_post = $list_post->fetch_array(MYSQLI_ASSOC)):
		?>
    	<div class="div-list-post">
        	<div class="div-list-post-colizq">
            	Img
            </div>
            <div class="div-list-post-colder">
            	<div class="div-list-post-renglon">
                    <div class="div-list-post-titulo">
                    	<a href=<?php echo ObtenerUrlTopic($item_post["Id_post"],$item_post["Categoria_name"]); ?>><?php echo $item_post["Titulo"]; ?></a>
                    </div>
                    <div class="div-list-post-time estiloDatoslistpost">
                        <?php echo FechaRelativa($item_post["Fecha"]); ?>
                    </div>
                </div>
                <div class="div-list-post-renglon estiloDatoslistpost">
                	<?php echo "por ".$item_post["Nick"]; ?>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>
