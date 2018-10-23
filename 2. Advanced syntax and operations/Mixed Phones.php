<?php
$end=0;
$splitted=[];
$phones=[];
while($end==0) {
    $input=readline();
    if($input=="Over") {
        $end=1;
        break;
    }
    $splitted=preg_split('/( : |:)/m', $input);
    if(is_numeric($input[0])) {
        $phones[$splitted[1]]=$splitted[0];
    } else {
        $phones[$splitted[0]]=$splitted[1];
    }
}
ksort($phones);
foreach ($phones as $key => $value) {
    echo $key . " -> " . $value . PHP_EOL;
}
//var_dump($phones);