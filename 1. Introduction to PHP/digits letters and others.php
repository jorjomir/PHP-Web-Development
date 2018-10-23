<?php
$input=readline();
$others='';
$text='';
$digits='';
for ($i=0; $i<strlen($input); $i++) {
    if(is_numeric($input[$i])) {
        $digits.=$input[$i];
    } elseif (ctype_alpha($input[$i])) {
        $text.=$input[$i];
    } else {
        $others.=$input[$i];
    }
}
echo $digits . "\n" . $text . "\n" . $others;