<?php
session_start();
include('conexao.php');
 
if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: loginnao.php');
	exit();
}
 
$email = mysqli_real_escape_string($connect, $_POST['email']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);
 
$query = "SELECT Email FROM usuario WHERE Email = '{$email}' AND Senha = md5('{$senha}')";
 
$result = mysqli_query($connect, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['Email'] = $email;
	header('Location: escolhalogado.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: loginerro.php');
	exit();
}
?>