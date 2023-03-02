<?php 

	class Conta
	{
		var $agencia;
		var $codigo;
		var $dataDeCriacao;
		var $titular;
		var $senha;
		var $saldo;
		var $cancelada;

		//Diminui o saldo em quantia
		function retirar($quantia){
			if ($quantia > 0) {
				$this->saldo -= $quantia;
			}
		}

		//Aumenta o saldo em quantia
		function depositar($quantia){
			if ($quantia > 0) {
				$this->saldo += $quantia;
			}
		}

		//Retorna o saldo atual
		function obterSaldo(){
			return $this->saldo;
		}
	}

?>