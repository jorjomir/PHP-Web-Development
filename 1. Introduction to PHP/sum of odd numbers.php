<?php
$input=readline();
$sum=0;
for ($i=1; $i<$input*2; $i+=2) {
    $sum+=$i;
    echo $i . "\n";
}
echo "Sum: " . $sum;