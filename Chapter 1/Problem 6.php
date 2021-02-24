<?php
// Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7.

$needle = [0,2,3,7];

for($i = 1000; $i <= 9999; $i++){
    $number = $i;
    $occurrences = 0;
    for($j = 0; $j < 4; $j++){
        $digit = $number % 10;
        $number -= $digit;
        $number /= 10;
        if($digit === $needle[0] || $digit === $needle[1] || $digit === $needle[2] || $digit === $needle[3]){
            $occurrences++;
        }
    }

    if($occurrences === 4) echo $i.'<br>';
}