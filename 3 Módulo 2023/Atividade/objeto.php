<?php 

	include_once 'assalariado.php';
	include_once 'comissionado.php';
	include_once 'horista.php';
	include_once 'empregado.php';


	#Criação do objeto empregado
	$empregado = new Empregado;
	$empregado->Nome = "Roberto";
	$empregado->Sobrenome = "Santana";
	$empregado->CPF = 15978932938;


	#Criação do objeto horista
	$horista = new Horista;
	$horista->precoHora = 20;
	$horista->horasTrabalhadas = 10;


	#Criação do objeto comissionado
	$comissionado = new Comissionado;
	$comissionado->totalVenda = 5;
	$comissionado->taxaComissao = 0.05;


	#Criação do objeto assalariado
	$assalariado = new Assalariado;
	$assalariado->salario = 1320.00;




	$horista->vencimento();
	echo "O recebido é R\$ {$horista->salariob} <br>";
?>