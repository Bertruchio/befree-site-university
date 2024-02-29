<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'pdoconfig.php';
require_once 'databaseconnect.php';

function your_query_to_get_existing_cart_item($user_id, $product_name) {
    global $conn;

    // Add single quotes around $user_id and $product_name
    $sql = "SELECT * FROM `cart_items` WHERE username = '$user_id' AND product_name = '$product_name'";
    $result = $conn->query($sql);

    if (!$result) {
        die("Error in SQL query: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    }

    return null;
}

function your_query_to_update_quantity($user_id, $product_name, $new_quantity) {
    global $conn;

    // Enclose $user_id in single quotes and use correct column name
    $sql = "UPDATE `cart_items` SET quantity = $new_quantity WHERE username = '$user_id' AND product_name = '$product_name'";
    $conn->query($sql);
}

function your_query_to_add_to_cart($user_id, $product_name, $image, $price, $quantity) {
    global $conn;

    $sql = "INSERT INTO `cart_items` (username, product_name, image, price, quantity) VALUES ('$user_id', '$product_name', '$image', $price, $quantity)";
    $conn->query($sql);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Проверьте, существует ли пользователь в сессии
    $user_id = $_SESSION['username'] ?? null;

    if ($user_id) {
        // Получите данные из формы
        $product_id = $_POST['product_id'];

        $sql_product = "SELECT * FROM ` product` WHERE id = $product_id";
        $result_product = $conn->query($sql_product);

        if ($result_product->num_rows > 0) {
            $product_info = $result_product->fetch_assoc();

            // Проверяем, существует ли уже такой продукт в корзине для данного пользователя
            $existing_cart_item = your_query_to_get_existing_cart_item($user_id, $product_info['name']);
            
            if ($existing_cart_item) {
                // Если продукт уже есть в корзине, обновляем количество
                $new_quantity = $existing_cart_item['quantity'] + 1;
                your_query_to_update_quantity($user_id, $product_info['name'], $new_quantity);
            } else {
                // Если продукта еще нет в корзине, добавляем новую запись
                $quantity = 1;
                your_query_to_add_to_cart($user_id, $product_info['name'], $product_info['image'], $product_info['price'], $quantity);
            }

            echo "<script>window.history.go(-1);</script>";
            exit();
        }
    } else {
        echo "<script>alert('Для совершения покупок необходимо зарегистрироваться.');</script>";
        echo "<script>window.history.go(-1);</script>";
        exit();
    }
}

echo "<script>window.history.go(-1);</script>";
exit();
?>