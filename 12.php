<?php
$start  = 500;
$number = array_sum(range(1, $start - 1));

for ($index = $start; $index; $index++) {
	$number   += $index;
	$divisors = [];

	for ($divisor = 1; $divisor <= $number / 2; $divisor++) {
		array_append_unique($divisors, $divisor);

		for ($product = $number / $divisor; is_int($product); $product /= $divisor) {
			array_append_unique($divisors, $product);

			if (count($divisors) >= 500) {
				die("$number\n");
			}
		}
	}
}

function array_append_unique(&$array, $value) {
	if (!in_array($value, $array)) {
		$array[] = $value;
	}
}
