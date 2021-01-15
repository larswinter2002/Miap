<?php
$a = 20;
if((odd($a))){
	echo ("Число ".$a." чётное <br>");
}
else{
	echo ("Число ".$a." нечётное <br>");
}

$b=11;
$c=24;
$d=63;
echo ("Сумма введенных чисел (".$a.",".$b.",".$c.",".$d."): ".sum($a,$b,$c,$d));

function odd($n){
	if($n%2 == 0){
		return true;
	}
	else{
		return false;
	}
}
function sum(... $args){
	$acc = 0;
    foreach ($args as $n) {
        $acc += $n;
    }
    return $acc;
}
