<?php 
	require_once('bd/conexao.php');
	Conectar();
	
	/*Funções*/
	require_once('function/buscarImagem.php');

	//Isset to link para excluir o registro
	if(isset($_GET['excluir'])){
		$codigo=$_GET['excluir'];
		$sql="delete from conteudosite where oid_conteudosite ='".$codigo."';";
		mysql_query($sql);
		header("Location: parceiro.php");

	}

	if(isset($_POST['btnSalvar'])){
		$parceiro=$_POST['txtParceiro'];
		$site=$_POST['txtSite'];

		if(isset($_GET['editar'])){

			$codigo=$_GET['editar'];
			
			$uploaddir="imgcrud/";
			$nome_arq=basename($_FILES['imgLogo']['name']);
			$uploadfile = $uploaddir . $nome_arq;

			/*SE O USÁRIO EDITAR APENAS O SITE E NOME DO PARCEIRO*/
			if($nome_arq == null){
				$sql="update conteudosite set titulo='".$parceiro."',site='".$site."' where oid_conteudosite=".$codigo;

				mysql_query($sql);
				header("location:parceiro.php");

			}else{

				if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.png') || strstr($nome_arq,'.gif') || strstr($nome_arq,'.jpeg')) {
					
					if(move_uploaded_file($_FILES['imgLogo']["tmp_name"],$uploadfile)) {

					$sqlLogo="update imagem set caminho='".$uploadfile."' where oid_imagem =".BuscarImagem().";";
					mysql_query($sqlLogo);
					
					$sqlParceiro="update conteudosite set titulo='".$parceiro."', site='".$site."' where oid_conteudosite=".$codigo.";";
			
					mysql_query($sqlParceiro);
					header("Location: parceiro.php");

				}else{
					echo('<script>
					alert("ERRO AO CADASTRAR IMAGEM");
					location.href = parceiro.php;
					</script>');
				}

			}else{
				echo('<script>
					alert("EXTENSÃO INVÁLIDA");
					location.href = parceiro.php;
					</script>');
			}

		}
	}

		$uploaddir="imgcrud/";
		$nome_arq=basename($_FILES['imgLogo']['name']);
		$uploadfile = $uploaddir . $nome_arq;

		if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.png') || strstr($nome_arq,'.gif') || strstr($nome_arq,'.jpeg')) {
				
			if(move_uploaded_file($_FILES['imgLogo']["tmp_name"],$uploadfile)) {
		
				$sqlLogo="insert into imagem (classname, caminho) values('TParceiro', '".$uploadfile."');";
					mysql_query($sqlLogo);

					$sqlParceiro="insert into conteudosite (titulo, classname, site, oid_imagem) values ('".$parceiro."', 'TParceiro', '".$site."', '".buscarImagem()."');";
				
					mysql_query($sqlParceiro);
					header("Location: parceiro.php");
			}else{
				echo('<script>
					alert("ERRO AO CADASTRAR IMAGEM");
					</script>');
			}
		}else{
			echo('<script>
					alert("EXTENSÃO INVÁLIDA");
					</script>');
		}

	}
?>