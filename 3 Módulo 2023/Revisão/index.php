<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro Funcionário</title>
</head>
<body>

	<h1>Gerenciador de Funcionários</h1>

	<form action = "crud.php" method="post">
		Nome: <input type="text" name="nome"> <br> <br>
		Email: <input type="email" name="email"> <br> <br>
		CPF: <input type="text" name="cpf"> <br> <br>
		Telefone: <input type="tel" name="telefone"> <br> <br>
		<button>Cadastrar</button> &nbsp; 
		<button>Pesquisar</button> &nbsp;
		<button>Alterar</button> &nbsp; 
		<button>Excluir</button> 
	</form>

</body>
</html>
<?php 

	$con = mysqli_connect("localhost", "root", "");

	if (mysqli_connect_errno()) {
		echo "Erro ao conectar com a base de dados: ".

		mysqli_connect_error();
	}else{

		$sql = "CREATE DATABASE funcionarios";

			if (mysqli_query($con, $sql)) {
					echo "SUcesso";
					
			}else {
				echo "</br>Erro: ".mysqli_error($con);
			}

	}

?>
$sql1 = "CREATE TABLE Dados(nome CHAR(30),email CHAR(30), cpf CHAR(14), telefone CHAR(13))";