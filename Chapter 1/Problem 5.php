<?php
// По заданному натуральному числу N получить число M,
// записанное цифрами исходного числа, взятыми в обратном порядке.

$n = 42342007;
$m = 0;

$reversedNArray = array();
$index = 0;

while($n > 0){
    $lastDigit = $n % 10;
    $n -= $lastDigit;
    $n /= 10;
    $reversedNArray[$index] = $lastDigit;
    $index++;
}

$length = $index;
$index = 0;

$multiplier = multiplier($length);

for($i = 0; $i < $length; $i++){
    $m += $reversedNArray[$i] * $multiplier;
    $multiplier /= 10;
}

echo $m;

function multiplier($k){
    return $k > 1 ? (10 * multiplier($k - 1)) : 1;
}