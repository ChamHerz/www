<?php
	require_once ('bd-functions.php');
	require_once ('/../entidades/topic.php');
	//include ("/entidades/topic.php");
	
	$RegistrosAMostrar=10;
	
	if(isset($_GET['pag'])){
  		$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
  		$PagAct=$_GET['pag'];
  		//caso contrario los iniciamos
		//echo "Entro aqui";
 	}else{
  		$RegistrosAEmpezar=0;
  		$PagAct=1;
		//echo "Paso";
 	}
	
	//Fechas
	require_once ('fechas.php');
	
	if(isset($_GET["iduser"])){
		$Id_user = $_GET["iduser"];
	}else{
		$Id_user = $user->get_Id_user();
	}
	
	$Resultado = RetornarPerfilListaPost($Id_user,$RegistrosAEmpezar,$RegistrosAMostrar);
	//Configuracion de la conexion a base de datos
	
	echo "<span id='TablaPost'>"; 
	echo "<table>";
	while($MostrarFila = $Resultado->fetch_array(MYSQLI_ASSOC)){
  		echo "<tr>";
		/*<a href=<?php echo ObtenerUrlTopic($item_post["Id_post"],$item_post["Categoria_name"]); ?>><?php echo $item_post["Titulo"]; ?></a>*/
  		echo "<td class='CeldaTitulo'><a href='".ObtenerUrlTopic($MostrarFila["Id_post"],$MostrarFila["Categoria_name"])."' >".$MostrarFila['Titulo']."</a></td>";
		echo "<td class='CeldaFecha'>".FechaRelativa($MostrarFila['Fecha'])."</td>";
  		echo "</tr>";
 	}
	echo "</table>";
	echo "</span>";
	
	//******--------determinar las páginas---------******//
	$ContadorRegistros = RetornarPerfilCountPost($Id_user);
 	$NroRegistros= $ContadorRegistros["Id_post"];
 	$PagAnt=$PagAct-1;
 	$PagSig=$PagAct+1;
 	$PagUlt=$NroRegistros/$RegistrosAMostrar;
	
	//verificamos residuo para ver si llevará decimales
 	$Res=$NroRegistros%$RegistrosAMostrar;
 	// si hay residuo usamos funcion floor para que me
 	// devuelva la parte entera, SIN REDONDEAR, y le sumamos
 	// una unidad para obtener la ultima pagina
 	if($Res>0) $PagUlt=floor($PagUlt)+1;
	
	//desplazamiento
 	echo "<span id='PerfilNavegador'>";
	echo "<a name='1'>Primero</a> ";
 	if($PagAct>1) echo "<a name='$PagAnt'>Anterior</a> ";
 	echo "<strong>Pagina ".$PagAct."/".$PagUlt."</strong>";
 	if($PagAct<$PagUlt)  echo " <a id='BtnSig' name='$PagSig'>Siguiente</a> ";
 	echo "<a name='$PagUlt'>Ultimo</a>";
	echo "</span>";
?>