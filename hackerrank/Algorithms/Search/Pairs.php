<?php
    /* Head ends here */
    function pairs( $a,$k) {
    /* $a contains array of numbers and $k is the difference*/
        $map = [];
        foreach($a as $elements) {
            $map[$elements] = 1;
        }
        $count = 0;
        foreach($a as $elements) {
            if(isset($map[$elements+$k])) {
                $count++;
            }
        }
        return $count;
    }
    /* Tail starts here */
    $__fp = fopen("php://stdin", "r");

    fscanf($__fp, "%d %d", $_a_cnt, $_k);
    $_a = trim(fgets($__fp));

    $_a = explode(' ',$_a);
    $res = pairs($_a,$_k);
    echo "$res\n";

?>
