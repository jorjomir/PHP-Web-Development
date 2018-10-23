<?php
$text=readline();
$search=readline();
$letter=$search[0];
$place=$search[2];
$foundletter=0;
$final=0;
for ($i=0; $i<strlen($text); $i++) {
    if($text[$i]===$letter) {
        $foundletter+=1;
        if($foundletter==$place) {
            $final=$i;
            break;
        }
    }
}
if($final!=0) {
    echo $final;
}
else {
    echo 'Find the letter yourself!';
}