<?php
include('sessao.php');
include('topo.php');
$id = $_GET['id'];
$conexao = mysqli_connect('localhost','root','','comercio');
$sql = "SELECT * FROM produtos WHERE id=$id";
$executar = mysqli_query($conexao, $sql);
$res = mysqli_fetch_array($executar);
$fechar = mysqli_close($conexao);
?>
    <form action="atualizar.php" method="post">
        Id produto <input type="text" name="id"
        value="<?php echo $res['id'];?>" readonly><br>
        Nome do produto <input type="text" name="nome"
        value="<?php echo $res['nome'];?>"><br>
        Quantidade <input type="text" name="quant"
        value="<?php echo $res['quant'];?>"><br>
        Valor <input type="text" name="valor"
        value="<?php echo $res['valor'];?>"><br>
        <input type="submit">
    </form>
	<?php
include('final.html');?>