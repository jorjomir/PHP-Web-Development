<?php
$num=readline();

function checkIfIsHigher($num) {
    $sum=0;
    for ($i=0; $i<strlen($num); $i++) {
        $sum+=$num[$i];
    }
    $sum=$sum/strlen($num);
    if($sum>5) {
        return true;
    } else {
        return false;
    }
}
function add9 ($num) {
    $num.="9";
    return $num;
}
while(true) {
    $check=checkIfIsHigher($num);
    if($check==true) {
        break;
    } else {
      $num=add9($num);
    }
}
echo $num;