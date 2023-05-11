<?php 

	class Produto{
		private $DesPro;
		private $QtdeProduto;
		private $ValProduto;
	
			function ImprimeEtiqueta()
		{
			print 'Descrição: ' . $this->DesPro . "<br>";
		}
	}


?>