<?php require_once "header.inc.php"; ?>
<?php
$sql = "SELECT * FROM pessoas";
$resultado = $conn->query($sql);
$rows = $resultado->fetch_all(MYSQLI_ASSOC);
$resultado->free();
?>
<h3>Lista de Pessoas</h3>

<table id="lista">
<thead>
	<tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Ações</th>
	</tr>
</thead>
<tbody>
<?php
if($rows){
	foreach($rows as $row){
		echo "<tr>\n";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['nome']."</td>";
		echo "<td><a href=\"editar.php?id=".$row['id']."\">Editar</a> - ";
		echo "<a href=\"remover.php?id=".$row['id']."\">Apagar</a></td>";
		echo "</tr>\n";
	}
}
?>
</tbody>
</table>
<?php require_once "footer.inc.php"; ?>