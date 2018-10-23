<?php
$input=explode(", ", readline());
$rows=$input[0];
$columns=$input[1];
$matrix=[];
$testSum=0;
$biggestSum=0;
$resultStartAt=[];
for ($i=0; $i<$rows; $i++) {
    $matrix[$i]=explode(", ", readline());
}
for ($i = 0; $i < count($matrix)- 1; $i++) {
                for ($j = 0; $j < count($matrix[$i])- 1; $j++) {
                    $testSum = $matrix[$i][$j] + $matrix[$i][$j + 1] + $matrix[$i + 1][$j] + $matrix[$i + 1][$j + 1];

                    if ($testSum > $biggestSum)
                    {
                        $biggestSum = $testSum;
                        $resultStartAt[0] = $i;
                        $resultStartAt[1] = $j;
                    }
                }
            }
echo $matrix[$resultStartAt[0]][$resultStartAt[1]] . " " . $matrix[$resultStartAt[0]][$resultStartAt[1] + 1] . PHP_EOL . $matrix[$resultStartAt[0] + 1][$resultStartAt[1]] . " " . $matrix[$resultStartAt[0] + 1][$resultStartAt[1] + 1];
            echo PHP_EOL . $biggestSum;