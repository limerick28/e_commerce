<?php
session_start();
if(isset($_SESSION['nome'])){
	$nome = $_SESSION['nome'];
	$adm = $_SESSION['adm'];
	if($nome == null){
		die("Usuário não autenticado!<a href='acessar.php'>Logar</a>");
	}
}
?>