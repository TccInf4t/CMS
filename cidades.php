<?php
	require_once("bd/conexao.php");

	Conectar();

	$id = $_GET['id'];

	$sql="select * from cidade where oid_estado= ". $id .";";
	$select = mysql_query($sql);

	while($cidade = mysql_fetch_array($select)){
?>
<option value="<?php echo($cidade['oid_cidade']); ?>" <?php if(isset($_GET['editar'])){ if($cidade['oid_cidade'] == $cidade2){ ?> selected <?php  } } ?>><?php echo($cidade['nome']); ?></option>
<?php } ?>