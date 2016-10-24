<?php

	require_once("bd/conexao.php");
	Conectar();

	if(isset($_GET['oid'])){

		$sql="delete from imagem where oid_imagem=".$_GET['oid'];
		mysql_query($sql);

		echo('<script>
			alert("Deletado com sucesso");
			</script>');

		header("location:home.php");

	}

	if(isset($_POST['btnSalvar'])){

			$uploaddir="imagens/";
			$nome_arq=basename($_FILES['imgSlide']['name']);
			$uploadfile = $uploaddir . $nome_arq;

			if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.png')  || strstr($nome_arq,'.jpeg')) {
				if(move_uploaded_file($_FILES['imgSlide']["tmp_name"],$uploadfile)) {

					
				$sql="insert into imagem(nome,classname,caminho) values ('".$_POST['txtTitulo']."','TSlideHome','".$uploadfile."');";

					echo('<script>
					alert("inserido com sucesso");
					</script>');
		    
					mysql_query($sql);
				}
				
			}else{
					echo('<script>
					alert("extensão inválida");
					location.href = home.php;
					</script>');

				}
		}
		
		if(isset($_POST['btnEditar'])){

			$uploaddir="imagens/";
			$nome_arq=basename($_FILES['imgSlide']['name']);
			$uploadfile = $uploaddir . $nome_arq;

			if($nome_arq == null){

				$sql="update imagem set nome='".$_POST['txtTitulo']."' where oid_imagem=".$_GET['editar'];

				mysql_query($sql);

				header("location:home.php");

			}else{

				if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.png')  || strstr($nome_arq,'.jpeg')) {
				if(move_uploaded_file($_FILES['imgSlide']["tmp_name"],$uploadfile)) {

				
				$sql="update imagem set nome='".$_POST['txtTitulo']."',caminho='".$uploadfile."' where oid_imagem=".$_GET['editar'];

				mysql_query($sql);

				header("location:home.php");

				}
				
			}else{
					echo('<script>
					alert("extensão inválida");
					</script>');

				}

			}

			
			

		}
?>