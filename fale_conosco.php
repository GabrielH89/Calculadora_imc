<?php
  require_once('classes/user.php');
  $user = new User;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculadora IMC</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="header">
  <a class="navbar-brand" href="">Calculadora IMC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sobre.php">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lista_usuarios.php">Lista usuários</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="fale_conosco.php">Fale conosco</a>
      </li>
    </ul>
  </div>
</nav>

  <form method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="text" class="form-control" id="fale_conosco_nome" name="mensagem_nome" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Fone</label>
      <input type="text" class="form-control" id="fale_conosco_fone" name="mensagem_contato" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">E-mail</label>
    <input type="email" class="form-control" id="fale_conosco_email" name="mensagem_email" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Endereço</label>
    <input type="text" class="form-control" id="fale_conosco_endereco" name="mensagem_endereco" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Data de nascimento</label>
      <input type="text" class="form-control" id="fale_conosco_nascimento" name="mensagem_data_nascimento" required>
    </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea2">Campo de mensagen</label>
    <textarea class="form-control rounded-0" id="fale_conosco_mensagem" rows="3" placeholder="Críticas, sugestões..." name="mensagem" required></textarea>
  </div>
  </div>
  <input type="submit" name="enviar_mensagem" value="Enviar sugestão">
</form>

  <?php
      if(isset($_POST['enviar_mensagem'])){
        $nome = $_POST['mensagem_nome'];
        $contato = $_POST['mensagem_contato'];
        $email = $_POST['mensagem_email'];
        $endereco = $_POST['mensagem_endereco'];
        $data = $_POST['mensagem_data_nascimento'];
        $mensagem = $_POST['mensagem'];
          if($user->enviarSugestao($nome,$contato,$email,$endereco,$data,$mensagem)){

          }else{
            echo '<br/><div class="alert alert-success" role="alert">
                    Dados enviados com sucesso!
                  </div>';
          }
      }
  ?>

  <footer class="page-footer">
    <p>All rights reserved by Gabriel Henrique:</p>
  </footer>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <script src="js/functions.js"></script>
  <script src="js/jquery.mask.js"></script>
</body>
</html>




