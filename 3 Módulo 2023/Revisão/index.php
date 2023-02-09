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