<?php
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
    $number = filter_var(trim($_POST['number']),
    FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST['message']),
    FILTER_SANITIZE_STRING);

    $mysql = new mysqli('localhost', 'root', '', 'register');
    $mysql->query("INSERT INTO `svaz` (`name`, `email`, `number`, `message`) 
    VALUES('$name', '$email', '$number', '$message')"); 

    $mysql->close();

    header('Location: svaz.html');
?>