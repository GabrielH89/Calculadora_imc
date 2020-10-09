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
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sobre.php">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lista_usuarios.php">Lista usuários</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="fale_conosco.php">Fale conosco</a>
      </li>
    </ul>
  </div>
</nav>

	<form method="POST">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Nome</label>
	    <input type="text" class="form-control" id="nome" name="nome" required>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Contato</label>
	    <input type="text" class="form-control" id="contato" name="contato" required>
	  </div>
		<div class="form-group">
	    <label for="exampleFormControlSelect1">Informe seu sexo</label>
	    <select class="form-control" id="selectSexo" name="sexo" required data-error="Informe seu sexo">
	      <option value="">Sexo</option>
	      <option value="1">Feminino</option>
	      <option value="2">Masculino</option>
	    </select>
	  	</div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Massa</label>
	    <input type="text" class="form-control" id="contato" name="massa" required>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Altura</label>
	    <input type="text" class="form-control" id="contato" name="altura" required>
	  </div>
	  <input type="submit" name="calcular" value="Calcular">
	</form>

	<?php
		$sexo = isset($_POST['sexo'])?$_POST['sexo']:0;
		switch($sexo){
			case 1:
				if(isset($_POST['calcular'])){
					$nome = $_POST['nome'];
					$contato = $_POST['contato'];
					$massa = $_POST['massa'];
					$altura = $_POST['altura'];
					$imc = $massa/($altura*$altura);
					if($imc<=18){
						if($user->cadastrarUsuario($nome,$contato,'Feminino',$imc,'Abaixo do peso')){

						}else{
							echo '<div class="alert alert-success" role="alert">
										Situação: Abaixo do peso <br/>	  	
										Seus dados foram enviados com sucesso 
								  </div>';
						}		
					}else if($imc>18 && $imc<=24){
						if($user->cadastrarUsuario($nome,$contato,'Feminino',$imc,'Peso normal')){

						}else{
							echo '<div class="alert alert-success" role="alert">
										Situação: Peso normal <br/>	  	
										Seus dados foram enviados com sucesso 
								  </div>';
						}		
					}else if($imc>24 && $imc<=29){
						if($user->cadastrarUsuario($nome,$contato,'Feminino',$imc,'Acima do peso')){

						}else{
							echo '<div class="alert alert-success" role="alert">
										Situação: Acima do peso <br/>	  	
										Seus dados foram enviados com sucesso 
								  </div>';
						}		
					}else{
						if($user->cadastrarUsuario($nome,$contato,'Feminino',$imc,'Obesidade')){

						}else{
							echo '<div class="alert alert-success" role="alert">
										Situação: Obesidade <br/>	  	
										Seus dados foram enviados com sucesso 
								  </div>';
						}		
					}

				}
				case 2:
					if(isset($_POST['calcular'])){
					$nome = $_POST['nome'];
					$contato = $_POST['contato'];
					$massa = $_POST['massa'];
					$altura = $_POST['altura'];
					$imc = $massa/($altura*$altura);
					if($imc<=18){
						if($user->cadastrarUsuario($nome,$contato,'Masculino',$imc,'Abaixo do peso')){

						}else{
							echo '<div class="alert alert-success" role="alert">
										Situação: Abaixo do peso <br/>	  	
										Seus dados foram enviados com sucesso 
								  </div>';
						}		
					}else if($imc>18 && $imc<=24){
						if($user->cadastrarUsuario($nome,$contato,'Masculino',$imc,'Peso normal')){

						}else{
							echo '<div class="alert alert-success" role="alert">
										Situação: Peso normal <br/>	  	
										Seus dados foram enviados com sucesso 
								  </div>';
						}		
					}else if($imc>24 && $imc<=29){
						if($user->cadastrarUsuario($nome,$contato,'Masculino',$imc,'Acima do peso')){

						}else{
							echo '<div class="alert alert-success" role="alert">
										Situação: Acima do peso <br/>	  	
										Seus dados foram enviados com sucesso 
								  </div>';
						}		
					}else{
						if($user->cadastrarUsuario($nome,$contato,'Masculino',$imc,'Obesidade')){

						}else{
							echo '<div class="alert alert-success" role="alert">
										Situação: Obesidade <br/>	  	
										Seus dados foram enviados com sucesso 
								  </div>';
						}		
					}

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




