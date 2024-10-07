<?php
include('topo.php');
?>
    <form action="login.php" method="post">
        <label>Login</label>
        <input type="text" name="login">
        <label>Senha</label>
        <input type="password" name="senha">
        <input type="submit">
    </form>
<?php
include('final.html');
?>