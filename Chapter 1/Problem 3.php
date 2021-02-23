<?php
$n = 1234556;
$isIncreasingSequence = false;

// Выяснить, образуют ли цифры данного натурального числа N возрастающую оследовательность.

// Возвращает истину только если последовательность строго возрастающая.
// Если в последовательности есть плато, возвращает ложь

if($n > 11){
    $lastDigit = $n % 10;
    $n -= $lastDigit;
    $n /= 10;
    $notIncreaseCounter = 0;

    while($n > 0){
        $currentDigit = $n % 10;
        $n -= $currentDigit;
        $n /= 10;
        if($lastDigit <= $currentDigit) $notIncreaseCounter++;
        $lastDigit = $currentDigit;
    }
    if($notIncreaseCounter < 1) $isIncreasingSequence = true;
}

echo $isIncreasingSequence === true ? 'true' : 'false';