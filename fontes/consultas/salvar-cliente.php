<br />
<br />
<br />
<?php

	$nome            = @$_REQUEST["nome_paciente"];
	$cpf             = @$_REQUEST["cpf"];
	$encaminhamento  = @$_REQUEST["encaminhamento"];
	$email           = @$_REQUEST["email"];
	$telefone        = @$_REQUEST["telefone"];
	$data_nascimento = @$_REQUEST["data_nascimento"];
	
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO paciente (nome_paciente,cpf,encaminhamento,email,telefone,data_nascimento) VALUES ('{$nome}','{$cpf}','{$encaminhamento}','{$email}','{$telefone}','{$data_nascimento}')";
	
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu cadastrar</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE paciente SET nome_paciente='{$nome}' WHERE id_paciente=".$_REQUEST["id_paciente"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu editar</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM paciente WHERE id_paciente=".$_REQUEST["id_paciente"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu excluir</div>";
			}
		break;
		case "cancelar":
			$sql = "DELETE FROM paciente WHERE id_paciente=".$_REQUEST["id_paciente"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Cancelou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu cancelar</div>";
			}
		break;
	}
?>