<?php

	$a = 1; 								// первое число в пирамиде.
	$b = 9;									// последнее числов пирамиде.

function pyramid ($i, $limit){
    echo str_repeat($i, $i).'<br>';		// str_repeat возвращает повторяющуюся строку
    if($i < $limit){
        recursion (++$i, $limit);
    }
}

pyramid(1, 9);
?>