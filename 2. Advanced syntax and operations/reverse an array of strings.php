<?php
$input=readline();
$arr=[];
for ($i=strlen($input)-1; $i>=0; $i-=2) {
    $arr[]=$input[$i];
}
for ($i=0; $i<count($arr); $i++) {
    echo $arr[$i] . ' ';
}