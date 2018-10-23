<?php
$n=readline();
$people=[];
for ($i=0; $i<$n; $i++) {
    $input=explode(" ", readline());
    $people[$input[0]]=$input[1];
}
$max=0;
$key1="";
foreach ($people as $key => $value) {
    if($max<$value) {
        $max=$value;
        $key1=$key;
    }
}
echo $key1 . " " . $max;