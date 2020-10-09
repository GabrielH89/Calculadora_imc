<?php
	class User {
		public function cadastrarUsuario($nome,$contato,$sexo,$imc,$situacao) {
			$pdo = new PDO('mysql:host=localhost;dbname=projeto_imc','root','');
			$sql = $pdo->prepare("INSERT INTO `usuario` VALUES(NULL,?,?,?,?,?)");
			$sql->execute(array($nome,$contato,$sexo,$imc,$situacao));
		}

		public function enviarSugestao($nome,$contato,$email,$endereco,$data,$mensagem) {
			$pdo = new PDO('mysql:host=localhost;dbname=projeto_imc','root','');
			$sql = $pdo->prepare("INSERT INTO `fale_conosco` VALUES(NULL,?,?,?,?,?,?)");
			$sql->execute(array($nome,$contato,$email,$endereco,$data,$mensagem));
		}
	}
?>