<?php 

	include_once 'produto.php';

	$produto1 = new Produto;
	$produto2 = new Produto;
	$produto3 = new Produto;

	$produto1->Codigo = 4001;
	$produto1->Descricao = 'CD - The Best of Eric Clapton';

	$produto2->Codigo = 4002;
	$produto2->Descricao = "CD - The Eagles Hotel California";

	$produto3->Codigo = 4003;
	$produto3->Descricao = "Teclado";
	$produto3->Preco = "100.00";
	$produto3->Porcentagem = 10;

	//Imprime informações de etiqueta
	$produto1->ImprimeEtiqueta();
	$produto2->ImprimeEtiqueta();
	$produto3->Desconto();

?>