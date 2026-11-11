<?php

    // активировать сессии 
    session_start();

    $username = "Alex";
    //Установка куки
    setcookie("username", $username, time() + 180);
    //print_r($_COOKIE);

    // Удаление куки
    setcookie("username", $username, time() - 180);
    echo $_COOKIE['username'];
    // либо 
    unset($_SESSION[username]);
?>