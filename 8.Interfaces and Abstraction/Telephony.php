<?php
function call($arr) {
    $numbers=explode(" ", $arr);
    for ($i=0; $i<count($numbers); $i++) {
        if(preg_match('~[a-zA-Z]~', $numbers[$i])) {
            echo "Invalid number!" . PHP_EOL;
        } else {
            echo "Calling... " . $numbers[$i] . PHP_EOL;
        }
    }
}
function browse($arr) {
    $urls=explode(" ", $arr);
    for ($i=0; $i<count($urls); $i++) {
        if(preg_match('~[0-9]~', $urls[$i])){
            echo "Invalid URL!" . PHP_EOL;
        } else {
            echo "Browsing: " . $urls[$i] . "!" . PHP_EOL;
        }
    }
}
$nums=readline();
$urls=readline();
call($nums);
browse($urls);