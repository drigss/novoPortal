<?php

include 'conexao.php';

     $corretora = $_POST['corretora'];
     $nNota = $_POST['nNota'];
     $dtNota = $_POST['dtNota'];
     $tCompra = $_POST['tCompra'];
     $tVenda = $_POST['tVenda'];
     $txLiquidacao = $_POST['txLiquidacao'];
     $txRegistro = $_POST['txRegistro'];
     $txEmolumento = $_POST['txEmolumento'];
     $ir = $_POST['ir'];
     $tLiquido = $_POST['tLiquido'];

$sql = "INSERT INTO `nota`(`corretora`,`numero`,`data`,`compra`,`venda`,`liquidacao`,`registro`,`emolumento`,`ir`,`total`)
VALUES('$corretora','$nNota','$dtNota','$tCompra','$tVenda','$txLiquidacao','$txRegistro','$txEmolumento','$ir','$tLiquido')";



$inserir = mysqli_query($conexao, $sql);

header("Location: cadnota.php");
exit;
?>