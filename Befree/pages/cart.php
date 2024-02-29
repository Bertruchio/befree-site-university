<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Корзина</title>
    <link rel="shortcut icon" href="../images/logo.png" type="img/png">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/cart_card.css">
</head>
<body>
    <?php 
        $title = 'КОРЗИНА';
        $exit_imageURL = '../images/icons/logout.png';
        $configURL = '../public_html/pdoconfig.php';
        $baseconnectURL = '../public_html/databaseconnect.php'; 
        $header_styles = '../styles/header.css';
        $form_styles = '../styles/form.css';
        $logo = '../images/logo_main.svg';
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
                <br>

                <?php 
                    require '../public_html/pdoconfig.php';
                    require '../public_html/databaseconnect.php';

                    $loggedInUser = $_SESSION['username'];

                    $sql = "SELECT * FROM `cart_items` WHERE `username` LIKE '%$loggedInUser%'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $counter = 0;
                        $cheque = 0;
                        while($row = $result->fetch_assoc()) {
                            $product_id = $row['id'];
                            $name = $row['product_name'];
                            $imgURL = $row['image'];
                            $price = $row['price'];
                            $quantity = $row['quantity'];
                            require '../components/cart_cart_component.php'; 
                            // Увеличиваем счетчик
                            $cheque += $price * $quantity;
                            $counter++;
                        }
                        echo '<h2 style="text-align: right; margin-right: 50px">Общая сумма товаров: '. $cheque .' ₽</h2>';
                    } else {
                        echo '<h1 style="text-align: center">Нет товаров в корзине</h1>';
                        echo '<br><br>';
                    }
                ?>

                <br>
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