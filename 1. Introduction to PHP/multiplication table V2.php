<?php
$num=readline();
$times=readline();
if($times>10) {
    echo $num . " X " . $times . " = " . $num*$times;
} else {
    for($i=$times; $i<=10; $i++) {
        echo $num . " X " . $i . " = " . $i*$num . "\n";
    }
}