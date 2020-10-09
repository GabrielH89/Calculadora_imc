<?php
    $pdo = new PDO("mysql:host=localhost;dbname=projeto_imc",'root','');
    $sql = $pdo->prepare("SELECT * FROM `usuario`");
    $sql->execute();
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
      <li class="nav-item active">
        <a class="nav-link" href="lista_usuarios.php">Lista usuários</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="fale_conosco.php">Fale conosco</a>
      </li>
    </ul>
  </div>
</nav>

<table class="table table-striped" id="users-feminino">
  <p class="h2">Usuários do sexo feminino</p>
  <input type="submit" name="hide-users-feminino" value="Ocultar usuários">
  <input type="submit" name="show-users-feminino" value="Mustrar usuários">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Contato</th>
      <th scope="col">Imc</th>
      <th scope="col">Situação</th>
    </tr>
  </thead>
  <tbody>
      <?php
          $selectAluno = $pdo->prepare("SELECT `id`, `nome`, `contato`, `sexo`, `imc`, `situacao` FROM`usuario` WHERE `sexo`='Feminino' ORDER BY `nome`");
          $selectAluno->execute();
          $aluno = $selectAluno->fetchAll();
          foreach($aluno as $key=>$value){
      ?>
    <tr>
      <td><?php echo $value['nome'];?></td>
      <td><?php echo $value['contato'];?></td>
      <td><?php echo $value['imc'];?></td>
      <td><?php echo $value['situacao'];?></td>
    </tr>
    <?php }?>
  </tbody>
</table>


<table class="table table-striped" id="users-masculino">
  <p class="h2">Usuários do sexo masculino</p>
  <input type="submit" name="hide-users-masculino" value="Ocultar usuários">
  <input type="submit" name="show-users-masculino" value="Mustrar usuários">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Contato</th>
      <th scope="col">Imc</th>
      <th scope="col">Situação</th>
    </tr>
  </thead>
  <tbody>
      <?php
          $selectAluno = $pdo->prepare("SELECT `id`, `nome`, `contato`, `sexo`, `imc`, `situacao` FROM`usuario` WHERE `sexo`='Masculino' ORDER BY `nome`");
          $selectAluno->execute();
          $aluno = $selectAluno->fetchAll();
          foreach($aluno as $key=>$value){
      ?>
    <tr>
      <td><?php echo $value['nome'];?></td>
      <td><?php echo $value['contato'];?></td>
      <td><?php echo $value['imc'];?></td>
      <td><?php echo $value['situacao'];?></td>
    </tr>
    <?php }?>
  </tbody>
</table>


  <footer class="page-footer">
    <p>All rights reserved by Gabriel Henrique:</p>
  </footer>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <script src="js/functions.js"></script>
</body>
</html>



