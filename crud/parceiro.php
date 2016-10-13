<?php 
	require_once('bd/conexao.php');
	Conectar();
	
	/*Funções*/
	require_once('function/uploadArquivo.php');
	require_once('function/buscarImagem.php');

	

	$parceiro=null;
	$site=null;
	$logo=null;

	if(isset($_GET['excluir'])){
			
			$codigo=$_GET['excluir'];
			$sql="delete from conteudosite where oid_conteudosite ='".$codigo."';";

			mysql_query($sql);
			header("Location: parceiro.php");

	}
	
	if(isset($_POST['btnSalvar'])){

		$parceiro=$_POST['txtParceiro'];
		$site=$_POST['txtSite'];
		$logo=upload_arquivos($_FILES['imgLogo']);
		
		if(isset($_GET['editar'])){

			$codigo=$_GET['editar'];
			
			$sqlLogo="update imagem set caminho='".$logo."' where oid_imagem ='".buscarImagem()."';";
			mysql_query($sqlLogo);

			$sqlParceiro="update conteudosite set titulo='".$parceiro."', site='".$site."', oid_imagem='".buscarImagem()."' where oid_conteudosite='$codigo';";
		
			mysql_query($sqlParceiro);
			header("Location: parceiro.php");

		}else{

			$sqlLogo="insert into imagem (classname, caminho) values('TParceiro', '".$logo."');";
			mysql_query($sqlLogo);

			$sqlParceiro="insert into conteudosite (titulo, classname, site, oid_imagem) values ('".$parceiro."', 'TParceiro', '".$site."', '".buscarImagem()."');";
		
			mysql_query($sqlParceiro);
			header("Location: parceiro.php");
		}
	}
?>