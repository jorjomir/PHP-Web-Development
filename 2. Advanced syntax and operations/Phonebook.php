<?php

$end=0;
$contacts=[];
$output="";
while($end==0) {
    $input=explode(" ", readline());
    if($input[0]=="END") {
        $end=1;
    }
    if($input[0]=="A") {
        $contacts[$input[1]]=$input[2];
    }
    if($input[0]=="S") {
        if(array_key_exists($input[1], $contacts)) {
            $output.=$input[1] . " -> " . $contacts[$input[1]] . PHP_EOL;
        }
        else {
            $output.="Contact " . $input[1] . " does not exist." . PHP_EOL;
        }
    }
    if($input[0]=="ListAll") {
        ksort($contacts);
        foreach ($contacts as $key => $value) {
            $output.= $key . " -> " . $value . PHP_EOL;
        }
    }
}
echo $output;