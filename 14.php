<?php
$s = 0;
$n = 0;

for ($i = pow(10, 6); $i > 1; $i--) {
	$c = 1;

	for ($j = $i; $j > 1; $j = $j % 2 ? 3 * $j + 1 : $j / 2) {
		$c++;
	}

	if ($c > $s) {
		$s = $c;
		$n = $i;
	}
}

print "$n\n";
