<?php
$input=readline();
$numbers=explode(" ", $input);
$cnt=1;
$longest=0;
$number=0;
for ($i=0; $i<count($numbers); $i++) {
    for ($j=$i+1; $j<count($numbers); $j++) {
        if($numbers[$i]==$numbers[$j]) {
            $cnt++;
        }
    }
    if($cnt>$longest) {
        $longest=$cnt;
        $number=$numbers[$i];
    }
    $cnt=0;
}
echo $number;