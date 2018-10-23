<?php
class Person {
public $output="";
    public function func($arr) {
        $ppl=[];
        for ($i=0; $i<count($arr); $i++) {
            $name=$arr[$i][0];
            $years=$arr[$i][1];
            if($years>30) {
                $ppl[$name]=$years;
            }
        }

        ksort($ppl);
        foreach ($ppl as $key => $value) {
            echo $key . " - " . $value . PHP_EOL;
        }
    }
}
$n=readline();
$a=new Person();
$arr=[];
for ($i=0; $i<$n; $i++) {
    $input=explode(" ", readline());
    $arr[]=$input;
}
$a->func($arr);