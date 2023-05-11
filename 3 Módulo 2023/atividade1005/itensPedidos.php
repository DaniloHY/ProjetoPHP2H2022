<?php 

	class ItensPedidos{
		var $QtdeItem;
		var $ValUnidade;
		var $itens;

		function Adicionaltem(Produto $item){
			$this->itens[] = $item;
		}
		function ExibeLista (){
			foreach ($this->itens as $item) {
				$item->ImprimeEtiqueta();
			}
		}
		function ValorUnidade(){
			$ValUnidade = 0;
			foreach ($this->itens as $item){

			
			}
			return 'Total: R$ ' . $ValUnidade . '<br>'; 
		}

	}

?>