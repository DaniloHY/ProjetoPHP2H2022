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

	$ItensPedidos = new ItensPedidos;
	$ItensPedidos->QtdeItem = 2;
	$ItensPedidos->ValUnidade = 3;

	$ValUnidade = $item->QtdeProduto * $item->ValProduto;

	
echo("A {$Fernanda->nome} é Horista <br>");
echo "O sálario bruto da {$Fernanda->nome} é {$Fernanda->somaValor($Fernanda->precoHora*$Fernanda->horasTrabalhadas)} por mês. <br> <br>";
echo("O {$Danilo->nome} é Comissionado <br>");
echo "O sálario bruto do {$Danilo->nome} é {$Danilo->somaValor($Danilo->totalVenda*$Danilo->taxaComissao)} por mês. <br><br> ";
echo("A {$Joyce->nome} é Assalariado <br>");
echo "O sálario bruto da {$Joyce->nome} é {$Joyce->somaValor($Joyce->salario)} por mês. <br> <br>";


?>