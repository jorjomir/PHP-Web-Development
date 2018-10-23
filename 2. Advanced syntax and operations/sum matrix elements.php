<?php
$input=explode(", ", readline());
$sum=0;
for ($i=0; $i<$input[0]; $i++) {
    $read=explode(", ", readline());
    $sum+=array_sum($read);
}
echo $input[0] . PHP_EOL . $input[1] . PHP_EOL . $sum;