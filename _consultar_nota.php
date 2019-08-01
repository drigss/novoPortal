<?php

      include 'conexao.php';

      $sql = "SELECT * FROM `corretora`";
      $busca = mysqli_query($conexao, $sql);

      while ($array = mysqli_fetch_array($busca)) {
        $corretora_id = $array['corretora_id'];
        $nome = $array['nome'];
        $cnpj = $array['cnpj'];
        $banco = $array['banco'];
        $agencia = $array['agencia'];
        $conta = $array['conta'];

        ?>
        <tr class="tableTr">

          <td><?php echo $nome ?></td>
          <td><?php echo $cnpj ?></td>
          <td><?php echo $banco ?></td>
          <td><?php echo $agencia ?></td>
          <td><?php echo $conta ?></td>

          <td style="text-align: right"><a class="btn btn-warning btn-sm" style="color:#fff" href="editar_corretora.php?id=<?php echo $corretora_id ?>" role="button" style="text-align: right">!</a></td>
          <td style="text-align: left"> <a class="btn btn-danger btn-sm" style="color:#fff" href="_deletar_codcorretora.php?id=<?php echo $corretora_id ?>" role="button">X</a></td>

        </tr>



?>