<?php
//8. Получить все четырехзначные целые числа, в записи которых нет одинаковых цифр.

for($n = 1000; $n <= 9999; $n++){
    $array = array();
    $number = $n;
    $doubles = 0;

    for($k = 0; $k < 4; $k++){
        $array[$k] = $number % 10;
        $number -= $array[$k];
        $number /= 10;
    }

    for($i = 0; $i < 4; $i++){
        for($j = 0; $j < 4; $j++){
            if($i !== $j){
                if($array[$i] === $array[$j]) $doubles++;
            }
        }
    }
    if($doubles === 0) echo $n.'<br>';
}

