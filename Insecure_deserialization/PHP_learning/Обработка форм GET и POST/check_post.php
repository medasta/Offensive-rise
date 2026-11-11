<?php
    // получить значение username из POST запроса 
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    // trim - удалить пробелы до/после строки
    if(trim($name) == ""){
        echo "username is empty!\n";
    } else if (strlen(trim($name)) < 2){
        echo "username is not exists";
    } else if (trim($email) == ""||trim($pass) == ""||trim($_POST['message']) == ""){
        echo "enter all fields!";
    } else {
        //$pass = md5($pass);
        // echo "<h1>Все данные:</h1><p>$name</p><p>$pass</p><p>$email</p><p>$_POST[message]</p>";
        $_POST['password'] = md5($pass);
        echo "<h1>Все данные:</h1>\n";
        foreach($_POST as $key => $value){
            echo "<p>$value</p>";
        }
        //redirect
        header('Location: /about.php');
        // после exit код не выолняется. Заглушка
        exit;
    }


?>