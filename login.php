<?php
session_start();
include('topo.php');
$login = $_POST['login'];
$senha = $_POST['senha'];
$conexao = mysqli_connect
('localhost','root','','comercio');
$sql = "select * from usuarios where
login like '$login' and senha like '$senha'";
$executar = mysqli_query($conexao, $sql);
$res = mysqli_fetch_array($executar);
if($res['nome']!=Null){
    //echo "Logado com sucesso!";
	$_SESSION['nome'] = $res['nome'];
	$_SESSION['id'] = $res['id'];
	$_SESSION['adm'] = $res['adm'];
	header('location:inicial.php');
}
else{
    echo "Login e/ou senha incorretos!
	<a href='login.html'>Tentar Novamente</a>";
}
$fechar = mysqli_close($conexao);
include('final.html');

?>