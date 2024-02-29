<?php
require_once('pdoconfig.php');
require_once('databaseconnect.php');

$login = $_POST['login'];
$password = $_POST['password'];

if (empty($login) || empty($password)){
    echo "<script>alert('Заполните все поля');</script>";
} else {
    $sql = "SELECT * FROM users WHERE username='$login' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<script>alert('Добро пожаловать " . $row['username'] . "');</script>";
            
            session_start();
            $_SESSION['username'] = $login;
        }
    } else {
        echo "<script>alert('Такого пользователя не существует или пароль введён неверно.');</script>";
    }
}

echo "<script>window.history.go(-1);</script>";

?>