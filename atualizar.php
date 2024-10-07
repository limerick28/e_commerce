<?php
include('sessao.php');
include('topo.php');
$idusuarios = $_GET['idusuarios'];
$username = $_GET['username'];
$fotouser = $_GET['fotouser'];
$conexao = mysqli_connect
('localhost','root','','indieconnekt');
$sql = "update usuarios set username='$username', fotouser=$fotouser,
 where idusuarios=$idusuarios";
$executar = mysqli_query($conexao, $sql);
if($executar){
    echo "Atualizado com sucesso!";
}
else{
    echo "Erro";
}
$fechar = mysqli_close($conexao);

?>