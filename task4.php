<?php
function num ($array){
	$new_array = array_unique($array);  //убираю все повторяющиеся числа
	asort($new_array);
	array_pop($new_array); //убирает последнее число в списке
	print_r(max($new_array));	//выводит максимальное число(так как убрали первое максимальное, выводит то, что было перед ним)					
}
num([1,2,3,4,5]);
?>