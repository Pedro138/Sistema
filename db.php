<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysqli_connect($host,$user,$pass,$banco);

if ($conexao){
	echo "<p> </p>";

} else {
	echo"<p>nao foi possivel conectar.</p>";
}
?>