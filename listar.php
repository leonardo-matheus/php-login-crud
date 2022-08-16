<?php
    require_once("config.php");

    if (isset($_GET['cadastrar'])) {
       if (!empty($_GET['descricao']) || !empty($_GET['quantidade']) || !empty($_GET['valor'])) {
        $descricao=$_GET['descricao'];
        $quantidade=$_GET['quantidade'];
        $valor=$_GET['valor'];

        $sql="INSERT INTO produtos(descricao, quantidade, valor) VALUES ('$descricao','$quantidade','$valor')";
        $enviar_db=mysqli_query($conn, $sql);
       }
    }