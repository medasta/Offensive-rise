<?php
    $str = "hello";
    echo "Var:" . $str;
    // или (строго в двойных кавычках)
    echo "Var: $str";
    // поле ввода с экранированием кавычек
    echo "<input type=\"text\">";
    // Получение длины указанной строки
    $length = strlen($str);
    // убрать пробелы слева и справа 
    trim("   asd   ");
    // перевод текста в нижний / верхний регистр 
    strtolower("SsS");
    strtoupper("SsS");

    // Получение md5 хэша от строки
    echo md5("qwerty")

?>