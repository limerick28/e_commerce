<?php
include("sessao.php");
include('topo.php');
$nome = $_POST['nome'];
$quant = $_POST['quant'];
$valor = $_POST['valor'];
$cat = $_POST['cat'];
$uploaddir = 'c:/xampp/htdocs/e_commerce/imagens/';
$nomeArq = basename($_FILES['arquivo']['name']);
$uploadfile = $uploaddir.$nomeArq;
$conexao = mysqli_connect
('localhost','root','','comercio');
$sql = "insert into produtos (nome, quant, valor, categoria, foto)
values ('$nome', $quant, $valor, '$cat', '$nomeArq')";
echo $sql;
$executar = mysqli_query($conexao, $sql);

if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)) {
	if($executar){
		echo "cadastrado";
	}
	else{
		echo "erro ao cadastrar";
	}
} else {
    echo "Erro ao enviar arquivo!";
}
$fechar = mysqli_close($conexao);
include('final.html');

?>