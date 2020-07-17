<br />
<br />
<br />
<h1>Consultas Marcadas</h1>
<?php
	$sql = "SELECT * FROM consulta";
	
	$resultado = $conn->query($sql) or die($conn->error);
	
	$qtd = $resultado->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-dark table-striped table-bordered table-hover'>";
		print "<tr>";
			print "<th>#</th>";
			print "<th>Nome</th>";
			print "<th>CPF</th>";
			print "<th>Especialidade</th>";
			print "<th>Médico</th>";
			print "<th>Retorno</th>";
			print "<th>Data</th>";
			print "<th>Hora</th>";
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
			print "<td>".@$row["especialidade"]."</td>";
			print "<td>".@$row["medico"]."</td>";
			print "<td>".@$row["retorno"]."</td>";
			print "<td>".@$row["data"]."</td>";
			print "<td>".@$row["hora"]."</td>";
			print "<td>".@$row["email"]."</td>";
			print "<td>".@$row["telefone"]."</td>";
			print "<td>".@$row["data_nascimento"]."</td>";
			print "<td>
			
				   <button onclick=\"location.href='index.php?page=editar-consultas&id_consulta=".$row["id_consulta"]."';\" class='btn btn-success'><i class='fa fa-edit'></i></button>
				   
				   <button onclick=\"location.href='index.php?page=salvar-consultas&acao=excluir&id_consulta=".$row["id_consulta"]."';\"  class='btn btn-danger'><i class='fa fa-trash'></i></button>
				   
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>

<a href="index.php" class="btn btn-primary pull-right" role="button" aria-disabled="true">Sair</a>