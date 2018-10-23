<?php
$input=readline();
$arr=[];
$alphabet=range('a','z');
for ($i=0; $i<strlen($input); $i++) {
    //$arr[]=$input[$i];
    $num=array_search($input[$i], $alphabet);
    echo $input[$i] . " -> " . $num . "\n";
}