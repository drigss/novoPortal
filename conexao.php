<?php
    $servername = "servidorbanco.mysql.database.azure.com";
    $database = "corretagem";
    $username = "drigs@servidorbanco";
    $password = "123456789aA";
    
  //  $conexao = mysqli_connect($servername, $username, $password, $database);


    $conexao=mysqli_init();
 //   mysqli_ssl_set($conexao, NULL, NULL, BaltimoreCyberTrustRoot.crt.pem, NULL, NULL);
    mysqli_real_connect($conexao, "servidorbanco.mysql.database.azure.com", "drigs@servidorbanco", $password, $database, 3306);

?>