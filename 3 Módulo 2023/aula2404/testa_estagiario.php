<?php 

	include 'funcionario.php';
	include 'estagiario.php';

	$pedrinho = new Estagiario();

	$pedrinho->setSalario(248);

	echo 'O salário do pedrinho é R$: '.$pedrinho->getSalario() . "<br>";

?>