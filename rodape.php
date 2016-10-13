<?php

	require_once("crud/rodape.php");

	$sql="select * from rodape";
		$select=mysql_query($sql);

		if(mysql_num_rows($select) == 0){

			$nome=null;			
			$cnpj=null;
			$telefone=null;
			$email=null;
			$loja=null;
			$facebook=null;
			$googleplus=null;
			$twitter=null;
			$linkedin=null;

		}else{

			$rodape=mysql_fetch_array($select);

			$nome=$rodape['nome'];			
			$cnpj=$rodape['cnpj'];
			$telefone=$rodape['telefone'];
			$email=$rodape['email'];
			$loja1=$rodape['oid_loja'];
			$facebook=$rodape['facebook'];
			$googleplus=$rodape['googleplus'];
			$twitter=$rodape['twitter'];
			$linkedin=$rodape['linkedin'];

		}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Adm - Rodapé</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="style/stylePadrao.css">
	<link rel="stylesheet" type="text/css" href="style/styleConteudo.css">

	<script type="text/javascript" src="js/jquery.js"></script> 
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
			<?php require_once('standard/header.php'); 
			?>

		</header>
		<div id="conteudo">
			<?php require_once('standard/menu.php'); ?>
			<div class="caixaCadastro">
				<h4>Informações do Rodapé</h4>

					<form name="" action="" method="post">
						<label>Nome completo da empresa:</label>
						<input type="text" value="<?php echo($nome); ?>" name="txtNome" placeholder="Onpecas Comércio e Indústria Ltda" required="required">
						<label>CNPJ:</label>
						<input type="text" name="txtCnpj" value="<?php echo($cnpj); ?>" id="cnpj" placeholder="00.000.000/0000-00" required="required" minlenght="18">
						<label>Email:</label>
						<input type="email" name="txtEmail" value="<?php echo($email); ?>" placeholder="onpecas@email.com">
						<label>Telefone:</label>
						<input type="text" name="txtTelefone" value="<?php echo($telefone); ?>" id="telefone" placeholder="(00) 0000-0000">
						<label>Loja Sede:</label>
						<?php
							
							$sql="select * from conteudosite where classname='TLoja'";

							$select=mysql_query($sql);

						?>
						<select name="cbLoja" >


							<?php

								while($loja=mysql_fetch_array($select)){

									?>
								<option value="<?php echo($loja['oid_conteudosite']); ?>" <?php if($loja['oid_conteudosite'] == $loja1){?> selected<?php } ?>><?php echo($loja['titulo']); ?></option>
									<?php

								}

							?>

						</select>
						<label>Facebook:</label>
						<input type="text" name="txtFacebook" value="<?php echo($facebook); ?>" placeholder="https://pt-br.facebook.com/onpecas/
">
						<label>Twitter:</label>
						<input type="text" name="txtTwitter" value="<?php echo($twitter); ?>" placeholder="https://twitter.com/onpecas">
						
						<input type="submit" name="btnSalvar" class="buttom" id="salvar" value="Salvar">	
					</form>
			</div>
				
		</div>
		<footer>
			<h2>OnPeças ©</h2>
			<h3>Desenvolvido por Code Solution  2016</h3>
		</footer>
	</div>
</body>
</html>