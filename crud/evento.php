<?php 
	require_once('bd/conexao.php');
	Conectar();

	if(isset($_GET['excluir'])){
			
			$codigo=$_GET['excluir'];
			$sql="delete from conteudosite where oid_conteudosite ='".$codigo."';";
				
			mysql_query($sql);
			header("Location: evento.php");	
	}
	
	if(isset($_POST['btnSalvar'])){

		$titulo=$_POST['txtTitulo'];
		$descricao=$_POST['txtDescricao'];
		$data=$_POST['dtData'];;
		$horario=$_POST['hrHora'];;
		
		if(isset($_GET['editar'])){

			$codigo=$_GET['editar'];
			$sql="update conteudosite set descricao='".$descricao."', titulo='".$titulo."', dt='".$data."', hr='".$horario."' where oid_conteudosite ='".$codigo."';";

			mysql_query($sql);
			header("Location: evento.php");

		}else{

			$sql="insert into conteudosite (descricao, classname, titulo, dt, hr) values ('".$descricao."', 'TEvento', '".$titulo."', '".$data."', '".$horario."');";

			mysql_query($sql);
			header("Location: evento.php");
		
		}
	}
 ?>