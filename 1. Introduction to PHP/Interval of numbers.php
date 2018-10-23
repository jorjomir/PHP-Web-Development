<?php
$first=readline();
$second=readline();
for ($i=min($first, $second); $i<=max($first, $second); $i++) {
    echo $i . "\n";
}