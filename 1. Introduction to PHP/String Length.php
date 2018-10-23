<?php
$text=readline();
if(strlen($text)>20) {
    for($i=0; $i<20; $i++) {
        echo $text[$i];
    }
}
else {
    for ($i = 0; $i < 20; $i++) {
        if($i<=strlen($text)-1) {
            echo $text[$i];
        }
        else {
            echo "*";
        }
    }
}