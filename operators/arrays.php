<?php

// $array1 = [
// 	0 => 'a',
// 	1 => 'b',
// 	2 => 'c'
// ];

// $array2 = [
// 	2 => 'd',
// 	4 => 'e'
// ];

// $result = $array1 + $array2;
// var_dump($result);

$array1 = [
	1 => 'b',
	2 => 'c',
	0 => 'a'
];

$array2 = ['a', 'b', 'c'];

var_dump($array1 === $array2);