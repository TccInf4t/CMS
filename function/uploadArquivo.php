<!--FUNÇÃO PARA UPLOAD DE IMAGENS-->
<?php

	function upload_arquivos($obj){
		
		$uploaddir="imgcrud/";
		$nome_arq=basename($obj["name"]);
		$uploadfile = $uploaddir . $nome_arq;
		
		if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.png')  || strstr($nome_arq,'.pdf')|| strstr($nome_arq,'.jpeg')) {
			
			if(move_uploaded_file($obj["tmp_name"],$uploadfile)) {

				return $uploadfile;
				mysql_query($sql);
			}
		}else{
			echo('<script>
					alert("extensão inválida");
					</script>');

		}
	}
?>