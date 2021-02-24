<?php
// Выяснить, есть ли в записи натурального числа N две одинаковые цифры.

$n = 74123489;
$arrayN = array();
$index = 0;
$doubles = false;

while($n > 0){
    $arrayN[$index] = $n % 10;
    $n -= $arrayN[$index];
    $n /= 10;
    $index++;
}

$length = $index;
$index = 0;

while($doubles === false && $index < $length){
    $j = 0;
    while($j < $length){
        if($index !== $j) {
            if ($arrayN[$index] === $arrayN[$j]) {
                $doubles = true;
            }
        }
        $j++;
    }
    $index++;
}

echo $doubles ? 'true' : 'false';