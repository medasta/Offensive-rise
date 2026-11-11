<?php
    $lst = [1, 2, 3];
    // Удаление по индексу
    unset($lst[0]);
    // обновить индексы после удаления
    $lst = array_values($lst);

    // поиск индекса по запрашиваемого элемента
    // (элемент, массив) -> index|bool
    if(in_array(3, $lst) == ""){
        echo "not found";
    } else {
        echo "found";
    }

    // срез массива
    //(какой массив, индекс начала, Длина среза)
    array_slice();

    //var_dump($arr) - полее подобный вывод в
    // сравнении с print_r

    // array_merge - склеивание массивов
    // array_merge(arr1, arr2)

    // gettype() - получение типа данных полученного значения
    gettype($lst);

    // данетки типы данных 
    //is_numeric
    //is_integer
    //is_bool
    //is_array и прочие

    $str = "Example";
    strpos($str, "am");
    //strpos вернет false, если не найдет, иначе индекс начала подстроки

    // строку в массив по сепаратору
    $words = "john,bob,alex";
    $arr_words = explode(",", $words);

    // в формате строки с сепаратором 
    echo "\n".implode("|", $arr_words) 
?>