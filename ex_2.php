<?php
function sum($a){
	if ($a > 0){
		return "Число положительно ";
	}elseif ($a < 0){
		return "Число отрицательно";
	}else{
		return "Zero!!!";
	}
}

echo sum(o);
