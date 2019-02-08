<?php

function result($array){
	$b = 0;

	for($i = 0; $i < count($array); $i++){
		$b = $b + $array[$i];
	}
	return $b;
}

echo result([1.45, 3.46, 5.67]) + "/n";


