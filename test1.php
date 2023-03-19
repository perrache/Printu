<?php

ini_set('memory_limit', '1024M');

require_once 'hashOrder.php';

$unique = [];

echo "Starting test ....".PHP_EOL;
$start = microtime(true);

for ($i=1; $i<=9999999; $i++) {
    $result = hashOrder($i);

    if (!preg_match("/^[0-9]{7}$/", $result)) {
        throw new InvalidArgumentException("Result {$result} does not match regex");
    }

    if (!empty($unique[$result])) {
        throw new InvalidArgumentException("Colision detected for key {$i}:{$unique[$result]} and result {$result}");
    }

    $unique[$result] = $i;
}

$time_elapsed_secs = microtime(true) - $start;

if ($time_elapsed_secs > 60) {
    throw new InvalidArgumentException("Could not finish test in 60 seconds");
}

echo "Finished in {$time_elapsed_secs}";