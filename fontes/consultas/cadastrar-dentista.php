<br />
<br />
<br />
<h1>Cadastrar Médico</h1> <br />
<form action="index.php?page=salvar-dentista&acao=cadastrar" method="POST">
	<div class="form-group">
		<label>Nome do Médico</label>
		<input type="text" name="nome_medico" class="form-control">
		<label>Especialidade</label>
		<input type="text" name="especialidade" class="form-control">
		<label>CRM</label>
		<input type="text" name="crm" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
	<a href="index.php" class="btn btn-primary pull-right" role="button" aria-disabled="true">Sair</a>

</form>