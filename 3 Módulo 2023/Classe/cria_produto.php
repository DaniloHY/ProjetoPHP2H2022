<?php 

	include_once 'produto.php';

	$valor = new Produto();

	$valor->Codigo = 4011;

	$valor->Descricao = "CD The Best of Eric Clapton";

	echo $valor->Codigo. " - ". $valor->Descricao;

?>