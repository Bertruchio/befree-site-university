<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Водолазка облегающая премиум</title>
    <link rel="stylesheet" href="../../styles/product_description.css">
    <link rel="stylesheet" href="../../styles/header.css">
    <link rel="shortcut icon" href="../../images/logo.png" type="img/png">
</head>
<body>
    <?php 
        $title = 'КАТАЛОГ';
        $exit_imageURL = '../../images/icons/logout.png';
        $configURL = '../../public_html/pdoconfig.php';
        $baseconnectURL = '../../public_html/databaseconnect.php'; 
        $header_styles = '../../styles/header.css';
        $form_styles = '../../styles/form.css';
        $logo = '../../images/logo_main.svg';
        $cartURL = '../cart.php';
        require '../../components/header_component.php'; 
    ?>
    
    <table border="0" width="80%" cellpadding="5" cellspacing="0" align="center">
        <tr>
		<td class="menu-column" valign="top" align="center">
			<a href="../../pages/about.php">О нас</a><BR>
			<a href="../../pages/brand.php">История фирмы</a><BR> 
			<a href="../../pages/job.php">Вакансии</a><BR>
        </td>

        <?php
                require '../../public_html/pdoconfig.php';
                require '../../public_html/databaseconnect.php';

                $loggedInUser = $_SESSION['username'];

                $sql = "SELECT * FROM ` product` WHERE id = 1";
                $sql2 = "SELECT * FROM `cart_items` WHERE `username` LIKE '%$loggedInUser%'";

                $result2 = $conn->query($sql2);

                $result = $conn->query($sql);
                $properties = $result->fetch_assoc();
            ?>
            <td>
                <div class="product-container">
                    <h1 class="product-title"><?=$properties['name']?></h1>
                    <p class="product-price"><?=$properties['price']?> ₽</p> 
                    <p class="product-color">Цвет: <?=$properties['color']?></p>
                    <h3>В корзине: 
                        <?php
                            $totalcount = 0;
                            if ($result2->num_rows > 0) {
                                $cheque = 0;
                                while($row = $result2->fetch_assoc()) {
                                    $quantity = $row['quantity'];
                                    if($row['product_name'] === $properties['name']){
                                        $totalcount = $totalcount + $quantity;
                                    }
                                }
                                echo $totalcount;
                            } else {
                                echo '0';
                            }
                        ?> 
                    шт.</h3>
                    <form action="../../public_html/add_to_cart.php" method="post">
                        <input type="hidden" name="product_id" value="<?=$properties['id']?>">
                        <input type="submit" class="add-to-cart-btn" value="Добавить в корзину">
                    </form>
                    <div class="product-img">
                        <a href="<?=$properties['image']?>" target="_blank">
                            <img src="<?=$properties['image']?>" alt="Product Image">
                        </a>
                    </div>
                    
                    <section class="product-section">
                        <h2 class="section-title">Характеристики товара</h2>
                        <div class="characteristics">
                            <table class="characteristics-table">
                                <tr>
                                    <td> Цвет </td>
                                    <td> <?=$properties['color']?> </td>
                                </tr> 
                                <tr>
                                    <td> Артикул </td>
                                    <td> <?=$properties['alias']?> </td>
                                </tr>
                                <tr>
                                    <td> Код цвета </td>
                                    <td> <?=$properties['color_id']?> </td>
                                </tr>
                            </table>
                        </div>
                    </section>
                    
                    <section class="product-section">
                        <h2 class="section-title">Подробное описание товара</h2>
                        <div class="detailed-description">
                            <ul class="description-list">
                                <?=$properties['description']?>
                            </ul>
                        </div>
                    </section>
                </div>
            </td>              
		
 		<td width="190" valign="top" align="center">
            <a href="https://vk.com/" target="_blank"><img src="../../images/vk_banner.webp" alt="VK_banner" width="95%"/></a>
            <a href="https://www.eskimi.com/" target="_blank"><img src="../../images/banner_size_banner.webp" alt="eskimi" width="95%"/></a>
            <a href="https://www.furnituremastersal.com/" target="_blank"><img src="../../images/furniture_banner.webp" alt="furniture_banner" width="95%"/></a>
		</td>
</table>

<?php require '../../components/footer_component.php'; ?>

</body>
</html>