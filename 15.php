<?php
$w = 20;
$h = 20;
$x = 0;
$y = $h;

print f($w, $h, $x, $y) . "\n";

function f($w, $h, $x, $y) {
	$r = $x === $w;
	$b = $y === 0;

	if ($r && $b) {
		return 1;
	}

	if ($r) {
		return f($w, $h, $x, $y - 1);
	}

	if ($b) {
		return f($w, $h, $x + 1, $y);
	}

	return f($w, $h, $x + 1, $y) + f($w, $h, $x, $y - 1);
}
