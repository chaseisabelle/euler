<?php
$numbers = range(1, 100);

$sum_of_squares = array_sum(array_map(function ($number) {
	return pow($number, 2);
}, $numbers));

$square_of_sum = pow(array_sum($numbers), 2);

$difference = $square_of_sum - $sum_of_squares;

print "$difference\n";
