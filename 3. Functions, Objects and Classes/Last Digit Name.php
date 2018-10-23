<?php
class lastDigit{
    public function func($digit) {
        if($digit=="1") {
            echo "one";
        } elseif($digit=="2") {
            echo "two";
        } elseif($digit=="3") {
            echo "three";
        } elseif($digit=="4") {
            echo "four";
        } elseif($digit=="5") {
            echo "five";
        } elseif($digit=="6") {
            echo "six";
        } elseif($digit=="7") {
            echo "seven";
        } elseif($digit=="8") {
            echo "eight";
        } elseif($digit=="9") {
            echo "nine";
        } elseif($digit=="0") {
            echo "zero";
        }
    }
}
$input=readline();
$a=new lastDigit();
$a->func($input[strlen($input)-1]);