<?php 

	include_once 'funcionario.php';

	$pedro = new Funcionario();
	$pedro-> setSalario(876);

	echo 'Salário: R$'.$pedro->getSalario();
 ?>