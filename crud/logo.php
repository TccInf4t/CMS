<?php

	require_once('bd/conexao.php');
	Conectar();

	if(isset($_POST['btnSalvar'])){

		$uploaddir="imagens/";
		$nome_arq=basename($_FILES['imgLogo']['name']);
		$uploadfile = $uploaddir . $nome_arq;


		$sql="select * from imagem where classname='TLogo'";
		$select=mysql_query($sql);

	if(mysql_num_rows($select) == 0){

		
			if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.png')  || strstr($nome_arq,'.jpeg')) {
				if(move_uploaded_file($_FILES['imgLogo']["tmp_name"],$uploadfile)) {

					
					$sql="insert into imagem(caminho,classname) values('".$uploadfile."','Tlogo')";

		    
					mysql_query($sql);
				}
				
			}else{
					echo('<script>
					alert("extensão inválida");
					location.href = logo.php;
					</script>');

				}

		

	}else{

		if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.png')  || strstr($nome_arq,'.jpeg')) {
				if(move_uploaded_file($_FILES['imgLogo']["tmp_name"],$uploadfile)) {

					
					$sql="update imagem set caminho='".$uploadfile."' where classname='TLogo'";

		    
					mysql_query($sql);
				}
				
			}else{
					echo('<script>
					alert("extensão inválida");
					location.href = logo.php;
					</script>');

				}

		

	}
}

?>