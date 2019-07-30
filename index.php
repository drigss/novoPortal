<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Language" content="pt-br">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Login</title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Scrollbar Custom CSS -->

  <script src="https://kit.fontawesome.com/c9b1ff5ce0.js"></script>

  <script src="js/jquery.js"></script>
  <script src="js/script_jquery.js"></script>


</head>

<body>

  <!-- Page LOGIN -->

  <div class="boxLogin" id="login">
      <h3 style="text-align: center">
        <p>Login</p>
      </h3>
    <hr>
        <form action="login.php" method="post" style="margin: 20px 20px 0px 20px">
         <div class="form-group">
               <div class="form-row" style="padding-top: 15px">

              <input type="text" class="form-control" name="usuario" placeholder="Usuário" autocomplete="off">
           </div>
           <div class="form-row" style="padding-top: 15px">
          <input type="text" class="form-control" name="senha" placeholder="Senha" autocomplete="off">
        </div>
      </div>

      <div class="form-row" style="margin-top: 40px">
        <div class="col" style="text-align: center">
          <button type="submit" class="btn btn-default submit">Entrar</button>

          <a href="#" role="button" class="btn btn-link">Recuperar senha!</a>
        </div>
      </div>
      <hr>
      <div class="form-row">
        <div class="col" style="text-align: center">
          Novo no site?
          <a class="btn btn-link" id="linkCadLogin">Criar uma conta</a>
        </div>
      </div>

      <center>
        <h3>
          <p><i class="fas fa-dragon"></i>&nbsp;Drigs Dias!</p>
        </h3>
        <p>©2019 Todos os direitos reservados.</p>
      </center>
  </div>
</form>

  <!-- Page CRIAR CONTA -->

  <div class="boxLogin" id="cadlogin">
    <h3 style="text-align: center">
      <p>Criar Conta</p>
    </h3>
    <hr>
    <form action="_inserir_corretora.php" method="post" style="margin: 20px 20px 0px 20px">
      <div class="form-group">
        <div class="form-row" style="padding-top: 15px">
          
          <input type="text" class="form-control" name="usuario" placeholder="Usuário" autocomplete="off">
        </div>
        <div class="form-row" style="padding-top: 15px">
          <input type="text" class="form-control" name="email" placeholder="Email" autocomplete="off">
        </div>
        <div class="form-row" style="padding-top: 15px">
          <input type="text" class="form-control" name="senha" placeholder="Senha" autocomplete="off">
        </div>
      </div>

      <div class="form-row" style="margin-top: 40px">
        <div class="col" style="text-align: center">
          <a class="btn btn-default submit" href="index.html">Criar</a>
        </div>
        <div class="col" style="text-align: center">
          <a href="index.html" role="button" class="btn btn-link">Recuperar senha!</a>
        </div>
      </div>
      <hr>
      <div class="form-row">
        <div class="col" style="text-align: center">
          Já é um membro?
          <a class="btn btn-link" id="pageLogin">Entrar</a>
        </div>
      </div>




      <center>
        <h3>
          <p><i class="fas fa-dragon"></i>&nbsp;Drigs Dias!</p>
        </h3>
        <p>©2019 Todos os direitos reservados.</p>
      </center>
  </div>



  </form>

</body>

</html>