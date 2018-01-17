<?php
function killMonkeys($monkeys, $m){
    $k = $m;
    while (count($monkeys)){
        $k = $k - 1;
        $monkey = array_shift($monkeys);
        if ($k) {
           $monkeys[] = $monkey;
        } else {
            echo "<font color='red'>" . $monkey . "</font>号出列！<br/>";
            $k = $m;
        }

    }
    echo $monkey . "号是最后一个";
}
$monkeys = range(0, 20);
unset($monkeys['0']);
$m = 6;
killMonkeys($monkeys, $m);
?>
