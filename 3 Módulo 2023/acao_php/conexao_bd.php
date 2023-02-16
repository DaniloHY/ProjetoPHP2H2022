<?php 

	$server  = 'localhost';
	$user = 'etecia';
	$password = '123456';
	$nome_db = 'dbFuncionarios';

	$connection = mysqli_connect($server, $user, $password, $nome_db);

	mysqli_set_charset($connection, "utf8");

	if (mysqli_connect_error()) {
		echo "Erro ao conectar com o banco de dados". mysql_connect_error();
	}

?>