<?php
include("sessao.php");
include('topo.php');
$conexao = mysqli_connect('localhost','root','','comercio');
$sql = "SELECT * FROM produtos";
$executar = mysqli_query($conexao, $sql);
echo "<table border='1'><tr><th>Id</th><th>Imagem</th><th>Nome</th>
<th>Quantidade</th><th>Valor</th><th>Apagar</th>
<th>Atualizar</th></tr>";
while($resultado = mysqli_fetch_array($executar)){
    $id = $resultado['id'];
    $nome = $resultado['nome'];
    $quant = $resultado['quant'];
    $valor = $resultado['valor'];
    $foto = $resultado['foto'];
    echo "<tr><td>$id</td><td><img src='imagens/$foto' width='50px'></td><td>$nome</td><td>$quant</td>
    <td>$valor</td><td><a href='del_prod.php?id=$id'>Remover</a></td>
    <td><a href='upd_prod.php?id=$id'>Atualizar</a></td></tr>";
}
echo "</table>";
$fechar = mysqli_close($conexao);

include('final.html');

?>