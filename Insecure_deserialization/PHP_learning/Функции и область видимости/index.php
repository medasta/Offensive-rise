<?php
    //function - ключевое слово
    //function <funcName>
    function info(){
        echo "info printed\n";
    }
    info();

    function otherFunc($word){
        echo "$word\n";
    }

    otherFunc(4);

    // Функции могут принимать несколько значений
    function math($x, $y){
        $res = $x + $y;
        echo "$res\n";
    }

    // Функции умеют что то возвращать
    function getArrLen($list){
        return count($list);
    }
    $lst = [1, 2, 3];
    $lstLen = getArrLen($lst);
    math(4, 5);

    function summary($arr){
        $summa = 0;
        // проход по циклу со сбором значений
        foreach($arr as $value){
            $summa += $value;
        }
        return $summa;
    }

    echo summary($lst) . "\n";
    echo summary($lst) . "\n";

    function unvisibleVar(){
        $x = 0;
    }

    $x = 10;
    unvisibleVar();
    echo $x . "\n"; // выведится 10.
    
    function visibleVar(){
        global $x;
        $x = 100;
    }

    visibleVar();
    echo $x . "\n";
    
    function staticVal(){
        // Функция сохраняет свое состояние
        // при каждом новом вызове
        static $cont;
        $count += 1;
        echo $count . "\n";
    }
?>