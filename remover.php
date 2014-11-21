<?php require_once "conexao.inc.php"; ?>
<?php
if(isset($_GET['id'])){	
	$id = $_GET['id'];

	$sql = "DELETE FROM pessoas WHERE id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param('i',$id);
}
?>
<?php require_once "header.inc.php"; ?>
<h3>Removendo...</h3>
<?php
if($stmt->execute()){
	echo "<p>Sucesso, ".$conn->affected_rows." linhas afetadas. </p>";
}
?>
<a href="index.php">Continuar</a>
<?php require_once "footer.inc.php"; ?>