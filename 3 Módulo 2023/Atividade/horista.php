<?php 

	class Horista extends Empregado{

		var $precoHora;
		var $horasTrabalhadas;

		//Método construtor (sobrescrito) agora, também inicializa a variável $precoHora $horasTrabalhadas
		function __construct($nome, $sobrenome, $cpf, $precoHora, $horasTrabalhadas)
		{
		//Chamando o método construtor da classe mãe
			parent::__construct($nome, $sobrenome, $cpf, $precoHora, $horasTrabalhadas);
			$this->precoHora = $precoHora;
			$this->horasTrabalhadas = $horasTrabalhadas;
}
		function vencimento($precoHora * $horasTrabalhadas){

				$salariol = $precoHora * $horasTrabalhadas;
		}
		Empregado->vencimento($salario);
	}

?>