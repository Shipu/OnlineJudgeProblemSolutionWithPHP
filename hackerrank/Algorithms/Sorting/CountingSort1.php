<?php
    $_fp = fopen("php://stdin", "r");
    fscanf($_fp,"%d", $n);
    $numbers = fgets($_fp);
    $numbers = explode(" ",$numbers);

    $number = array_count_values($numbers);

    for($i = 0; $i < 100; $i++) {
        echo (isset($number[$i]) ? $number[$i] : 0)." ";
    }

?>
