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
