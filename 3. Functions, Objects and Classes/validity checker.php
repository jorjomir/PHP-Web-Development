<?php
function distance($x1, $y1, $x2, $y2) {
    $distH=$x1-$x2;
    $distY=$y1-$y2;
    return sqrt(($distH**2)+($distY**2));
}
$input=explode(", ", readline());
$x1=$input[0];
$y1=$input[1];
$x2=$input[2];
$y2=$input[3];
if(is_numeric(distance($x1,$y1,0,0))) {
    echo "{" . $x1 . ", " . $y1 . "} to {0, 0} is valid" . PHP_EOL;
} else {
    echo "{" . $x1 . ", " . $y1 . "} to {0, 0} is invalid" . PHP_EOL;
}
if(is_numeric(distance($x2,$y2,0,0))) {
    echo "{" . $x2 . ", " . $y2 . "} to {0, 0} is valid" . PHP_EOL;
} else {
    echo "{" . $x2 . ", " . $y2 . "} to {0, 0} is invalid" . PHP_EOL;
}
if(is_numeric(distance($x1,$y1,$x2,$y2))) {
    echo "{" . $x1 . ", " . $y1 . "} to " . "{" . $x2 . ", " . $y2 . "} is valid" . PHP_EOL;
} else {
    echo "{" . $x1 . ", " . $y1 . "} to " . "{" . $x2 . ", " . $y2 . "} is invalid" . PHP_EOL;
}
echo distance($x1, $y1, $x2, $y2);