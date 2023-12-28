<?php
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);



    if(mb_strlen ($name) < 5 || mb_strlen($name) > 90){
        echo "Недопустимая длина Имени";
        exit();
    } else if(mb_strlen ($password) < 5 || mb_strlen($password) > 32){
        echo "Недопустимая длина пароля";
        exit();
    } else if(mb_strlen ($email) < 3 || mb_strlen($email) > 50){
        echo "Недопустимая длина почты";
        exit();
    }

    $password = md5($password."gitlers");

    $mysql = new mysqli('localhost', 'root', '', 'register');
    $mysql->query("INSERT INTO `users` (`name`, `password`, `email`) 
    VALUES('$name', '$password', '$email')"); 

    $mysql->close();

    header('Location: regist.php');
?>