<?php
    require_once("config.php");

?>
    <form action="listar.php" method="get" accept-charset="utf-8">

    Nome Produto <input  type="text" name="descricao"><br>
    Quantidade <input  type="text" name="quantidade"><br>
    Valor <input  type="text" name="valor"><br>
    <input type="submit" name="cadastrar"><br>

    <a href="listar.php"
</form>
<style>
        body{
            background: linear-gradient(to right, rgb(178, 24, 184),rgb(84, 104, 235));
            color: white;
            text-align: center;
        }
</style>