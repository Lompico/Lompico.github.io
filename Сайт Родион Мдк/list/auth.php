<?php
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);



    $password = md5($password."gitlers");

    $mysql = new mysqli('localhost', 'root', '', 'register');

    $result = $mysql->query("SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$password'");
    $user = $result->fetch_assoc();
    if(count($user) === 0){
        echo "Такой пользователь не найден";
        exit();
    }
    setcookie('user', $user['name'], time() + 3600, "/");

    $mysql->close();

    header('Location: regist.php');
?>