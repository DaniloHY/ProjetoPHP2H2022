<?php 

	include_once 'itensPedidos.php';
	include_once 'produto.php';
	include_once 'pedido.php';

	$Pedido = new Pedido;
	$Pedido->NroPedido = 2;
	$Pedido->DatPedido = '10-05-2023';

	$produto1 = new Produto;

	$produto1->DesPro = "Um produto";
	$produto1->QtdeProduto = 2;
	$produto1->ValProduto = 1.40;


?>