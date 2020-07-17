<br />
<br />
<br />
<h1>Listar Médicos</h1>
<?php
	$sql = "SELECT * FROM medico";
	
	$resultado = $conn->query($sql) or die($conn->error);
	
	$qtd = $resultado->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-dark table-striped table-bordered table-hover'>";
		print "<tr>";
			print "<th>#</th>";
			print "<th>Nome</th>";
			print "<th>Especialidade</th>";
			print "<th>CRM</th>";
			print "<th>Ações</th>";
			print "</tr>";
		while($row = $resultado->fetch_assoc()){
			print "<tr>";
			print "<td>".@$row["id_medico"]."</td>";
			print "<td>".@$row["nome_medico"]."</td>";
			print "<td>".@$row["especialidade"]."</td>";
			print "<td>".@$row["crm"]."</td>";
			print "<td>
			
				   <button onclick=\"location.href='index.php?page=editar-dentista&id_medico=".$row["id_medico"]."';\" class='btn btn-success'><i class='fa fa-edit'></i></button>
				   
				   <button onclick=\"location.href='index.php?page=salvar-dentista&acao=excluir&id_medico=".$row["id_medico"]."';\"  class='btn btn-danger'><i class='fa fa-trash'></i></button>
				   
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>

<a href="index.php" class="btn btn-primary pull-right" role="button" aria-disabled="true">Sair</a>






