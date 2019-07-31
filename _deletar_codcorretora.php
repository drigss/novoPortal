<?php
    include 'conexao.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM `corretora` WHERE corretora_id = $id";
    $deletar = mysqli_query($conexao, $sql);

    header("Location: cadcorretora.php");
    exit;

?>