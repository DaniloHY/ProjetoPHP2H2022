<?php 



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
</head>
<body>

	<tr>
		<td><?php echo $dados['NomeCliente']; ?></td>
		<td><?php echo $dados['SobrenomeCliente']; ?></td>
		<td><?php echo $dados['EmailCliente']; ?></td>
		<td><?php echo $dados['CPFCliente']; ?></td>
		<td><?php echo $dados['SexoCLiente']; ?></td>
		<td><?php echo $dados['UsuarioCliente']; ?></td>
		<td><?php echo $dados['SenhaCliente']; ?></td>
	</tr>

	<form method="POST" action="bem_vindo.php">
		<label>Nome:</label>
		<input type="text" name="nome"> <br> <br>
		<label>Sobrenome:</label>
		<input type="text" name="sobrenome"> <br> <br>
		<label>E-Mail:</label>
		<input type="text" name="email"> <br> <br>
		<label>CPF:</label>
		<input type="text" name="cpf"> <br> <br>
		<label>Sexo:</label>
		<input type="text" name="sexo"> <br> <br>
		<label>Usuário:</label>
		<input type="text" name="usuario"> <br> <br>
		<label>Senha:</label>
		<input type="text" name="senha"> <br> <br>

		<button name="Cadastrar">Cadastrar</button>
		<button>Entrar</button>
	</form>
</body>
</html>