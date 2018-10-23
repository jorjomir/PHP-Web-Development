<?php
$num=readline();
$cmds=explode(", ", readline());
for ($i=0; $i<count($cmds); $i++) {
    if($cmds[$i]=="chop") {
        $num=$num/2;
    } elseif ($cmds[$i]=="dice") {
        $num=sqrt($num);
    } elseif ($cmds[$i]=="spice") {
        $num+=1;
    } elseif ($cmds[$i]=="bake") {
        $num*=3;
    } elseif($cmds[$i]=="fillet") {
        $num=$num*0.8;
    }
    echo $num . PHP_EOL;
}
