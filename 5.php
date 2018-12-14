<?php
$limit = 20;

for ($number = $limit; $number; $number++) {
	foreach (range(1, $limit) as $divider) {
		if (!is_int($number / $divider)) {
			break;
		}
	}

	if ($divider === $limit) {
		break;
	}
}

print "$number\n";
