<?php

include 'conexao.php';

     $nome = $_POST['nome'];
     $cnpj = $_POST['cnpj'];
     $banco = $_POST['banco'];
     $agencia = $_POST['agencia'];
     $conta = $_POST['conta'];

$sql = "INSERT INTO `corretora`(`nome`,`cnpj`,`banco`,`agencia`,`conta`)
VALUES('$nome','$cnpj','$banco','$agencia','$conta')";



$inserir = mysqli_query($conexao, $sql);

header("Location: cadcorretora.php");
exit;
?>