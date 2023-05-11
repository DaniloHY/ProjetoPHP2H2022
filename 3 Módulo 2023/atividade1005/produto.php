<?php 

	class Produto{
		var $DesPro;
		var $QtdeProduto;
		var $ValProduto;
	
			function ImprimeEtiqueta()
		{
			print 'Descrição: ' . $this->DesPro . "<br>";
			print 'Quantidade: ' . $this->QtdeProduto . "<br>";
			print 'Valor: ' . $this->ValProduto . "<br>";
		}
	}


?>