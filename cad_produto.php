<?php
include("sessao.php");
include('topo.php');
$con = mysqli_connect('localhost', 'root', '', 'comercio');
$sql = "select * from categorias order by nome asc";
$exe = mysqli_query($con, $sql);
?>
    <form action="inserir.php" method="post" enctype="multipart/form-data" >
		Escolher arquivo: <input name="arquivo" type="file"><br>
        Nome do produto <input type="text" name="nome"><br>
        Quantidade <input type="text" name="quant"><br>
        Valor <input type="text" name="valor"><br>
        Categoria <select name="cat">
		<?php
		while($res = mysqli_fetch_array($exe)){
			$id = $res['id'];
			$nome = $res['nome'];
			echo "<option value='$id'>$nome</option>";
		}
		?>
		</select><br>
        <input type="submit">
    </form>

<?php
include('final.html');
?>