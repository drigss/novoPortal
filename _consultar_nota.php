<?php

include 'conexao.php';

$sql = "SELECT * FROM `nota`";
$busca = mysqli_query($conexao, $sql);

while ($array = mysqli_fetch_array($busca)) {
  $nota_id = $array['nota_id'];
  $numero = $array['numero'];
  $data = $array['data'];
  $compra = $array['compra'];
  $venda = $array['venda'];
  $liquidacao = $array['liquidacao'];
  $registro = $array['registro'];
  $emolumento = $array['emolumento'];
  $ir = $array['ir'];
  $total = $array['total'];

};
  ?>