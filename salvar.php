<?php require_once "conexao.inc.php"; ?>
<?php
if($_POST){
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	
	if($id){ // Atualizar
		$sql = "UPDATE pessoas SET nome = ? WHERE id = ?;";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('si',$nome,$id);
	} else { // Adicionar
		$sql = "INSERT INTO pessoas(nome) VALUES(?);";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('s',$nome);
	}	
}
?>
<?php require_once "header.inc.php"; ?>
<h3>Salvando...</h3>
<?php
if($stmt->execute()){
	echo "<p>Sucesso, ".$conn->affected_rows." linhas afetadas. </p>";
}
?>
<a href="index.php">Continuar</a>
<?php require_once "footer.inc.php"; ?>