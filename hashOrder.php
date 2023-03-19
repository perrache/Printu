<?php

function hashOrder(int $number): string
{
    if ($number < 1 || $number > 9999999) return '0000000';

    $off = '2836507';

    $result = bcadd($number, $off);
    $result = bcmod($result, '9999999', 0);
    $result = str_pad($result, 7, '0', STR_PAD_LEFT);

    $result = strtr($result, '1234567890', '4916380257');
    $result = strtr($result, '1234567890', '3461509278');

    return $result;
}