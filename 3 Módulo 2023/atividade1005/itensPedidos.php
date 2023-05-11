<?php 

	class ItensPedidos{
		private $QtdeItem;
		private $ValUnidade;

		function Adicionaltem(Produto $item){
			$this->itens[] = $item;
		}
	}

?>