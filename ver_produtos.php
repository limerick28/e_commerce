<?php
include('sessao.php');
include('topo.php');
$con = mysqli_connect('localhost','root', '', 'comercio');
$sql = "select * from produtos order by nome asc";
$exe = mysqli_query($con, $sql);
while($res = mysqli_fetch_array($exe)){
	$id = $res['id'];
	$nome = $res['nome'];
	$valor = $res['valor'];
	$foto = $res['foto'];
	echo "<div><img width='50px' src='imagens/$foto'>Produto: $nome Preço: $valor <a href='add_carrinho.php?id=$id'>Comprar</a></div>";
}
$fecha = mysqli_close($con);
include('final.html');

?>