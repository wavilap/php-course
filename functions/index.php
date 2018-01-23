<?php

// function hello($name) {
// 	echo 'Hello ' . $name;
// 	echo '<br>';
// }

// hello('William');
// hello('Lucho');
$x = 100;

function sum($a, $b) {
	$x = $a + $b;
	return $x;
}

$c = sum(1, 2);
var_dump($c);

$d = sum(10, 22);
var_dump($d);
var_dump($x);