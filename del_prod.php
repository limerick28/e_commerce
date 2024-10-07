<?php
include('sessao.php');
include('topo.php');
$id = $_GET['id'];
$conexao = mysqli_connect
('localhost','root','','comercio');
$sql = "select foto from produtos where id=$id";
$exe = mysqli_query($conexao,$sql);
$res = mysqli_fetch_array($exe);
$foto = $res['foto'];
$sql = "DELETE FROM produtos WHERE id=$id";
$executar = mysqli_query($conexao,$sql);
if($executar == 1){
	//echo $foto;
	unlink("imagens/$foto");
    header('location:listar.php');
}
else{
    echo "Erro!";
}
$fechar = mysqli_close($conexao);
include('final.html');
?>
