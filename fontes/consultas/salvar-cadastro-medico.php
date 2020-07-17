<br />
<br />
<br />
<?php

	$nome            = @$_REQUEST["nome_usumedico"];
	$especialidade   = @$_REQUEST["especialidade"];
	$senha           = @$_REQUEST["senha"];

	
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO usumedico (nome_usumedico,especialidade,senha) VALUES ('{$nome}','{$especialidade}','{$senha}')";
	
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu cadastrar</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE usumedico SET nome_usumedico='{$nome}' WHERE id_usumedico=".$_REQUEST["id_usumedico"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu editar</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM usumedico WHERE id_usumedico=".$_REQUEST["id_usumedico"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu excluir</div>";
			}
		break;
		case "cancelar":
			$sql = "DELETE FROM usumedico WHERE id_usumedico=".$_REQUEST["id_usumedico"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Cancelou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu cancelar</div>";
			}
		break;
	}
?>