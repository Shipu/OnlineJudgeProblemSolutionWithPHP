<?php

    $handle = fopen ("php://stdin","r");
    fscanf($handle,"%d",$n);

    $space = $n-1;
    for($i = 0; $i < $n;$i++) {
        for($j=0; $j < $space;$j++) {
            echo ' ';
        }
        for($k = 0; $k < ($n-$space); $k++) {
            echo '#';
        }
        if($i !=$n-1) {
            echo "\n";
        }
        $space--;
    }

?>
