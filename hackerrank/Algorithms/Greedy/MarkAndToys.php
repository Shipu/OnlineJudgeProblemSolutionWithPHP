<?php
    $_fp = fopen("php://stdin", "r");

    fscanf($_fp, "%d %d",$n, $k);
    $ar_temp = fgets($_fp);

    $prices = explode(' ', $ar_temp);

    sort($prices);
    $sum   = 0;
    $count = 0;

    foreach($prices as $price) {
        $sum += $price;
        if($sum > $k) {
            break;
        }
        $count++;
    }

    echo $count;

?>
