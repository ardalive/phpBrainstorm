<?php
// Дано  натуральное  число  N.
// Определить,  является  ли  оно  автоморфным.
// Автоморфное число  равно последним разрядам квадрата этого числа.
// Например,  5 и 25,  6 и 36,  25 и 625.

$n = 25;
$square = $n * $n;
$number = $n;
$length = 1;
$multiplier = 1;
$squareLastDigits = 0;

echo 'N= '.$n.'; N^2= '.$square.'<br>';

while ($number > 10){
    $number /= 10;
    $length++;
}

for($i = 0; $i < $length; $i++){
    $squareLastDigit = $square % 10;
    $squareLastDigits += $squareLastDigit * $multiplier;
    $multiplier *= 10;
    $square -= $squareLastDigit;
    $square /= 10;
}

echo $squareLastDigits === $n ? 'N is automorpic' : 'N is NOT an automorphic number';