<br />
<br />
<br />
<?php

	$nome            = @$_REQUEST["nome_paciente"];
	$cpf             = @$_REQUEST["cpf"];
	$especialidade   = @$_REQUEST["especialidade"];
	$medico          = @$_REQUEST["medico"];
	$retorno         = @$_REQUEST["retorno"];
	$data            = @$_REQUEST["data"];
	$hora            = @$_REQUEST["hora"];
	$email           = @$_REQUEST["email"];
	$telefone        = @$_REQUEST["telefone"];
	$data_nascimento = @$_REQUEST["data_nascimento"];
	
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO consulta (nome_paciente,cpf,especialidade,medico,retorno,data,hora,email,telefone,data_nascimento) VALUES ('{$nome}','{$cpf}','{$especialidade}','{$medico}','{$retorno}','{$data}','{$hora}','{$email}','{$telefone}','{$data_nascimento}')";
	
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu cadastrar</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE consulta SET nome_paciente='{$nome}' WHERE id_consulta=".$_REQUEST["id_consulta"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu editar</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM consulta WHERE id_consulta=".$_REQUEST["id_consulta"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu excluir</div>";
			}
		break;
		case "cancelar":
			$sql = "DELETE FROM consulta WHERE id_consulta=".$_REQUEST["id_consulta"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Cancelou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu cancelar</div>";
			}
		break;
	}
?>