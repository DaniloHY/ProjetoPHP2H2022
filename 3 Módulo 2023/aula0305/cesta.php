<?php 

	class Cesta{


		private $itens;

		#adiciona itens na cesta
		function Adicionaltem(Produto $item){
			$this->itens[] = $item;
		}

		function ExibeLista (){
			foreach ($this->itens as $item) {
				$item->ImprimeEtiqueta();
			}
		}

		function CalculaTotal (){

			$total = 0;
			foreach ($this->itens as $item){

				$total += $item->Preco;
			}
			return 'Total: R$ ' . $total . '<br>'; 
		}


	}

?>