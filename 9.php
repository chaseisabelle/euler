<?php
$limit = 1000;

foreach (range(1, $limit) as $a) {
	foreach (range($a + 1, $limit) as $b) {
		foreach (range($limit - $a - $b, $limit) as $c) {
			if ($a + $b + $c === $limit && pow($a, 2) + pow($b, 2) === pow($c, 2)) {
				die($a * $b * $c . "\n");
			}
		}
	}
}
