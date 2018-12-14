<?php
$limit = 1000;
$sum   = 0;

for ($i = 3; $i < $limit; $i += 3) {
	$sum += $i;
}

for ($i = 5; $i < 1000; $i += 5) {
	$sum += $i;
}

print "$sum\n";

print array_sum(range(3, 1000 - 1, 3)) + array_sum(range(5, 1000 - 1, 5)) . "\n";
