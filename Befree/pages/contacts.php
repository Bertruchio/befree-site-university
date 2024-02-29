<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Контакты</title>
    <link rel="shortcut icon" href="../images/logo.png" type="img/png">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/contacts.css">
</head>
<body>
    <?php 
        $title = 'КОНТАКТЫ';
        $exit_imageURL = '../images/icons/logout.png';
        $configURL = '../public_html/pdoconfig.php';
        $baseconnectURL = '../public_html/databaseconnect.php'; 
        $header_styles = '../styles/header.css';
        $form_styles = '../styles/form.css';
        $logo = '../images/logo_main.svg';
        $cartURL = 'cart.php';
        require '../components/header_component.php'; 
    ?>
    
    <table border="0" width="80%" cellpadding="5" cellpadding="0" align="center">
        <tr>
            <td class="menu-column" valign="top" align="center">
                <a href="../pages/about.php">О нас</a><BR>
                <a href="../pages/brand.php">История фирмы</a><BR>
                <a href="../pages/job.php">Вакансии</a><BR>
            </td>

            <td>
                <div class="contact-form">
                    <?php
                        // Подключение к базе данных
                        require '../public_html/pdoconfig.php';
                        require '../public_html/databaseconnect.php';

                        // Проверка, была ли отправлена форма
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            // Получение данных из формы
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $subject = $_POST['subject'];
                            $message = $_POST['message'];

                            // Подготовленный запрос для внесения данных в таблицу
                            $stmt = $conn->prepare("INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
                            $stmt->bind_param("ssss", $name, $email, $subject, $message);

                            // Выполнение запроса
                            if ($stmt->execute()) {
                                echo "<h3 style='text-align: center'><b>Сообщение успешно отправлено!<b></h3>";
                            } else {
                                echo "<h3 style='text-align: center'><b>Ошибка при отправке сообщения<b></h3>" . $stmt->error;
                            }

                            // Закрытие подготовленного запроса
                            $stmt->close();
                        }

                        // Закрытие соединения с базой данных
                        $conn->close();
                    ?>
                    <h2>Напишите нам</h2>
                    <form action="../pages/contacts.php" method="post">
                        <input type="text" name="name" class="form-input" placeholder="Имя" required><br>
                        <input type="email" name="email" class="form-input" placeholder="Email" required><br>
                        <input type="text" name="subject" class="form-input" placeholder="Тема" required><br>
                        <textarea name="message" class="form-input" placeholder="Ваше сообщение" rows="6" required></textarea><br>
                        <input type="submit" value="Отправить" class="form-submit">
                    </form>

                    <div class="contact-info">
                        <h2>Адрес</h2>
                        <p>Контактный номер телефона компании: +7 (916) 538-7756</p>
                        <p>Адрес: Улица Новослобдская, Город: Москва, Страна: Россия</p>
                        <p>Email: befreeInfo@gmail.com</p>
                    </div>
                </div>
            </td>
		
            <td width="190" valign="top" align="center">
                <a href="https://vk.com/" target="_blank"><img src="../images/vk_banner.webp" alt="VK_banner" width="95%"/></a>
                <a href="https://www.eskimi.com/" target="_blank"><img src="../images/banner_size_banner.webp" alt="eskimi" width="95%"/></a>
                <a href="https://www.furnituremastersal.com/" target="_blank"><img src="../images/furniture_banner.webp" alt="furniture_banner" width="95%"/></a>
            </td>
        </tr>
</table>

<?php require '../components/footer_component.php'; ?>

</body>
</html>