<?php
	if(isset($_GET['pag'])){
  		$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
  		$PagAct=$_GET['pag'];
  		//caso contrario los iniciamos
	}else{
		$RegistrosAEmpezar=0;
  		$PagAct=1;
		echo "Excelente";
	}
?>