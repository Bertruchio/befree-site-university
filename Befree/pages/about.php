<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>О нас</title>
    <link rel="shortcut icon" href="../images/logo.png" type="img/png">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/contacts.css">
</head>
<body>
    <?php 
        $title = 'О НАС';
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
                    <h1 style="text-align: center">КТО МЫ</h1>
                    <p><b>Befree</b> — команда друзей, увлеченных любимым делом. Франшиза Befree представлена на рынке с 2006 года. За это время нам удалось выстроить успешную сеть партнерских магазинов в России и СНГ. Мы умеем выстраивать прочные долгосрочные отношения с партнерами, а наши магазины становятся точками притяжения в торговых центрах.</p>
                    <img style="width: 100%" src="../images/store.png" alt="store photo">
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