<?php


session_start();
if(!$_SESSION['Email']) {
	header('Location: login.php');
	exit();
}

?>