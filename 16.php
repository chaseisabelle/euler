<?php
const MAX = 400;

//int vet[MAX]={0};

$vet = [1];
$y = 1000;

for ($i = 1; $i < MAX; $i++) {
	$vet[$i] = 1;
}

while ($y > 0) {
  $v = 0;

  for ($i = 0; $i < MAX; $i++) {
    $x = $vet[$i] * 2 + $v;

    $v = 0;

    if ($x > 9) {
      $f = $x % 10;
      $v = $x / 10;      
    } else {
	$f = $x;
    }

    $vet[$i] = $f;
  }

  $y = $y - 1;
}

$sum = 0;
for ($i = MAX - 1; $i >= 0; $i--) {
    $sum = $sum + $vet[$i];
}

print "$sum\n";

