<?php
$limit = 4 * pow(10, 6);

print "limit at $limit\n";

$a    = 1;
$b    = 2;
$sum  = 2;
$term = 0;

for ($term = $a + $b; $b <= $limit; $term = $a + $b) {
	if (is_int($term / 2)) {
		$sum += $term;
	}

	$a = $b;
	$b = $term;
}

print "sum is $sum\n";
?>
