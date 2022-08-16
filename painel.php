<?php
    require_once("config.php");
    $sql = "SELECT * FROM produtos ORDER BY id DESC";
    $enviar= mysqli_query($conn, $sql);
    $resultado = mysqli_fetch_all($cadastrar, MYSQLI_ASSOC);
?>
<table border="1">
    <tr>
        <td>Descrição</td>
        <td>Quantidade</td>
        <td>Preço</td>
    </tr>

    <?php
    foreach ($resultado as $produto) {
        $descricao=$produto['descricao'];
        $quantidade=$produto['quantidade'];
        $preco=$produto['valor'];
    }
    ?>

    }

    <tr>
        <td><?=$descricao?></td>
        <td><?=$quantidade?></td>
        <td><?=$preco?></td>
    </tr>
    <tr>
        <td>Ralf</td>
        <td>26</td>
        <td>Designer</td>
    </tr>
</table>
