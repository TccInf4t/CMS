<?php 
	require_once('crud/parceiro.php');

	$botao="Salvar";
	$parceiro=null;
	$site=null;
	$logo=null;

	if(isset($_GET['editar'])){

		$_SESSION['codigo']=$_GET['editar'];

		$sql="select c.oid_conteudosite,c.site, c.titulo, i.caminho from conteudosite as c inner join imagem as i on(c.oid_imagem=i.oid_imagem) where oid_conteudosite=".$_SESSION['codigo'];
		$resultado=mysql_query($sql);
		$array=mysql_fetch_array($resultado);

		$parceiro=$array['titulo'];
		$site=$array['site'];
		$logo=$array['caminho'];

		$botao="Editar";

	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Adm - Parceiro</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="style/stylePadrao.css">
	<link rel="stylesheet" type="text/css" href="style/styleConteudo.css">

	<script type="text/javascript" src="js/jquery.js"></script> 
	<script type="text/javascript" src="js/modal.js"></script>
	<script type="text/javascript" src="js/preview.js"></script>

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
				<h4>Cadastro de Parceiros</h4>
				 	<form name="" action="#" method="post" enctype="multipart/form-data">
						<label>Nome/Parceiro:<span class="obrigatorio">*</span></label>
						<input type="text" name="txtParceiro" placeholder="Empresa de desmanche" value="<?php echo($parceiro); ?>" required="required">
						<label>Site:<span class="obrigatorio">*</span></label>
						<input type="text" name="txtSite" placeholder="https://www.parceiro.com.br/" value="<?php echo($site); ?>" required="required">
						<label>Logo:<span class="obrigatorio">*</span></label>
						<input type="file" name="imgLogo" onchange="previsualizacao()" <?php if(!isset($_GET['editar'])){ echo("required"); } ?>>
						<input type="submit" name="btnSalvar" class="buttom" id="salvar" value="<?php echo($botao); ?>">
					</form>
			</div>
			<h6 id="tituloImg">Pré-Visualização</h6>
			<img src="<?php echo($logo); ?>" alt=" " id="preview">
			<h5>Tabela de Registros - Parceiros</h5>
			<?php 
				$sql="select c.oid_conteudosite,c.site, c.titulo, i.caminho, i.oid_imagem from conteudosite as c inner join imagem as i on(c.oid_imagem=i.oid_imagem);";
	
				$select=mysql_query($sql);
				$cont=0;

					while ($rs=mysql_fetch_array($select)) {
						$cont++;	
			 ?>
				<div class="caixaRegistrosParceiro">
					<a href="parceiro.php?excluir=<?php echo($rs['oid_conteudosite']); ?>">
						<div class="opcao" id="iconDeletar"></div>
					</a>
					<a href="parceiro.php?editar=<?php echo($rs['oid_conteudosite']); ?>">
						<div class="opcao" id="iconEditar"></div>
					</a>
					<h6><?php  echo($rs['titulo']); ?></h6>
					<span class="parceiro"><?php echo($rs['site']); ?></span>
					<img src="<?php echo($rs['caminho']); ?>" alt=" " id="previwParceiro">
					
					
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