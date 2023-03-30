<?php 

	class Horista{

		var $precoHora;
		var $horasTrabalhadas;

		function vencimento(){
				
		}
		//Método construtor inicializa propriedades
		function Horista__construct($precoHora, $horasTrabalhadas){
			$this->precoHora = $precoHora;
			$this->horasTrabalhadas = $horasTrabalhadas;
		}
	}

?>