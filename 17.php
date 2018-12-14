<?php
$l = 1000;
$s = 0;

for ($i = 1; $i <= $l; $i++) {
	$s += strlen(str_replace(' ', '', f($i)));	
}

print "$s\n";

function f($n) {
	if ($n < 10) {
		$a = [
			'',
			'one',
			'two',
			'three',
			'four',
			'five',
			'six',
			'seven',
			'eight',
			'nine'
		];

		return $a[$n];
	}

	if ($n < 20) {
		$a = [
			'ten',
			'eleven',
			'twelve',
			'thirteen',
			'fourteen',
			'fifteen',
			'sixteen',
			'seventeen',
			'eighteen',
			'nineteen'
		];

		return $a[round(($n / 10 - 1) * 10)];
	}

	if ($n < 100) {
		$t = floor($n / 10);
		$o = round(($n / 10 - $t) * 10);

		$a = [
			'',
			'ten',
			'twenty',
			'thirty',
			'fourty',
			'fifty',
			'sixty',
			'seventy',
			'eighty',
			'ninety'
		];

		$s = $a[$t];

		if ($o) {
			$s .= ' ' . f($o);
		}

		return $s;
	}

	if ($n < 1000) {
		$h = floor($n / 100);
		$t = round(($n / 100 - $h) * 100);

		$s = f($h) . ' hundred';

		if ($t) {
			$s .= ' and ' . f($t);
		}

		return $s;
	}

	if ($n === 1000) {
		return 'one thousand';
	}

	die("you gone messed up\n");
}
