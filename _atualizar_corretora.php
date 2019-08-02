<?php

include 'conexao.php';

 $id = $_POST['id'];
// $nomeCorretora = $_POST['nome_corretora'];
// $corretora = $_POST['corretora'];
// //$emolumentoAcao = $_POST['emolumentoacao'];
// //$liquidacaoAcao = $_POST['liquidacaoacao'];
// $emolumentoOpcao = $_POST['emolumentoopcao'];
// $liquidacaoOpcao = $_POST['liquidacaoopcao'];
// $taxaRegistro = $_POST['taxaregistro'];


$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$banco = $_POST['banco'];
$agencia = $_POST['agencia'];
$conta = $_POST['conta'];


ECHO $sql = "UPDATE `corretora` SET `nome`='$nome',`cnpj`='$cnpj',`banco`=$banco,`agencia`=$agencia,`conta`=$conta WHERE corretora_id = $id";

$atualizar = mysqli_query($conexao, $sql);

header("Location: cadcorretora.php");
exit;
?>

