
<?php

function search($e,$k, $n){
	$appart = $e * $k;
	
	if($n > $appart){
		echo "Вам нужно идти в другой подъезд!". PHP_EOL;
	}elseif($n % $appart){
		echo ceil($n % $appart / $k). PHP_EOL;
	}else{
		echo $e . PHP_EOL;
	}	

}

search(9,12,13);
