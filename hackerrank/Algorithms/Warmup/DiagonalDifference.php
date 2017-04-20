<?php

    $handle = fopen ("php://stdin","r");
    fscanf($handle,"%d",$n);
    $a = array();
    $startSum = 0;
    $endSum = 0;
    $startIndex = 0;
    $endIndex = $n-1;
    for($a_i = 0; $a_i < $n; $a_i++) {
       $a_temp = fgets($handle);
       $a[] = explode(" ",$a_temp);
      array_walk($a[$a_i],'intval');
        $startSum += $a[$a_i][$startIndex];
        $endSum += $a[$a_i][$endIndex];
        $startIndex++;
        $endIndex--;
    }

    echo abs($startSum - $endSum);
?>
