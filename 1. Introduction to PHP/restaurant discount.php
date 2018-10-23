<?php
$num=readline();
$type=readline();
if($num<=50) {
    if($type=="Normal") {
        $price=((2500+500)*0.95)/$num;
        echo 'We can offer you the ' . 'Small Hall' . "\n";
        echo "The price per person is " . round($price,2) . "$";
    }
    elseif($type=="Gold") {
        $price=((2500+750)*0.90)/$num;
        echo 'We can offer you the ' . 'Small Hall' . "\n";
        echo "The price per person is " . round($price,2) . "$";
    }
    elseif($type=="Platinum") {
        $price=((2500+1000)*0.85)/$num;
        echo 'We can offer you the ' . 'Small Hall' . "\n";
        echo "The price per person is " . round($price,2) . "$";
    }
}
elseif($num>50 && $num<=100) {
    if($type=="Normal") {
        $price=((5000+500)*0.95)/$num;
        echo 'We can offer you the ' . 'Terrace' . "\n";
        echo "The price per person is " . round($price,2) . "$";
    }
    elseif($type=="Gold") {
        $price=((5000+750)*0.90)/$num;
        echo 'We can offer you the ' . 'Terrace' . "\n";
        echo "The price per person is " . round($price,2) . "$";
    }
    elseif($type=="Platinum") {
        $price=((5000+1000)*0.85)/$num;
        echo 'We can offer you the ' . 'Terrace' . "\n";
        echo "The price per person is " . round($price,2) . "$";
    }
}
elseif($num>100 && $num<=120) {
    if($type=="Normal") {
        $price=((7500+500)*0.95)/$num;
        echo 'We can offer you the ' . 'Great Hall' . "\n";
        echo "The price per person is " . round($price,2) . "$";
    }
    elseif($type=="Gold") {
        $price=((7500+750)*0.90)/$num;
        echo 'We can offer you the ' . 'Great Hall' . "\n";
        echo "The price per person is " . round($price,2) . "$";
    }
    elseif($type=="Platinum") {
        $price=((7500+1000)*0.85)/$num;
        echo 'We can offer you the ' . 'Great Hall' . "\n";
        echo "The price per person is " . round($price,2) . "$";
    }
}
else {
    echo "We do not have an appropriate hall.";
}