<?php 

//merubah dari array menjadi splFixedArray
$array = [1	=>	10,	2 => 100, 3	=> 1000, 4 => 10000];	
$splArray =	SplFixedArray::fromArray($array);	
$splArray2 = SplFixedArray::fromArray($array, false);	
print_r($splArray);	
// print_r($splArray2);