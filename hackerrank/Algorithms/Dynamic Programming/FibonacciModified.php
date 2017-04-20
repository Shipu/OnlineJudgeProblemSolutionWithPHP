<?php
    function fibonacci($t0, $t1, $n) {
        if($n==1 || $n==0) {
            return $t0;
        } elseif($n==2) {
            return $t1;
        }
    
        return bcadd( fibonacci($t0, $t1, $n-2) , bcpow(fibonacci($t0, $t1, $n-1),2) );
    }
    
    $_fp = fopen("php://stdin", "r");
    fscanf($_fp, '%u %u %u', $t0, $t1, $n);

    echo fibonacci($t0, $t1, $n);

    fclose($_fp);
?>
