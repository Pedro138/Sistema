<?php
require "db.php";

$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql = "INSERT INTO usuarios(nome, email, senha) VALUES('$nome', '$email', '$senha')";
$consulta = mysqli_query($conexao,$sql);

if ($consulta){
	echo "<p>Dados inseridos</p>";
}else {
	echo "<p>Erro</p>";
}