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

$secao_usuario  = $_SESSION['nome_usumedico'];
$secao_senha    = $_SESSION['senha'];

?>

<div class="container">
<h1>Olá: <?php print $secao_usuario; ?></h1>
<h1>Área do Médico</h1>
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
	<a href="index.php" class="btn btn-primary pull-right" role="button" aria-disabled="true">Sair</a>

