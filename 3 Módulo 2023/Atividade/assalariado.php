<?php 

	class Assalariado extends Empregado{

		var $salario;

		//Método construtor (sobrescrito) agora, também inicializa a variável $salario
		function __construct($nome, $sobrenome, $cpf, $salario)
		{
		//Chamando o método construtor da classe mãe
			parent::__construct($nome, $sobrenome, $cpf,$salario);
			$this->salario = $salario;
		}
		function vencimento($recebido){
			

		}
	}

?>