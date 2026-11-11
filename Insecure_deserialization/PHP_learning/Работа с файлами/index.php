<?php
    // fopen wr - write and read
    $file = fopen("text.txt", "w");
    
    // запись в файл
    fwrite($file, "example text\nHello\n");
    fclose($file);

    
    $file = fopen("text.txt", "r");

    $content = fread($file, filesize("text.txt"));

    echo $content;
   // обязательно закрываем файл
    fclose($file);
    // альт режимы записи
    // a - append - добавление в конец
    // без очищения содержимого файла
    
    //file_get/put_contents() - чтение/
    // запись содержимого файла с последую-
    //щим его созданием при необходимости.

    //file_exists(<str:filename>) ->bool
    // проверка на существование файла

    //rename(<currentName:str,newName:str)
    // переименование файла

    // __FILE__ - получение полного пути к активному файлу
    // fileperms(__FILE__) - просмотр прав досутпа активного файла.
    //chmod(<filename:str>, <permissions: int>) - изменение прав
    //доспупа к файлу
?>