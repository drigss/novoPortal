<?php

include 'conexao.php';

     $nNota = $_POST['nNota'];
     $dtNota = $_POST['dtNota'];
     $tCompra = $_POST['tCompra'];
     $tVenda = $_POST['tVenda'];
     $txLiquidacao = $_POST['txLiquidacao'];
     $txRegistro = $_POST['txRegistro'];
     $txEmolumento = $_POST['txEmolumento'];
     $ir = $_POST['ir'];
     $tLiquido = $_POST['tLiquido'];

$sql = "INSERT INTO `nota`(`numero`,`data`,`compra`,`venda`,`liquidacao`,`registro`,`emolumento`,`ir`,`total`)
VALUES('$nNota','$dtNota','$tCompra','$tVenda','$txLiquidacao','$txRegistro','$txEmolumento','$ir','$tLiquido')";



$inserir = mysqli_query($conexao, $sql);

header("Location: cadnota.html");
exit;
?>