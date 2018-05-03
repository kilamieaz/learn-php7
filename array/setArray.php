<?php

$odd[] = 1;	
$odd[] = 3;	
$odd[] = 5;	
$odd[] = 7;	
$odd[] = 9;	
$prime = [];	
$prime[] = 2;	
$prime[] = 3;	
$prime[] = 5;
if (in_array(2, $prime)) {	
	echo "2 is a prime";	
}	
$union = array_merge($prime, $odd);	//ditambahkan
$intersection =	array_intersect($prime,	$odd);	//jika value $prime sama dengan $odd, di tampilkan 
$compliment	= array_diff($prime,	$odd);	//jika value $prime tidak sama dengan $odd, di tampilkan

print_r($compliment);