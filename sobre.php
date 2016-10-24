<?php 
	
	require_once('crud/sobre.php');

	$botao="Salvar";
	$descricao=null;
	$missao=null;
	$visao=null;
	$valores=null;
	

	if(isset($_GET['editar'])){

		$_SESSION["codigo"]= $_GET['editar'];
		
		$sql = "select * from conteudosite where oid_conteudosite = ".$_SESSION["codigo"];
		$resultado=mysql_query($sql);
		
		$array=mysql_fetch_array($resultado);

		$descricao=$array['descricao'];
		$missao=$array['missao'];
		$visao=$array['visao'];
		$valores=$array['valores'];
	
		$botao="Editar";
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Adm - Sobre</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="style/stylePadrao.css">
	<link rel="stylesheet" type="text/css" href="style/styleConteudo.css">

	<script type="text/javascript" src="js/jquery.js"></script> 
	<script type="text/javascript" src="js/modal.js"></script>
	<script type="text/javascript" src="js/tabs.js"></script>

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
					<h4>Cadastro de Institucional</h4>
					<form name="formularioSobre" action="#" method="post">
						<label>História da OnPeças:</label>
							<textarea required="required" name="txtDescricao"><?php echo ($descricao); ?></textarea>
						<label>Missão:</label>
							<input type="text" name="txtMissao" value="<?php echo ($missao);?>">
						<label>Visão:</label>
							<input type="text" name="txtVisao" value="<?php echo ($visao);?>">
						<label>Valores:</label>
							<input type="text" name="txtValores" value="<?php echo ($valores);?>">
							<input type="submit" name="btnSalvar" class="buttom" id="salvar" value="<?php echo($botao); ?>"<?php if(!isset($_GET['editar'])){ echo("disabled"); } ?>>
					</form>
				</div>
					<?php 
						$sql="select * from conteudosite where classname='TSobre'; ";
						$select=mysql_query($sql);
						$rs=mysql_fetch_array($select); 
					 ?>
						<div class="caixaRegistros">
							<a href="sobre.php?editar=<?php echo($rs["oid_conteudosite"]);?>">
								<div class="opcao" id="iconEditar"></div>
							</a>
								<h6>História da OnPeças</h6>
								<p class="text"><?php echo ($rs['descricao']); ?></p>
								<h6>Missão</h6>
								<span class="text"><?php echo ($rs['missao']); ?></span>
								<h6>Visão </h6>
								<span class="text"><?php echo ($rs['visao']); ?></span>
								<h6>Valores </h6>
								<span class="text"><?php echo ($rs['valores']); ?></span>	
						</div>
		</div>
		<footer>
			<h2>OnPeças ©</h2>
			<h3>Desenvolvido por Code Solution  2016</h3>
		</footer>
	</div>
</body>
</html>