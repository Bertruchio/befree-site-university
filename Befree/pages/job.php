<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Вакансии</title>
    <link rel="shortcut icon" href="../images/logo.png" type="img/png">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/contacts.css">
</head>
<body>
    <?php 
        $title = 'ВАКАНСИИ';
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
                <!-- <a href="/pages/4.php">Доставка</a> -->
            </td>

            <td>
                <div class="contact-form">
                    <h2 style="text-align: center">ВАКАНСИИ</h2>
                    <p>Befree – модное молодежное коммьюнити.</p>
                    <p>Наш бренд был создан в начале 2000-х молодой командой с большими амбициями и бунтарским духом.</p>
                    <p>Создателям хотелось отойти от всего консервативного в одежде и оформлении магазинов, быть смелее, относиться к моде легко и иронично. Эта философия остается с нами по сей день.</p>
                    <p>В Befree мы верим в людей. В уникальность, разнообразие и ценность каждого. Поэтому у нас легко строить карьеру – мы делаем все для того, чтобы наши сотрудники раскрывали свои таланты внутри бренда.</p>
                    <p>Ищешь работу в фэшн индустрии и разделяешь наши ценности? Тогда тебе точно у нас понравится!</p>
                    <p>Присоединяйся и стань частью #befreecommunity!</p>
                    <p><b>Звони +7 (909) 590 71 35, +7 (812) 240 46 20, доб. 1203, пиши и отправляй резюме на hrbefree@melonfashion.com</b></p>
                </div>
            </td>
		
            <td width="190" valign="top" align="center">
                <a href="https://vk.com/" target="_blank"><img src="../images/vk_banner.webp" alt="VK_banner" width="95%"/></a>
                <a href="https://www.eskimi.com/" target="_blank"><img src="../images/banner_size_banner.webp" alt="eskimi" width="95%"/></a>
                <a href="https://www.furnituremastersal.com/" target="_blank"><img src="../images/furniture_banner.webp" alt="furniture_banner" width="95%"/></a>
            </td>
        </tr>>
</table>

<?php require '../components/footer_component.php'; ?>

</body>
</html>