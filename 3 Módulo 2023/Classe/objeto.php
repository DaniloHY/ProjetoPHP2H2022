<?php 

	# Carrega as classes

	include_once 'pessoa.php';
	include_once 'conta.php';

	#Criação do objeto Carlos

	$carlos = new Pessoa;
	$carlos->Codigo = 10;
	$carlos->Nome = "Carlos da Silva";
	$carlos->Altura = 1.85;
	$carlos->Idade = 25;
	$carlos->Nascimento = '10/04/1976';
	$carlos->Escolaridade = "Ensino Médio";

	echo "Manipulando o objeto $carlos->Nome : \n";
	echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} \n";

	$carlos->Formar('Técnico em Eletrecidade');
	echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} \n";
	echo "{$carlos->Nome} possui {$carlos->Idade} anos \n";

	$carlos->Envelhecer(1);
	echo "{$carlos->Nome} possui {$carlos->Idade} anos \n";

?>