<?php 

	class Comissionado{
		var $totalVenda;
		var $taxaComissao;

		function vencimento($recebido){
			
		}
		//Método construtor inicializa propriedades
		function Comissionado__construct($totalVenda, $taxaComissao){
			$this->totalVenda = $totalVenda;
			$this->taxaComissao = $taxaComissao;
		}
	}

?>