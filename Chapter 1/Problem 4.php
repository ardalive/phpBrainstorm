<?php
// Выводит числа, цифры которых возрастают или убывают, могут содержать плато (например 1223 - 22 плато).
for($i = 1000; $i <= 9999; $i++){
    if(($i % 2) === 0){
        $sorted = sortNumber($i);
        $reversed = doReverse($sorted);
        if($i === doImplode($sorted) || $i === doImplode($reversed)){
            if($sorted[0] !== $sorted[3])
                echo $i.'<br>';
        }
    }
}

function doExplode($number){
    $array = array();

    for($i = 0; $i < 4; $i++){
        $array[$i] = $number % 10;
        $number -= $array[$i];
        $number /= 10;
    }

    return $array;
}

function doImplode($array){
    $result = 0;
    $multiplier = 1000;

    for($i = 0; $i < 4; $i++){
        $result += $array[$i] * $multiplier;
        $multiplier /= 10;
    }

    return $result;
}

function doReverse($array){
    $reversed = array();

    for($i = 0; $i < 4; $i ++){
        $reversed[$i] = $array[3 - $i];
    }

    return $reversed;
}

function sortNumber($number){
    $array = doExplode($number);
    $swaps = 1;

    while($swaps > 0){
        $swaps = 0;
        for($i = 0; $i < 3; $i++){
            if($array[$i] > $array[$i + 1]){
                $buffer = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $buffer;
                $swaps++;
            }
        }
    }

    return $array;
}