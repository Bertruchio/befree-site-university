<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>История фирмы</title>
    <link rel="shortcut icon" href="../images/logo.png" type="img/png">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/contacts.css">
</head>
<body>
    <?php 
        $title = 'ИСТОРИЯ ФИРМЫ';
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
                    <p><b>Befree</b> — бренд для всех, кто любит молодежную моду, независимо от возраста. Инклюзивность, свобода самовыражения, красота и уникальность каждого — вот ценности, которые нам близки.</p>

                    <p>Мы берём на себя ответственность дать покупателям все самое новое и популярное, что есть в мировой мэйнстрим моде, привлекая к этому творческое комьюнити России.</p>

                    <h2 style="text-align: center">#BEFREECOMMUNITY</h2>
                    <img style="width: 100%" src="../images/logo.gif">
                    <p>Инклюзивность, свобода самовыражения, красота и уникальность каждого, прогресс и инновации — вот ценности, которые мы продвигаем.</p>

                    <p>В 2021 году мы запустили проект Befree Co:Create, чтобы разрабатывать коллекции с современными художниками, инфлюенсерами, благотворительными организациями и партнерами бренда, близкими по духу. Каждый месяц мы выпускаем минимум одну коллекцию в сотрудничестве с нашим комьюнити — и это не просто футболки с принтами, а еще и аксессуары и верхняя одежда.</p>
                    <br>
                    <h2 >BEFREE CO:CREATE <br> СОЗДАВАЙ ВМЕСТЕ <br> С НАМИ!</h2>
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