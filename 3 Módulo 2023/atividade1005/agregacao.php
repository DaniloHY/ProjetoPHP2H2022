<?php 

	include_once 'itensPedidos.php';
	include_once 'produto.php';
	include_once 'pedido.php';

	$produto1 = new Produto;

	$produto1->DesPro = "Um produto";
	$produto1->QtdeProduto = 2;
	$produto1->ValProduto = 1.40;


	$itensPedidos = new ItensPedidos;

	$itensPedidos->AdicionaItem($produto1);

	echo $itensPedidos->CalculaTotal();
	echo "<br>"; //quebra de linha
	echo $itensPedidos->ExibeLista();


?>