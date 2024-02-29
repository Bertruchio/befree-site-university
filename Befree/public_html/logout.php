<?php
session_start();
// Уничтожить все данные сессии
session_destroy();

// Перенаправить пользователя на главную страницу или другую страницу
header("Location: /index.php");
exit();
?>