<?php

    $handle = fopen ("php://stdin","r");
    fscanf($handle,"%d",$n);
    $height_temp = fgets($handle);
    $height = explode(" ",$height_temp);
    array_walk($height,'intval');

    echo array_count_values($height)[max($height)];

?>
