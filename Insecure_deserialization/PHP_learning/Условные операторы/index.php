<?php

    $a = 5;
    // == или !=
    // >, <, >=, <= 
    if($a == 5){
        echo "$a = 5\n";
    }

    $str = "hello";
    if ($str == "hello"){
        echo "True\n";
    } else{
        echo "False\n";
    }

    if ($a == 5){
        echo "a = 5\n";
    } else if($a != 5){
        echo "a != 5\n";
    } else{
        echo "val is not int\n";
    }

    $isWeatherGood = false;
    // || - или / && - и
    if ($str == "Hello" || $isWeatherGood == true){

    }
?>