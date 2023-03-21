<?php 

	class ContaCorrente extends Conta{
		var $limite;

		//Método construtoe (sobrescrito) agora, também inicializa a variável $Limite
		function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $limite)
		{
			//Chamando o método construtor da classe-pai
			parent:: __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo);
			$this->limite = $limite;
		}
	}

?>