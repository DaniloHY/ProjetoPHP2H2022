<?php 

	class Empregado{

		var $nome;
		var $sobrenome;
		var $cpf;
	
		function vencimento($recebido){

			


		}
		//Método construtor inicializa propriedades
		function Empregado__construct($nome, $sobrenome, $cpf){
			$this->nome = $nome;
			$this->sobrenome = $sobrenome;
			$this->cpf = $cpf;
		}



	}

?>