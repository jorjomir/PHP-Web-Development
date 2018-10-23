<?php
$nums=explode(" ", readline());
$condensed=[];
$i=0;
while (count($nums)>1) {
    $condensed[$i]=$nums[$i]+$nums[$i+1];
    $i++;
    if(count($condensed)==count($nums)-1) {
        $nums=$condensed;
        $i=0;
        unset($condensed);
    }
}
echo $nums[0];
//var_dump($condensed);
//var_dump($nums);