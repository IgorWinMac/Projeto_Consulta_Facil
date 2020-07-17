<br />
<br />
<br />
<h1>Listar Pacientes</h1>
<?php
	$sql = "SELECT * FROM paciente";
	
	$resultado = $conn->query($sql) or die($conn->error);
	
	$qtd = $resultado->num_rows;
	
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
				   
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>

<a href="index.php" class="btn btn-primary pull-right" role="button" aria-disabled="true">Sair</a>