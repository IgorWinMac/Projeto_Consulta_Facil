<br />
<br />
<br />
<?php

	$nome            = @$_REQUEST["nome_usuario"];
	$tipo            = @$_REQUEST["tipo_usuario"];
	$senha           = @$_REQUEST["senha"];

	
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO usuario (nome_usuario,tipo_usuario,senha) VALUES ('{$nome}','{$tipo}','{$senha}')";
	
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu cadastrar</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE usuario SET nome_usuario='{$nome}' WHERE id_usuario=".$_REQUEST["id_usuario"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu editar</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM usuario WHERE id_usuario=".$_REQUEST["id_usuario"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu excluir</div>";
			}
		break;
		case "cancelar":
			$sql = "DELETE FROM usuario WHERE id_usuario=".$_REQUEST["id_usuario"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Cancelou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu cancelar</div>";
			}
		break;
	}
?>