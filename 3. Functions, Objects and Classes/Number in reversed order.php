<?php
class Reverse{
    public function func($number) {
        $arr=str_split($number);
        $rdy=[];
        for ($i=count($arr)-1; $i>=0; $i--) {
            $rdy[]=$arr[$i];
        }
        echo implode("", $rdy);
    }
}
$input=readline();
$a=new Reverse();
$a->func($input);