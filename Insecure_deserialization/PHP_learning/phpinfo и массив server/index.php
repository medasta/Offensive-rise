<?php
    // получение версии, информации и прочего
    // относительно версии PHP
    // phpinfo();
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    echo $_SERVER['HTTP']; // если ничего или off, то не HTTPS
    echo $_SERVER['HTTP_HOST']; // получение домена
    echo $_SERVER['REQUEST_URI']; // получение страницы, на которой 
    // находимся без домена
    echo $_SERVER['HTTP_USER_AGENT']; // получение user agent клиента
    if ($_GET['source'] != ""){
        $link = explode("?source=", $_SERVER['REQUEST_URI']);
        $redirect = "http://" . $_SERVER . $link[0];
        
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: '.$redirect);
        exit();
    }
?>