<?php
    $_fp = fopen("php://stdin", "r");

    $arr_temp = fgets($_fp);
    $numbers = explode(" ", $arr_temp);

    sort($numbers);

    $duplicate = $numbers;
    array_pop($duplicate);
    array_shift($numbers);

    echo array_sum($duplicate)." ".array_sum($numbers)."\n";

?>
