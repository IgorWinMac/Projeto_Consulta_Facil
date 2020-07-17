
<?php include("config.php");?>


<!DOCTYPE html>
<html lang="pt-BR">
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Consulta Fácil</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">	
	</head>
				
	<body>
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
						<a class="nav-link" href="#tratamentos-e-serviços">Especialidades</a></li>
						<li class="nav-item active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Realizar Cadastro</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="realizar-cadastro-paciente.php?page=realizar-cadastro-paciente">Cadastro para Paciente</a>
						<a class="dropdown-item" href="realizar-cadastro-medico.php?page=realizar-cadastro-medico">Cadastro para Médico</a>
						</div>
						<li class="nav-item active">
						<a class="nav-link" href="#lista-de-medicos">Lista de Médicos</a></li> 
						<li class="nav-item active">
						<a class="nav-link" href="#mapa">Mapa</a></li>
					</li>
					
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="login-cliente.php?page=login-cliente">Área do Administrador</a>
							<a class="dropdown-item" href="login-paciente.php?page=login-paciente">Área do Paciente</a>
							<a class="dropdown-item" href="login-medico.php?page=login-medico">Área do Médico</a>
							
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</nav>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php
						include("config.php");
						
						switch(@$_REQUEST["page"]){
							case "cadastrar-dentista":
								include("cadastrar-dentista.php");
							break;
							case "listar-dentista":
								include("listar-dentista.php");
							break;
							case "salvar-dentista":
								include("salvar-dentista.php");
							break;
							case "editar-dentista":
								include("editar-dentista.php");
							break;
							case "cadastrar-cliente":
								include("cadastrar-cliente.php");
							break;
							case "listar-cliente":
								include("listar-cliente.php");
							break;
							case "salvar-cliente":
								include("salvar-cliente.php");
							break;
							case "editar-cliente":
								include("editar-cliente.php");
							break;
							case "lista-geral":
								include("lista-geral.php");
							break;
							case "cadastrar-consultas":
								include("marcar-consultas.php");
							break;
							case "listar-consultas":
								include("consultas-marcadas.php");
							break;
							case "salvar-consultas":
								include("salvar-consultas.php");
							break;
							case "editar-consultas":
								include("editar-consultas.php");
							break;
							case "cadastrar-cadastro":
								include("cadastrar-cadastro.php");
							break;
							case "listar-cadastro":
								include("listar-cadastro.php");
							break;
							case "salvar-cadastro":
								include("salvar-cadastro.php");
							break;
							case "editar-cadastro":
								include("editar-cadastro.php");
							break;
							case "cadastrar-cadastro-paciente":
								include("realizar-cadastro-paciente.php");
							break;
							case "listar-cadastro-paciente":
								include("listar-cadastro-paciente.php");
							break;
							case "salvar-cadastro-paciente":
								include("salvar-cadastro-paciente.php");
							break;
							case "editar-cadastro-paciente":
								include("editar-cadastro-paciente.php");
							break;
							case "cadastrar-cadastro-medico":
								include("realizar-cadastro-medico.php");
							break;
							case "listar-cadastro-medico":
								include("listar-cadastro-medico.php");
							break;
							case "salvar-cadastro-medico":
								include("salvar-cadastro-medico.php");
							break;
							case "editar-cadastro-medico":
								include("editar-cadastro-medico.php");
							break;
							default:
								include("home.php");
						}
					?>
				</div>		
			</div>
		</div>
		
				
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

