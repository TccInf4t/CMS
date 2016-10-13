<?php
	require_once('crud/home.php');

	if(isset($_GET['editar'])){

		$sql="select * from imagem where oid_imagem=".$_GET['editar'];
		$select=mysql_query($sql);

		$imagem=mysql_fetch_array($select);

		$titulo=$imagem['nome'];

		$buttonName="btnEditar";

		$caminho=$imagem['caminho'];


	}else{

		$caminho=null;
		$titulo=null;
		$buttonName="btnSalvar";

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
				<h4>Cadastro de Imagem - Slide</h4>
					<form action="#" name="" method="post" enctype="multipart/form-data">
						<label>Título:</label>
							<input type="text" name="txtTitulo" placeholder="Promoção Dia dos Pais" value="<?php echo($titulo); ?>" required>
						<label>Imagem:</label>
							<input type="file" name="imgSlide" onchange="previsualizacao()" <?php if(!isset($_GET['editar'])){ echo("required"); } ?>>
						<p>Obs: Recomendável inserir imagens com no minímo 1000px.</p>
						<input type="submit" name="<?php echo($buttonName); ?>" class="buttom" id="salvar" value="Salvar" >
					</form>
			</div>
			<h6 id="tituloImg">Pré-Visualização</h6>

			<img src="<?php echo($caminho); ?>" alt=" " id="preview">
				<h5>Imagens Cadastradas</h5>

				<?php

				//
				$sql="select * from visualizacaoHome";
				$select=mysql_query($sql);

				while($imagens=mysql_fetch_array($select)){

				?>
					<div class="imgCadastradas">
							<a href="<?php echo('home.php?oid='.$imagens['oid_imagem']); ?>">
								<div class="opcao" id="iconDeletar"></div>
							</a>
							<a href="<?php echo('home.php?editar='.$imagens['oid_imagem']); ?>">
								<div class="opcao" id="iconEditar"></div>
							</a>
							<h6><?php  echo($imagens['nome']); ?></h6>
							<img src="<?php echo($imagens['caminho']); ?>" alt="<?php echo($imagens['nome']); ?>" title="<?php echo($imagens['nome']); ?>">
						
					</div>
					<?php

						}

					?>
		</div>
		<footer>
			<h2>OnPeças ©</h2>
			<h3>Desenvolvido por Code Solution  2016</h3>
		</footer>
	</div>
</body>
</html>