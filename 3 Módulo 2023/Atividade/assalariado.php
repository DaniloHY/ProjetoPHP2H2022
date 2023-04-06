<?php 

	class Assalariado extends Empregado{
		var $salariom


		//Método construtor (sobrescrito) agora, também inicializa a variável $salario
		function __construct($nome, $sobrenome, $cpf, $salariom)
		{
		//Chamando o método construtor da classe mãe
			parent::__construct($nome, $sobrenome, $cpf,$salariom);
			$this->salariom = $salariom;
		}
		function vencimento($salario){
			if ($this -> )

		}
	}

?>