<?php

function findUniqueString(string $s): int
{
    $chars = 'abcdefghijklmnopqrstuvwxyz';

//    kontrola danych wejściowych
    if (strlen($s) < 1 || strlen($s) > 100000) return -1;
    for ($i=0; $i<strlen($s); $i++) {
        if (strpos($chars, substr($s, $i, 1)) === false) return -1;
    }

//    tabela $countChars zawiera zliczoną ilość wystąpień każdego znaku
    $countChars = [];
    for ($i=0; $i<strlen($s); $i++) {
        if (isset($countChars[substr($s, $i, 1)])) $countChars[substr($s, $i, 1)]++;
        else $countChars[substr($s, $i, 1)] = 1;
    }

//    szukanie najmniejszej pozycji wśród unikalnych znaków
    $minPos = strlen($s);
    $isUnique = false;
    foreach ($countChars as $key => $val) {
        if ($val == 1) {
            $isUnique = true;
            if (strpos($s, $key) < $minPos) $minPos = strpos($s, $key);
        }
    }

    return $isUnique ? $minPos + 1 : -1;
}
