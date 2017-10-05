<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

fscanf($_fp,"%d", $n);

$a = explode(" ", trim(fgets($_fp)));

$map = [];
foreach($a as $element) {
    if(!isset($map[$element])) {
        $map[$element] = 0;
    }
    $map[$element]++;
}
fscanf($_fp,"%d", $m);

$b = explode(" ", trim(fgets($_fp)));

foreach($b as $element) {
    if(!isset($map[$element])) {
        $map[$element] = -1;
    } else {
        $map[$element]--;
    }
}

$result = [];
foreach($map as $key => $value) {
    if($value < 0) {
        $result[] = $key;
    }
}

sort($result);

echo implode(' ', $result);

?>
