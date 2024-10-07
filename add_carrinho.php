<?php
include('sessao.php');
include('topo.php');
$id_prod = $_GET['id'];
$id_cli = $_SESSION['id'];
$con = mysqli_connect('localhost','root', '', 'comercio');
$sql = "insert into carrinho (id_cli, id_prod) values ($id_cli, $id_prod)";
$exe = mysqli_query($con, $sql);
if($exe){
	echo"Produto inserido no carrinho";
}
else{
	echo"erro";
}
echo "<a href='ver_produtos.php'>Comprar mais</a>";
$fecha = mysqli_close($con);
include"final.html";
?>