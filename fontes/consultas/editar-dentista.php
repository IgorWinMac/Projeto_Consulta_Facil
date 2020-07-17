<br />
<br />
<br />
<h1>Editar Médico</h1>
<?php
	$sql = "SELECT * FROM medico WHERE id_medico=".$_REQUEST["id_medico"];
	
	
	$resultado = $conn->query($sql) or die($conn->error);
	
	$row = $resultado->fetch_assoc();
	
?>

<form action="index.php?page=salvar-dentista&acao=editar&id_medico=<?php print $row["id_medico"]; ?>" method="POST">
	<div class="form-group">
		<label>Nome do Médico</label>
		<input type="text" name="nome_medico" class="form-control" value="<?php print @$row["nome_medico"]; ?>">
		<label>Especialidade</label>
		<input type="text" name="especialidade" class="form-control" value="<?php print @$row["especialidade"]; ?>">
		<label>CRM</label>
		<input type="text" name="crm" class="form-control" value="<?php print @$row["crm"]; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>