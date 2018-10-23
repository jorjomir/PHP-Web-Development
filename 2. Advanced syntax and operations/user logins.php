<?php
$users=[];
$output="";
$failed=0;
while(true) {
    $input=readline();
    if($input=="login") {
        break;
    }
    $register=explode(" -> ", $input);
    $users[$register[0]]=$register[1];
}
while(true) {
    $input=readline();
    if($input=="end") {
        break;
    }
    $login=explode(" -> ", $input);
    if($users[$login[0]]==$login[1]) {
        $output.=$login[0] . ": logged in successfully" . PHP_EOL;
    } else {
        $output.=$login[0] . ": login failed" . PHP_EOL;
        $failed++;
    }
}
echo $output;
echo "unsuccessful login attempts: " . $failed;