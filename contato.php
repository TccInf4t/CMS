<?php
	require_once('bd/conexao.php');
	Conectar();
	
	if(isset($_GET['modo'])){
		
		//guarda o conteudo da variavel modo 
		//em uma variavel local
		$modo=$_GET['modo'];
		
		//verificar se a opção selecionada for excluir ou editar
		if($modo=='excluir'){
			
			$cod = $_GET['oid_contato'];
			
			//para deletar apenas um item da tabela, pois se deixar apenas o comando da url o banco de dados irá apagar todos os itens
			$sql = "delete from contato where oid_contato=".$cod;
			
			//para enviar o comando para o banco de ddos
			mysql_query($sql);
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>CMS</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="style/stylePadrao.css">
	<link rel="stylesheet" type="text/css" href="style/styleConteudo.css">

	<script type="text/javascript" src="js/jquery3.js"></script> 
	<script type="text/javascript" src="js/modal.js"></script>
	<script type="text/javascript" src="js/lista_contato.js"></script>

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
	<!--DIV DA JANELA MODAL DETALHES EFEITO JAVA SCRIPT-->
	
	<div class="window" id="janelaDetalhes">
		<a href="#" class="fechar">
			<div id="fecharDetalhes"></div>
		</a>
			<h5>Detalhes do Registro</h5>
			<label>Nome:</label>
			<span class="textDetalhes" id="nomeJs"></span>
			<label>Email:</label>
			<span class="textDetalhes" id="emailJs"></span>
			<label>Telefone:</label>
			<span class="textDetalhes" id="telJs"></span>
			<label>Motivo:</label>
			<span class="textDetalhes" id="motivoJs"></span>
			<label>Data e hora de envio:</label>
			<span class="textDetalhes" id="dhJs"></span>
			<label>Comentário:</label>
			<p class="textDetalhes" id="comentarioJs"></p>
			
			<a href="contato.php" id="apagar">
				<div class="opcao" id="iconDeletar"></div>
			</a>
	</div>

<h2>Registros de Contato do Site</h2>
<div id="caixaRegistrosContato">
	<table id="tblcontatos">
		<tr>
			<th>
				<?php 
					require_once('crud/selectMotivos.php');
				?>
			</th>
			<th>
				Nome:
			</th>
			<th>
				Detalhes:
			</th>
			<th>
				Excluir:
			</th>
		</tr>
		<?php
			require_once('lista_contatos.php');
		?>
	</table>
</div>
		</div>
		<footer>
			<h2>OnPeças ©</h2>
			<h3>Desenvolvido por Code Solution  2016</h3>
		</footer>
	</div>
</body>
</html>