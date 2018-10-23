<?php
$n=readline();
$k=readline();
$seq=[1];
for ($i=1; $i<$n; $i++) {
$result=0;
for ($j=$i-1; $j>=0 && $j>=$i-$k; $j--) {
$result=$result+$seq[$j];
}
$seq[$i]=$result;
}
for ($i=0; $i<count($seq); $i++) {
echo $seq[$i] . " ";
}