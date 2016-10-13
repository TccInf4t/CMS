<?php
	require_once('crud/logo.php');

	$sql="select * from imagem where classname='TLogo'";
	$select=mysql_query($sql);

	if(mysql_num_rows($select) == 0){

		$logo=null;

	}else{

		$logo=mysql_fetch_array($select);

		$logo2=$logo['caminho'];

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Adm - Home</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="style/stylePadrao.css">
	<link rel="stylesheet" type="text/css" href="style/styleConteudo.css">

	<script type="text/javascript" src="js/jquery.js"></script> 
	<script type="text/javascript" src="js/modal.js"></script>
	<script type="text/javascript" src="js/preview.js"></script>
	<script type="text/javascript" src="js/helper.js"></script>

	<link rel="icon" href="img/favicon.png" type="image/gif"> 
</head>
<body>
<!-- div para cobrir o corpo 100% efeito modal java script -->  
	<div id="mascara">
	</div>
	<div id="faixa">
	</div>
	<div id="corpo">
		<header>
			<?php require_once('standard/header.php'); ?>
		</header>
		<div id="conteudo">
			<?php require_once('standard/menu.php'); ?>
			<div class="caixaCadastro">
				<h4>Logo do Site</h4>
					<form action="#" name="" method="post" enctype="multipart/form-data">
						<label>Imagem:</label>
							<input type="file" name="imgLogo" onchange="previsualizacao()" required>
						<input type="submit" name="btnSalvar" class="buttom" id="salvar" value="Salvar" >
					</form>
					<h6 id="tituloImg">Pré-Visualização</h6>

					<img src="<?php echo($logo2) ?>" alt=" " id="previewLogo">
			</div>	
		</div>
		<footer>
			<h2>OnPeças ©</h2>
			<h3>Desenvolvido por Code Solution  2016</h3>
		</footer>
	</div>
</body>
</html>