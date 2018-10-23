<?php
$input=readline();
$numbers=explode(" ", $input);
$start=0;
$count=0;
$max=0;
for ($i=0; $i<count($numbers)-1; $i++) {
    if($numbers[$i]==$numbers[$i+1]-1) {
        $count++;
        if($count>$max) {
            $start=$i-$count;
            $max=$count;
        }
    } else {
        $count=0;
    }
}
for ($i=$start+1; $i<=$start+$max+1; $i++) {
    echo $numbers[$i] . " ";
}