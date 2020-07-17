<br />
<br />
<br />
<h1>Editar Paciente</h1>
<?php
	$sql = "SELECT * FROM paciente WHERE id_paciente=".$_REQUEST["id_paciente"];
	
	$resultado = $conn->query($sql) or die($conn->error);
	
	$row = $resultado->fetch_assoc();
?>

<form action="index.php?page=salvar-cliente&acao=editar&id_paciente=<?php print $row["id_paciente"]; ?>" method="POST">
	<div class="form-group">
		<label>Nome do Paciente</label>
		<input type="text" name="nome_paciente" class="form-control" value="<?php print @$row["nome_paciente"]; ?>">
		<label>CPF</label>
		<input type="number" name="cpf" class="form-control" value="<?php print @$row["cpf"]; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>