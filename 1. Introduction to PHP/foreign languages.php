<?php
$input=readline();
if($input=='England' || $input=='USA') {
    echo 'English';
} elseif ($input=='Spain' || $input=='Argentina' || $input=='Mexico') {
    echo 'Spanish';
} else {
    echo 'unknown';
}
