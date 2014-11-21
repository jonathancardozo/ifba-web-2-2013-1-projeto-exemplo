<?php require_once "conexao.inc.php"; ?>
<?php
if(isset($_REQUEST['id'])){	
	$id = $_REQUEST['id'];

	$sql = "SELECT * FROM pessoas WHERE id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param('i',$id);
	$stmt->bind_result($id,$nome);
	$stmt->execute();
	$stmt->fetch();
} else {
	// Novo
	$id = null;
	$nome = null;
}
?>
<?php require_once "header.inc.php"; ?>
<h3><?php if($id){ ?>Editar<?php } else { ?>Adicionar<?php } ?></h3>

<form method="post" action="salvar.php">
<input type="hidden" id="id" name="id" value="<?php echo $id; ?>" />
<label for="nome">Nome:</label>
<input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" />
<input type="submit" value="Enviar" />
</form>


<?php require_once "footer.inc.php"; ?>