<?php 

	require_once('crud/dica.php');

	$botao="Salvar";
	$titulo=null;
	$descricao=null;
	
	if(isset($_GET['editar'])){

		$_SESSION["codigo"]= $_GET['editar'];
		
		$sql = "select * from conteudosite where oid_conteudosite = ".$_SESSION["codigo"];
		$resultado=mysql_query($sql);
		
		$array=mysql_fetch_array($resultado);

		$titulo=$array['titulo'];
		$descricao=$array['descricao'];

		$botao="Editar";
						
	}	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Adm - Dica</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="style/stylePadrao.css">
	<link rel="stylesheet" type="text/css" href="style/styleConteudo.css">

	<script type="text/javascript" src="js/jquery.js"></script> 
	<script type="text/javascript" src="js/modal.js"></script>

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
				<h4>Cadastro de Dicas</h4>
				 	<form name="formularioDica" action="#" method="post">
						<label>Título:<span class="obrigatorio">*</span></label> 
						<input type="text" name="txtTitulo" placeholder="Ex: Nossas Dicas" required="required" value="<?php echo($titulo);?>">
						<label>Descrição:<span class="obrigatorio">*</span></label>
						<textarea name="txtDescricao" required="required"><?php echo($descricao);?></textarea> 
						<input type="submit" name="btnSalvar" class="buttom" id="salvar" value="<?php echo($botao);?>">
						
					</form>
			</div>
				<h5>Tabela de Registros - Dicas</h5>
					<?php 
						$sql="SELECT * FROM conteudosite where classname='TDica';";
						$select=mysql_query($sql);
						$cont=0;

							while ($rs=mysql_fetch_array($select)) {
								$cont++;	
					 ?>
						<div class="caixaRegistros">
							<a href="dica.php?excluir=<?php echo($rs["oid_conteudosite"])?>">
								<div class="opcao" id="iconDeletar"></div>
							</a>
							<a href="dica.php?editar=<?php echo($rs["oid_conteudosite"])?>">
								<div class="opcao" id="iconEditar"></div>
							</a>
							<h6><?php echo($rs["titulo"])?> </h6>
							<p class="text"><?php echo($rs["descricao"])?> </p>
							<span class="textData">Data de publicação:</span>
							<span class="data"><?php echo($rs["datacriacao"])?> </span>
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