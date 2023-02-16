<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['Alterar'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$cpf = mysqli_escape_string($connection,$_POST['cpf']);
		$telefone = mysqli_escape_string($connection,$_POST['telefone']);
		$email = mysqli_escape_string($connection,$_POST['email']);
		$codFuncio = mysqli_escape_string($connection,$_POST['codFuncio']);

		$sql = "UPDATE Funcionarios SET nomeFuncio = '$nome', CPFFuncio = '$cpf', TelefoneFuncio = '$telefone', emailCli = '$email' WHERE codFuncio = '$codFuncio'";

?>