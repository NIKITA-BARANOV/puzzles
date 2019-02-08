<?php
	echo "Pls edit odd number!";
	$handle = fopen ("php://stdin","r");
	$num = fgets($handle);


	for($i = 1; $i <= $num; $i++){
		if(($i %  2) == 0){
			echo "";
		}else{
			echo width($num, $i);
			echo str_repeat("*", $i).PHP_EOL;	
		}

	}
	for($j = ($num -1); $j >= 1; $j--){
		if(($j %  2) == 0){
			echo "";
		}else{
			echo width($num, $j);
			echo str_repeat("*", $j).PHP_EOL;	
		}
		$f = (($j % 2) == 0) ? echo

	}
	function width($a,$b){
		return str_repeat (" ", ($a-$b/2));
	
	}
