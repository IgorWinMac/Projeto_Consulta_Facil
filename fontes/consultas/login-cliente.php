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
<br />	
<br />	
<br />	

<?php 

if(isset($_REQUEST['login'])){

$usuario      = $_REQUEST['nome_usuario'];
$senha        = $_REQUEST['senha'];

$sql = "SELECT * FROM usuario WHERE nome_usuario = '$usuario' AND senha = '$senha' ";
$resultado = $conn->query($sql) or die($conn->error);
$qtd = $resultado->num_rows;

	if($qtd == 0){
		print '<center>Nome de Usuário inválido ou Senha inválida!</center>';
	}else{
		$_SESSION['nome_usuario'] = $usuario;
		$_SESSION['senha']   = $senha;
		
		header("Location: lista-geral.php");
	}
}

?>

<form action="" method="POST"> <br />
<div class="container">
<h1><p class="serif text-primary">Área do Administrador</p></h1> 
	<div class="form-group col-md-5">
		<label>Nome do Administrador</label>
		<input type="text" name="nome_usuario" class="form-control">
		<label>Matrícula</label>
		<input type="password" name="senha" class="form-control"><br />
		<input type="submit" name="login" value="login">
	</div>
</div>
</form>