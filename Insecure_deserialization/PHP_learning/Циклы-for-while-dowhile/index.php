<?php
    // for(init var; stop; step)
    for($i = 0; $i < 10; $i++){
        echo "Hello world!\n";
    }
    // while
    $i = 1;
    while($i <= 10){
        echo $i . "\n";
        $i++;
    }

    //do while - цикл с предусловием
    // Гарантом будет одна итерация,
    // далее в зависимости от выполнения
    // условия в while
    $i = 100;
    do{
        echo $i;
    } while ($i < 10);

    // операторы, работающие внутри цикла
    for($el = 100; $el < 10; $el /= 2){
        if ($el < 50){
            break; // выход из активного цикла
        }
        if ($el % 2 == 0){
            continue;
        }
        echo $el . "\n";

    }

    $list = [5, 7, 8, "some", 14.42];
    for ($i = 0; $i < count($list); $i++){
        echo "Element: " . $list[i] . "\n";
    }

    $list_2 = ["age" => 50, "name" => "Alex", 2 => 50, false => "flase"];

    foreach ($list_2 as $item => $value){
        echo "Key: . $item . Value: . $value \n"; 
    }

?>