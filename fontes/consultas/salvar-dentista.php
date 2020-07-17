<br />
<br />
<br />
<?php

	$nome          = @$_REQUEST["nome_medico"];
	$especialidade = @$_REQUEST["especialidade"];
	$crm           = @$_REQUEST["crm"];
	
	
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO medico (nome_medico,especialidade,crm) VALUES ('{$nome}','{$especialidade}','{$crm}')";
	
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu cadastrar</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE medico SET nome_medico='{$nome}' WHERE id_medico=".$_REQUEST["id_medico"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu editar</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM medico WHERE id_medico=".$_REQUEST["id_medico"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não conseguiu excluir</div>";
			}
		break;
	}

?>



