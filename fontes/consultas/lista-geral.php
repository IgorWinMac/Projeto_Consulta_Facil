<?php session_start(); include'config.php';?>

<?php

if(!isset($_SESSION['nome_usuario'])){
	
	print 'Não existe uma sessão aberta!';
	header("Location: ../login-cliente.php");
	}

?>


<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<br />
<br />
<br />
<br />
<br />

<?php

$secao_usuario  = $_SESSION['nome_usuario'];
$secao_senha    = $_SESSION['senha'];

?>


<div class="container">
<h1>Olá: <?php print $secao_usuario; ?></h1>
<div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
  <div class="text-center card-header" >Área Restrita</div>
  <div class="card-body">
    <h5 class="text-center" "card-title">Somente Administrador</h5>
    <p class="card-text"></p>
  </div>
</div>
</div>

<div class="container">
<div class="alert alert-danger" role="alert">
  Logo abaixo estão os <a href="" class="alert-link">FORMULÁRIOS</a> para cadastrar Médicos e Pacientes no sistema.
</div>
	<h1>Cadastrar Médicos</h1> <br />
<form action="index.php?page=salvar-dentista&acao=cadastrar" method="POST">
	<div class="form-group">
		<label>Nome do Médico</label>
		<input type="text" name="nome_medico" class="form-control">
		<label>Especialidade</label>
		<input type="text" name="especialidade" class="form-control">
		<label>CRM</label>
		<input type="crm" name="crm" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
		<a href="index.php" class="btn btn-primary pull-right" role="button" aria-disabled="true">Sair</a>
	</div>
	
<hr />
</form>
<br />
<br />
<h1>Cadastrar Pacientes</h1> <br />
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
		<a href="index.php" class="btn btn-primary pull-right" role="button" aria-disabled="true">Sair</a>
	</div>
	<hr />
</form>
</div>
<br />
<br />
<br />

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
</form>
</div>
</section> <br />



<div class="container">
<div class="alert alert-danger" role="alert">
  Logo abaixo começa a <a href="" class="alert-link">LISTA GERAL</a> dos Médicos e Pacientes cadastrados no sistema.
</div>
<hr />
<h1>Listar Médicos</h1>
			<div class="row">
				<div class="col-lg-12">
	<nav class="navbar fixed-top navbar-light bg-light">
	<nav  class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href=""><i class=""></i></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#home">Home</a></li>
						<li class="nav-item active">
						<a class="nav-link" href="#serviços">Serviços</a></li>
						<li class="nav-item active">
						<a class="nav-link" href="#contatos">Contatos</a></li> 
						<li class="nav-item active">
						<a class="nav-link" href="#convenios">Convênios</a></li> 
						<li class="nav-item active">
						<a class="nav-link" href="#mapa">Mapa</a></li>
					</li>

					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">						
							<a class="dropdown-item" href="login-cliente.php?page=login-cliente">Sessão de Login</a>
							
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</nav>

<?php

	include("config.php");

	$sql = "SELECT * FROM medico";
	
	@$resultado = $conn->query($sql) or die($conn->error);
	
	$qtd = $resultado->num_rows;
?>
<?php	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-dark table-striped table-bordered table-hover'>";
		print "<tr>";
			print "<th>#</th>";
			print "<th>Nome</th>";
			print "<th>Especialidade</th>";
			print "<th>CRM</th>";
			print "<th>Ações</th>";
			print "</tr>";
		while($row = $resultado->fetch_assoc()){
			print "<tr>";
			print "<td>".@$row["id_medico"]."</td>";
			print "<td>".@$row["nome_medico"]."</td>";
			print "<td>".@$row["especialidade"]."</td>";
			print "<td>".@$row["crm"]."</td>";
			print "<td>
			
				   <button onclick=\"location.href='index.php?page=editar-dentista&id_medico=".$row["id_medico"]."';\" class='btn btn-success'><i class='fa fa-edit'></i></button>
				   
				   <button onclick=\"location.href='index.php?page=salvar-dentista&acao=excluir&id_medico=".$row["id_medico"]."';\"  class='btn btn-danger'><i class='fa fa-trash'></i></button>
				   
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>


<h1>Listar Pacientes</h1>

<?php
	$sql = "SELECT * FROM paciente";
	
	@$resultado = $conn->query($sql) or die($conn->error);
	
	$qtd = $resultado->num_rows;
?>
<?php	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-dark table-striped table-bordered table-hover'>";
		print "<tr>";
			print "<th>#</th>";
			print "<th>Nome</th>";
			print "<th>CPF</th>";
			print "<th>Encaminhamento</th>";
			print "<th>Email</th>";
			print "<th>Telefone</th>";
			print "<th>Data de Nascimento</th>";
			print "<th>Ações</th>";
			print "</tr>";
		while($row = $resultado->fetch_assoc()){
			print "<tr>";
			print "<td>".@$row["id_paciente"]."</td>";
			print "<td>".@$row["nome_paciente"]."</td>";
			print "<td>".@$row["cpf"]."</td>";
			print "<td>".@$row["encaminhamento"]."</td>";
			print "<td>".@$row["email"]."</td>";
			print "<td>".@$row["telefone"]."</td>";
			print "<td>".@$row["data_nascimento"]."</td>";
			print "<td>
			
				   <button onclick=\"location.href='index.php?page=editar-cliente&id_paciente=".$row["id_paciente"]."';\" class='btn btn-success'><i class='fa fa-edit'></i></button>
				   
				   <button onclick=\"location.href='index.php?page=salvar-cliente&acao=excluir&id_paciente=".$row["id_paciente"]."';\"  class='btn btn-danger'><i class='fa fa-trash'></i></button>
				   
				   <button onclick=\"location.href='index.php?page=salvar-cliente&acao=cancelar&id_paciente=".$row["id_paciente"]."';\"  class='btn btn-warning'><i class='fa fa-close'></i></button>
				   
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
	
?>
<a href="index.php" class="btn btn-primary pull-right" role="button" aria-disabled="true">Sair</a>
</div>
</div>
<hr />
<h1>Consultas Marcadas</h1>
<br />
<?php
	$sql = "SELECT * FROM consulta";
	
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
			print "<th>Ações</th>";
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
			print "<td>
			
				   <button onclick=\"location.href='index.php?page=editar-consultas&id_consulta=".$row["id_consulta"]."';\" class='btn btn-success'><i class='fa fa-edit'></i></button>
				   
				   <button onclick=\"location.href='index.php?page=salvar-consultas&acao=excluir&id_consulta=".$row["id_consulta"]."';\"  class='btn btn-danger'><i class='fa fa-trash'></i></button>
				   
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>

<a href="index.php" class="btn btn-primary pull-right" role="button" aria-disabled="true">Sair</a>
</div>
<br />
<br />
<br />


