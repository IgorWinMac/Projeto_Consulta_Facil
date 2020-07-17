<!DOCTYPE html>
<html lang="pt-BR">

<?php session_start(); include'config.php';?>

<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
</head>	

<style>	
	p.serif {
    font-family: "Times New Roman", Times, serif;
}

p.sansserif {
    font-family: Arial, Helvetica, sans-serif;
}
</style>
<br />
<br />
<br />
<br />

<?php

$secao_usuario  = $_SESSION['nome_usupaciente'];
$secao_senha    = $_SESSION['senha'];

?>

<div class="container">
<h1>Olá: <?php print $secao_usuario; ?></h1>
<h1>Área do Paciente</h1>
	<nav class="navbar fixed-top navbar-light bg-light">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="#"><i class=""></i></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item active">
						<a class="nav-link" href="index.php">Especialidades</a></li>
						<li class="nav-item active">
						<a class="nav-link" href="index.php">Contatos</a></li> 
						<li class="nav-item active">
						<a class="nav-link" href="index.php">Lista de Médicos</a></li>
						<li class="nav-item active">
						<a class="nav-link" href="index.php">Mapa</a></li>
					</li>
					
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="index.php?page=login-cliente">Sessão de Login</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</nav>

<section id="marcar-consultas">
<br />
<br />
<br />
<div class="container">
<h1>Marcar Consultas</h1><br />
<form action="index.php?page=salvar-consultas&acao=cadastrar" method="POST">
	<div class="form-group">
		<label>Nome do Paciente</label>
		<input type="text" name="nome_paciente" class="form-control">
		<label>CPF</label>
		<input type="text" name="cpf" class="form-control">
		<label>Especialidade</label>
		<input type="text" name="especialidade"class="form-control">
		<label>Médico</label>
		<input type="text" name="medico"class="form-control">
		<label>Retorno (Sim/Não)</label>
		<input type="text" name="retorno"class="form-control">
		<label>Data</label>
		<input type="date" name="data"class="form-control">
		<label>Hora</label>
		<input type="time" name="hora"class="form-control">
		<label>Email para confirmação</label>
		<input type="email" name="email" class="form-control">
		<label>Telefone para contato</label>
		<input type="text" name="telefone" class="form-control">
		<label>Data de Nascimento</label>
		<input type="date" name="date" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
	<hr />

	<h1>Histórico De Consultas Marcadas</h1>
<br />
<?php
	$sql = "SELECT id_consulta, nome_paciente, medico, data, hora FROM consulta INNER JOIN usupaciente WHERE consulta.id_consulta=usupaciente.id_usupaciente";
	
	$resultado = $conn->query($sql) or die($conn->error);
	
	$qtd = $resultado->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-dark table-striped table-bordered table-hover'>";
		print "<tr>";
			print "<th>#</th>";
			print "<th>Nome</th>";
			print "<th>CPF</th>";
			print "<th>Especialidade</th>";
			print "<th>Médico</th>";
			print "<th>Retorno</th>";
			print "<th>Data</th>";
			print "<th>Hora</th>";
			print "<th>Email</th>";
			print "<th>Telefone</th>";
			print "<th>Data de Nascimento</th>";
			print "</tr>";
		while($row = $resultado->fetch_assoc()){
			print "<tr>";
			print "<td>".@$row["id_paciente"]."</td>";
			print "<td>".@$row["nome_paciente"]."</td>";
			print "<td>".@$row["cpf"]."</td>";
			print "<td>".@$row["especialidade"]."</td>";
			print "<td>".@$row["medico"]."</td>";
			print "<td>".@$row["retorno"]."</td>";
			print "<td>".@$row["data"]."</td>";
			print "<td>".@$row["hora"]."</td>";
			print "<td>".@$row["email"]."</td>";
			print "<td>".@$row["telefone"]."</td>";
			print "<td>".@$row["data_nascimento"]."</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>
	
	<a href="index.php" class="btn btn-primary pull-right" role="button" aria-disabled="true">Sair</a>
	<br />
	<br />
	
	<br />
