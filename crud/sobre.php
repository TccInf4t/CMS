<?php 
	require_once('bd/conexao.php');
	Conectar();

	if(isset($_POST['btnSalvar'])){

		$descricao=$_POST['txtDescricao'];;
		$missao=$_POST['txtMissao'];;
		$visao=$_POST['txtVisao'];;
		$valores=$_POST['txtValores'];;
		
		if(isset($_GET['editar'])){

			$codigo=$_GET['editar'];
			$sql="update conteudosite set descricao='".$descricao."', missao='".$missao."', visao='".$visao."', valores='".$valores."' where oid_conteudosite ='".$codigo."';";

			mysql_query($sql);
			header("Location: sobre.php");

		}else{

		$sql="insert into conteudosite (descricao, classname, missao, visao, valores) values ('".$descricao."', 'tSobre', '".$missao."', '".$visao."', '".$valores."');";

		mysql_query($sql);
		header("Location: sobre.php");
		
		}
	}

 ?>