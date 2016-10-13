<?php
	require_once("crud/loja.php");

	if(isset($_GET['editar'])){

		$sql="select l.*,e.*,t.*,ei.*,ci.* from conteudosite l inner join endereco e on(e.oid_endereco = l.oid_endereco) inner join telefone t on(l.oid_telefone = t.oid_telefone) inner join cidade ci on(ci.oid_cidade = e.oid_cidade) inner join estado ei on(ci.oid_estado = ei.oid_estado) where l.oid_conteudosite =".$_GET['editar'];

		$select=mysql_query($sql);

		$loja=mysql_fetch_array($select);

		$nome=$loja['titulo'];
		$cep=$loja['cep'];
		$logradouro=$loja['logradouro'];
		$estado2=$loja['oid_estado'];
		$cidade2=$loja['oid_cidade'];
		$bairro=$loja['bairro'];
		$numero=$loja['numero'];
		$complemento=$loja['complemento'];
		$telefone=$loja['telefone'];

		$buttonName="btnEditar";



	}else{

		$nome=null;
		$cep=null;
		$logradouro=null;
		$estado=null;
		$cidade=null;
		$bairro=null;
		$numero=null;
		$complemento=null;
		$telefone=null;

		$buttonName="btnSalvar";

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Adm - Loja</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="style/stylePadrao.css">
	<link rel="stylesheet" type="text/css" href="style/styleConteudo.css">

	<script type="text/javascript" src="js/jquery.js"></script> 
	<script type="text/javascript" src="js/acordion.js"></script>
	<script type="text/javascript" src="js/loja.js"></script>
	<script type="text/javascript" src="js/modal.js"></script>
	<script type="text/javascript" src="js/masksInput.js"></script>
	<script type="text/javascript" src="js/masks.js"></script>

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
				<h1>Cadastro de Lojas</h1>
				<form name=" " action="" method="post">
					<label>Nome da Loja:</label>
						<input type="text" name="txtNome" placeholder="OnPeças Jd.Rosemeire"  required value="<?php echo($nome); ?>">
					<label>CEP:</label>
						<input type="text" id="cep" name="txtCep" placeholder="06657-015" minlength="9" maxlength="9" required value="<?php echo($cep); ?>">
					<label>Logradouro:</label>
						<input type="text" name="txtLogradouro" placeholder="Av. Aguinaldo Almeida" required value="<?php echo($logradouro); ?>">
					<label>Estado:</label>
						<?php
							
							$sql="select * from estado";

							$select=mysql_query($sql);

						?>
						<select name="cbEstado" id="cbEstado">


							<?php

								while($estado=mysql_fetch_array($select)){

									?>
								<option value="<?php echo($estado['oid_estado']); ?>" <?php if(isset($_GET['editar'])){ if($estado['oid_estado'] == $estado2){ ?> selected <?php  } } ?>><?php echo($estado['nome']." - ".$estado['uf']); ?></option>
									<?php

								}

							?>

						</select>
					<label>Cidade:</label>
						<select name="cbCidade" id="cbCidade" required>
						</select>
					<label>Bairro:</label>
						<input type="text" name="txtBairro" placeholder="Jardim Rosemeire" required value="<?php echo($bairro); ?>">	
					<label>Nº:</label>
						<input type="text" name="txtNumero" placeholder="222" required value="<?php echo($numero); ?>">	
					<label>Complemento:</label>
						<input type="text" name="txtComplemento" placeholder="0A"  value="<?php echo($complemento); ?>">	
					<label>Telefone:</label>
						<input type="text" id="telefone" name="txtTelefone" minlength="13" placeholder="(00) 4578-8975" required value="<?php echo($telefone); ?>">	

					<input type="submit" name="<?php echo($buttonName); ?>" class="buttom" id="salvar" value="Salvar"  value="<?php echo($telefone); ?>">
				</form>
			</div>
			<h5>Tabela de Registros</h5>
			
				<?php

					$sql="select c.*,e.*,ci.nome as cidade,ci.oid_cidade,es.nome as estado,t.* from conteudosite c inner join endereco e on(c.oid_endereco = e.oid_endereco) inner join cidade ci on (e.oid_cidade = ci.oid_cidade) inner join telefone t on(c.oid_telefone = t.oid_telefone) inner join estado es on(ci.oid_estado = es.oid_estado); ";

					$select=mysql_query($sql);

					$cont=1;

					while($loja=mysql_fetch_array($select)){

				  ?>
				<div class="accordion">
					<div class="accordion-section">
				        <a class="accordion-section-title" href="#accordion-<?php echo($cont); ?>">
				        	<?php echo($loja['titulo']); ?>
				        </a>
				        <div id="accordion-<?php echo($cont); ?>" class="accordion-section-content">
				            		<a href="<?php echo("loja.php?editar=".$loja['oid_conteudosite']."&endereco=".$loja['oid_endereco']."&telefone=".$loja['oid_telefone']); ?>">
									<div class="opcao" id="iconEditar"></div>
									</a>
									 <a href="<?php echo("loja.php?excluir=".$loja['oid_conteudosite']); ?>">
										<div class="opcao" id="iconDeletar"></div>
									</a>
				            	<label>Nome da loja:</label>
				            		<span class="textDetalhes"><?php echo($loja['titulo']); ?></span>
				            	<label>CEP:</label>
				            		<span class="textDetalhes"><?php echo($loja['cep']); ?></span>
				            	<label>Logradouro:</label>	
				            		<span class="textDetalhes"><?php echo($loja['logradouro']); ?></span>
				            	<label>Estado:</label>
				            		<span class="textDetalhes"><?php echo($loja['estado']); ?></span>
				            	<label>Bairro:</label>
				            		<span class="textDetalhes"><?php echo($loja['bairro']); ?></span>
				            	<label>Cidade:</label>
				            		<span class="textDetalhes"><?php echo($loja['cidade']); ?></span>
				            	<label>Número:</label>
				            		<span class="textDetalhes"><?php echo($loja['numero']); ?></span>
				            	<label>Complemento:</label>
				            		<span class="textDetalhes"><?php echo($loja['complemento']); ?></span>
				            	<label>Telefone:</label>
				            		<span class="textDetalhes"><?php echo($loja['telefone']); ?></span>
				        </div>
				    </div>
				</div>
				<?php
				$cont++;
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