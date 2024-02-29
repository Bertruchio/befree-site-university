<?php
session_start();
require_once 'pdoconfig.php';
require_once 'databaseconnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id']) && isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $product_id = $_POST['product_id'];

    // Выполните запрос на удаление
    $sql = "DELETE FROM `cart_items` WHERE username = '$username' AND id = $product_id";
    
    if ($conn->query($sql)) {
        // Отправьте успешный ответ (200 OK) обратно клиенту
        http_response_code(200);
        echo "<script>window.history.go(-1);</script>";
        exit();
    } else {
        // Если есть ошибка, выведите ее
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<script>window.history.go(-1);</script>";
    }
}
?>