<?php
$solution = 0;

foreach (range(100, 999) as $a) {
	foreach (range(100, 999) as $b) {
		$product = $a * $b;

		if ($product > $solution && strval($product) === strrev(strval($product))) {
			$solution = $product;
		}
	}
}

print "$solution\n";
