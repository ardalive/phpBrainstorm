<?php
//Определить  количество  цифр,  меньших  5,  используемых  при  записи натурального числа N.
$number = 1312390;
$threshold = 5;
$counter = 0;

while($number > 0){
    $ones = $number % 10;
    $number -= $ones;
    $number /= 10;
    if($ones < $threshold) $counter++;
}

echo $counter;