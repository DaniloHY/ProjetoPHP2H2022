<?php 
	
	class Produto 
	{
		var $Codigo;
		var $Descricao;
		var $Preco;
		var $Quantidade;

		function imprimeEtiqueta(){
			print 'Codigo: '. $this->Codigo. "<br>";
			print 'Descrição: '. $this->Descricao. "<br>";
		}


	}

?>