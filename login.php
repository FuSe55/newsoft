<?php
    session_start();
    $mysqli = new mysqli("localhost","root","","soft");
    if ($mysqli->connect_errno){
        echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
    }
    $login = $_POST["login"];
    $password = $_POST["password"];
    $result = $mysqli->query("SELECT description FROM `login` WHERE login='".addslashes($login)."' AND password='".addslashes($password)."'");
    if ($result->num_rows === 0) {
        header('location:index.php');

    } else {
        $username = $result->fetch_assoc();
        $_SESSION['username'] = $username['description'];
        header('location:partner.php');
    }