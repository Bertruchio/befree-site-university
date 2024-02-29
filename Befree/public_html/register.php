<?php
require_once('pdoconfig.php');
require_once('databaseconnect.php');

$login = $_POST['login'];
$email = $_POST['login'];
$password = $_POST['password'];
$repeatpass = $_POST['repeatpass'];

if (empty($login) || empty($email) || empty($password) || empty($repeatpass)) {
    echo "<script>alert('Заполните все поля');</script>";
} else {
    if ($password != $repeatpass) {
        echo "<script>alert('Пароли не совпадают');</script>";
    } else {
        $sql = "SELECT * FROM users WHERE username='$login'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<script>alert('Пользователь с именем " . $row['username'] . " уже существует.');</script>";
            }
        }else{
            $sql = "INSERT INTO users (username, email, password) VALUES ('$login', '$email', '$password')";
            if ($conn->query($sql)) {
                echo "<script>alert('Успешная регистрация');</script>";
                
                session_start();
                $_SESSION['username'] = $login;
            } else {
                echo "<script>alert('Ошибка регистрации');</script>";
            }
        }
    }
}

echo "<script>window.history.go(-1);</script>";
?>