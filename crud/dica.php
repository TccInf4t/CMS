<?php 
	require_once('bd/conexao.php');
	Conectar();

	$titulo=null;
	$descricao=null;

	if(isset($_GET['excluir'])){
			
			$codigo=$_GET['excluir'];
			$sql="delete from conteudosite where oid_conteudosite ='".$codigo."';";
				
			mysql_query($sql);
			header("Location: dica.php");	
	}
	
	if(isset($_POST['btnSalvar'])){

		$titulo=$_POST['txtTitulo'];
		$descricao=$_POST['txtDescricao'];
		
		if(isset($_GET['editar'])){

			$codigo=$_GET['editar'];
			$sql="update conteudosite set descricao='".$descricao."', titulo='".$titulo."', datacriacao= NOW() where oid_conteudosite ='".$codigo."';";

			mysql_query($sql);
			header("Location: dica.php");

		}else{

			$sql="insert into conteudosite (descricao, classname, titulo, datacriacao) values ('".$descricao."', 'TDica', '".$titulo."', NOW());";
			
			mysql_query($sql);
			header("Location: dica.php");
		}
	}
?>