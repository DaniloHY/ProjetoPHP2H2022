<?php 

	class Pessoa {

		var $codigo;
		var $nome;
		var $altura;
		var $idade;
		var $nascimento;
		var $escolaridade;
		var $salario;
		

		//Aumenta a altura em centímetros
		function crescer($centimetros){
			if ($centimetros > 0) {
				$this->altura += $centimetros;
			}
		}

		//Altera a escolaridade para a titulação
		function formar($titulacao){
			$this->escolaridade = $titulacao;
		}

		//Aumenta a idade em anos
		function envelhecer($anos){
			if ($anos > 0) {
				$this->idade += $anos;
			}
		}














	}

?>