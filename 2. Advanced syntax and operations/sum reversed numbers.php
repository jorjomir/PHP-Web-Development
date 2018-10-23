<?php
$input=readline();
$items=explode(" ", $input);
$arr=[];
for ($i=0; $i<count($items); $i++) {
    $arr[]=strrev($items[$i]);
}
$sum=array_sum($arr);
echo $sum;