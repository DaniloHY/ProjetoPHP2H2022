<?php 

	class Comissionado extends Empregado{
		var $totalVenda;
		var $taxaComissao;

		//Método construtor (sobrescrito) agora, também inicializa a variável $totalVenda e $taxaComissao
		function __construct($nome, $sobrenome, $cpf, $totalVenda, $taxaComissao)
		{
		//Chamando o método construtor da classe mãe
			parent::__construct($nome, $sobrenome, $cpf, $totalVenda, $taxaComissao);
			$this->totalVenda = $totalVenda;
			$this->taxaComissao = $taxaComissao;
		}

		function vencimento($recebido){
			
		}
	}

?>