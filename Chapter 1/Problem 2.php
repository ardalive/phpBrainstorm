<?php
$n = 3;
$counter = 0;

for($i = 1111; $i <= 9999; $i++){
    $sum = 0;
    $number = $i;
    for($j = 0; $j < 4; $j ++){
        $reminder = $number % 10;
        $sum += $reminder;
        $number /= 10;
    }
    if($sum === $n) $counter++;
}

echo $counter;