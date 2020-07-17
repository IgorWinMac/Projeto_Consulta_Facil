
<br />
<br />
<br />
<h1>Cadastrar Paciente</h1> <br />
<form action="index.php?page=salvar-cliente&acao=cadastrar" method="POST">
	<div class="form-group">
		<label>Nome do Paciente</label>
		<input type="text" name="nome_paciente" class="form-control">
		<label>CPF</label>
		<input type="text" name="cpf" class="form-control">
		<label>Encaminhamento</label>
		<input type="text" name="encaminhamento" class="form-control">
		<label>Email</label>
		<input type="email" name="email" class="form-control">
		<label>Telefone</label>
		<input type="text" name="telefone" class="form-control">
		<label>Data de Nascimento</label>
		<input type="date" name="date" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
	<a href="index.php" class="btn btn-primary pull-right" role="button" aria-disabled="true">Sair</a>
</form>