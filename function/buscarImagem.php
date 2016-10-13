<?php 
		
	function BuscarImagem(){
		
		$sql="select oid_imagem from imagem order by oid_imagem desc limit 1;";
		$resultado=mysql_query($sql);
		$codImagem=mysql_fetch_array($resultado);
		
		return $codImagem['oid_imagem'];
	}

?>