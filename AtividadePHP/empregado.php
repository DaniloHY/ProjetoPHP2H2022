<?php 

	class Empregado{

		var $nome;
		var $sobrenome;
		var $cpf;
	
		function vencimento($salario){
			
			if ($salario <= 1302) {
			return ($salario * (7.5/100));

			}
			if ($salario >= 1302.01 && $salario <= 2571.29) {
			return ($salario * (9/100));

			}
			if ($salario >= 2571.30 && $salario <= 3856.94) {
			return ($salario * (12/100));

			}
			if ($salario >= 3856.95 && $salario <= 7507.49) {
			return ($salario * (14/100));
				
			} 
			else {
				echo "Meu sonho é ser você, ou talvez não";
			}
		}
		function ir($salario){

			if ($salario <= 1903.98) {
				return ($salario * (0/100));
			}
			
			if ($salario >= 1903.99 && $salario <= 2826.65) {
			return	($salario * (7.5/100));

			}
			if ($salario >= 2826.66 && $salario <= 3751.05) {
			return ($salario * (15/100));

			}
			if ($salario >= 3751.06 && $salario <= 4664.68) {
			return ($salario * (22.5/100));

			}

			else {
				return  ($salario * (27.5/100));

			}
		}

		function somaValor($salario){
			return ($salario - ($this->vencimento($salario) + $this->ir($salario)));
		}

		//Método construtor inicializa propriedades
		function Empregado__construct($nome, $sobrenome, $cpf){
			$this->nome = $nome;
			$this->sobrenome = $sobrenome;
			$this->cpf = $cpf;
		}
		//Método Destruidor
		/*function __destruct(){
        echo "<br> {$this->nome} Excluido... <br>";
    } */



	}

?>