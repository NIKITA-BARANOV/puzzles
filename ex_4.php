<?php

function result($a){


	do{
	$b = 0;
	$array = str_split($a);

		for($i = 0; $i < count($array); $i++){
			$b = $b + $array[$i];	
			$a = $b;
		}	

	}
	while($b >=10);

	return $b;	

	
}

echo result(138);

