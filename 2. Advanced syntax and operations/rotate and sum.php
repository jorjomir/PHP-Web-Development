<?php
$input=explode(" ", readline());
$k=readline();
$sum=[];
for ($i=0; $i<$k; $i++) {
    $last=array_pop($input);
    array_unshift($input, $last);
    for ($j=0; $j<count($input); $j++) {
        $sum[$j]+=$input[$j];
    }
}
echo implode(" ", $sum);