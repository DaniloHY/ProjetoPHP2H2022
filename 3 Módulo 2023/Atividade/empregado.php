<?php 

	class Empregado{

		var $nome;
		var $sobrenome;
		var $cpf;
		var $salario;
	
		function vencimento($salario){
			
			if ($salario <= 1302) {
				return ($salario - $salario * (7.5/100));

			}
			elseif ($salario >= 1302.01 && $salario <= 2571.29) {
				return ($salario - $salario * (9/100));

			}
			elseif ($salario >= 2571.30 && $salario <= 3856.94) {
				return ($salario - $salario * (12/100));

			}
			elseif ($salario >= 3856.95 && $salario <= 7507.49) {
				return ($salario - $salario * (14/100));

			}
		}

		//Método construtor inicializa propriedades
		function Empregado__construct($nome, $sobrenome, $cpf){
			$this->nome = $nome;
			$this->sobrenome = $sobrenome;
			$this->cpf = $cpf;
			$this->salario = $salario;
		}

 



	}

?>