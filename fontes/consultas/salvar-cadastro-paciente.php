<br />
<br />
<br />
<?php

	$nome            = @$_REQUEST["nome_usupaciente"];
	$email           = @$_REQUEST["email"];
	$senha           = @$_REQUEST["senha"];

	
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO usupaciente (nome_usupaciente,email,senha) VALUES ('{$nome}','{$email}','{$senha}')";
	
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu cadastrar</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE usupaciente SET nome_usupaciente='{$nome}' WHERE id_usupaciente=".$_REQUEST["id_usupaciente"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu editar</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM usupaciente WHERE id_usupaciente=".$_REQUEST["id_usupaciente"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu excluir</div>";
			}
		break;
		case "cancelar":
			$sql = "DELETE FROM usupaciente WHERE id_usupaciente=".$_REQUEST["id_usupaciente"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Cancelou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu cancelar</div>";
			}
		break;
	}
?>