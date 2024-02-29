<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Каталог модной женской одежды, обуви и аксессуаров - интернет-магазин «Befree»</title>
    <link rel="stylesheet" href="../styles/card.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/catalog.css">
    <link rel="shortcut icon" href="../images/logo.png" type="img/png">

</head>
<body>
    <?php 
        $title = 'КАТАЛОГ';
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
		<td class="menu-column" valign="top" align="center">
			<a href="../pages/about.php">О нас</a><BR>
			<a href="../pages/brand.php">История фирмы</a><BR>
			<a href="../pages/job.php">Вакансии</a><BR>
		<td>

        <?php
            require '../public_html/pdoconfig.php';
            require '../public_html/databaseconnect.php';

            $loggedInUser = $_SESSION['username'];
            $sql2 = "SELECT * FROM `cart_items` WHERE `username` LIKE '%$loggedInUser%'";

            // Обработчик для поиска
            if (isset($_GET['search'])) {
                $searchTerm = $_GET['search'];
                $sql = "SELECT * FROM ` product` WHERE `name` LIKE '%$searchTerm%'";
            } else {
                $sql = "SELECT * FROM ` product` WHERE 1";
            }

            $result2 = $conn->query($sql2);
            $result = $conn->query($sql);
        ?> 

        <td>
            <table>
                <tr>
                    <div class="search-form">
                        <form action="" method="get" id="searchForm">
                            <input class="search-text" type="text" name="search" placeholder="Поиск..." value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                            <input class="search-submit" type="submit" value="Искать">
                        </form>
                    </div>
                    <?php
                        $cartItems = array();
                        while ($row = $result2->fetch_assoc()) {
                            $cartItems[] = $row;
                        }
                        if ($result->num_rows > 0) {
                            $counter = 0;
                            while($properties = $result->fetch_assoc()) {
                                echo '<td>';
                                echo '<div class="card">';
                                echo '<img src="' . $properties['image'] . '" alt="Product Image">';
                                echo '<h2 width="30%">' . $properties['name'] . '</h2>';
                                echo '<p><b>' . $properties['price'] . ' ₽</b></p>';
                                echo '<h3 style="text-align: right">В корзине: ';
                                if (!empty($cartItems)) {
                                    $totalcount = 0;
                                    foreach ($cartItems as $row) {
                                        if ($row['product_name'] === $properties['name']) {
                                            $quantity = $row['quantity'];
                                            $totalcount += $quantity;
                                        }
                                    }
                                    echo $totalcount;
                                } else {
                                    echo '0';
                                }
                                echo ' шт.</h3>';
                                echo '<table><tr><td><a href="../pages/goods/' . $properties["meta_description"] . '.php">Подробнее</a></td>';
                                echo '<td>';
                                echo '<form action="../public_html/add_to_cart.php" method="post">';
                                echo '<input type="hidden" name="product_id" value="' . $properties['id'] . '">';
                                echo '<input type="submit" class="add-to-cart-btn" value="Добавить в корзину">';
                                echo '</form>';
                                echo '</td></tr></table>';
                                echo '</div>';
                                echo '</td>';

                                // Увеличиваем счетчик
                                $counter++;

                                // Если это третья карточка, закрываем текущую строку и начинаем новую
                                if ($counter % 2 == 0) {
                                    echo '</tr><tr>';
                                }
                            }
                        } else {
                            echo '<td colspan="2">Нет товаров в каталоге</td>';
                        }
                    ?>
                </tr>
            </table>
        </td>
        
        <?php
            // Закрываем соединение
            $conn->close();
        ?>
		
 		<td width="190" valign="top" align="center">
            <a href="https://vk.com/" target="_blank"><img src="../images/vk_banner.webp" alt="VK_banner" width="95%"/></a>
            <a href="https://www.eskimi.com/" target="_blank"><img src="../images/banner_size_banner.webp" alt="eskimi" width="95%"/></a>
            <a href="https://www.furnituremastersal.com/" target="_blank"><img src="../images/furniture_banner.webp" alt="furniture_banner" width="95%"/></a>
		</td>
    </table>

    <?php require '../components/footer_component.php'; ?>

    <script>
        function resetSearch() {
            document.getElementById('searchForm').reset();
        }
    </script>

</body>
</html>