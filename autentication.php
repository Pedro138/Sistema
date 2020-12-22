<?php
require "db.php";
?>

<html>

<head>
<title>doc</title>
</head>
<body>

<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'");
$row = mysqli_num_rows($sql);
if($row > 0) {
	session_start();
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['senha'] = $_POST['senha'];
	echo "<center>Logado com sucesso!</center>";
} else {
	echo "<center>Nome de usuario ou senha invalidos!</center>";
}
?>

</body>
</html>