<?php
/* Conecta na Base de Dados */
require_once("config.php");

// Conectando
$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
$conn->set_charset('utf8');
if($conn->connect_errno > 0){
	die("Não foi possivel conectar ao banco [".$conn->connect_error."]");
}