<?php 
	function corAleatoria() {

	    $letras = '0123456789ABCDEF';
	    $cor = '#';
	    for($i = 0; $i < 6; $i++) {
	        $index = rand(0,15);
	        $cor .= $letras[$index];
	    }
	    
	    return $cor;
	}
?>