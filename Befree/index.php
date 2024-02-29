<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Интернет-магазин «Befree»</title>


    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/slider.css">
    <link rel="shortcut icon" href="images/logo.png" type="img/png">


</head>
    <body>
        <?php
            $title = 'ГЛАВНАЯ';
            $exit_imageURL = 'images/icons/logout.png';
            $configURL = 'public_html/pdoconfig.php';
            $baseconnectURL = 'public_html/databaseconnect.php'; 
            $header_styles = 'styles/header.css';
            $form_styles = 'styles/form.css';
            $logo = 'images/logo_main.svg';
            $cartURL = 'pages/cart.php';
            require 'components/header_component.php'; 
        ?>
        
        <table border="0" width="80%" cellpadding="5" cellpadding="0" align="center">
            <tr>
            <td class="menu-column" valign="top" align="center">
                <a href="/pages/about.php">О нас</a><BR>
                <a href="/pages/brand.php">История фирмы</a><BR>
                <a href="/pages/job.php">Вакансии</a><BR>
            <td>
            <td class="content">
                <h2><b>CAMPAIGN FALL'23. PARIS NEW COLLECTION FOR HER AND HIM.</b></h2>
                <p>Новая коллекция. <i>Befree в Париже</i>.</p> 

                <br>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="/images/woman3.webp" alt="Slide 1"></div>
                    <div class="swiper-slide"><img src="/images/woman2.webp" alt="Slide 1"></div>
                    <div class="swiper-slide"><img src="/images/woman1.webp" alt="Slide 1"></div>
                    </div>
                    <!-- Add Pagination -->
                    <!-- <div class="swiper-pagination"></div> -->
                    <!-- Add Navigation -->
                    <!-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> -->
                </div>
                <br>
                
                <h2>Fashion-индустрия бесконечно увлекательна!</h2>
                <p><b>Мы это знаем, как никто другой.</b> Ведь уже больше века в месте, где находится штаб-квартира Melon Fashion Group, создаются мода и одежда.</p>
                <br>
                
                <p><b>Компании принадлежат четыре бренда</b> — Befree, ZARINA, LOVE REPUBLIC и sela. Каждый бренд имеет уникальную концепцию, четкое позиционирование, ярко выраженную целевую аудиторию и свой характер.</p>
                <br>

                <p>Компания выполняет <b>полный цикл деятельности модного бизнеса</b>, начиная с моделирования и закупки, заканчивая распределением, продажей, продвижением женской, детской и мужской одежды и аксессуаров.</p>
                <br>
                    
                <p>На 1 января 2022 года розничная сеть Melon Fashion Group насчитывает <b>845 магазинов в 5 странах.</b> Штаб-квартира расположена в Санкт-Петербурге.</p>
                <br>
                    
                <table width="600" height="400" border="3" cellpadding="20" cellspacing="5">
                    <tr>
                        <td colspan=2 align="center">Курьерская доставка</td>
                        <td width="50%" colspan=2 align="left">Доставка в пункт выдачи Lamoda с примеркой
                        </td>
                    </tr>
                    <tr>
                        <td align="center">С примеркой – от 350 руб.</td>
                        <td align="center">Покупки менее 2000 руб. – от 280 руб.</td>
                        <td width="50%" rowspan=2 colspan=2 align="center">при сумме покупки менее 2000 руб. – от 400 руб. (иначе бесплатно)</td>
                        
                    </tr>
                    <tr>
                        <td align="center">Полный отказ от заказа – от 270 руб.</td>
                        <td align="center">Покупки более 2000 руб. – бесплатно.</td>
                    </tr>
                </table>
                <BR><BR>
                    
                <ul type="circle">
                    <li>Бесплатная доставка</li>
                    <li>Если вы оплатили заказ на сайте, то примерка доступна только после выдачи всего заказа. Вы можете сразу после примерки оформить на кассе возврат товаров, которые вам не подошли.</li>
                    <li>Если вы выбрали оплату при получении, то вы сможете сначала примерить выбранные вещи, и затем оплатить только те, которые вам подошли.</li>
                    <li>Для продления срока хранения обратитесь по телефону 8 (800) 250-01-02</li>
                </ul>
                <ol type="a">
                    <li>Доставка в пункт выдачи Lamoda с примеркой</li>
                    <li>Доставка в пункт выдачи Lamoda и 5Post без примерки</li>
                    <li>Курьерская доставка</li>
                </ol>
                <ol type="A">
                    <li>Новинки</li>
                    <li>Одежда
                        <ol type="a">
                            <li>Брюки</li>
                            <li>Деним</li>
                            <li>Джемпер</li>
                        </ol>
                    </li> 
                </ol>
            </td>
            <td width="190" valign="top" align="center">
                <a href="https://vk.com/" target="_blank"><img src="images/vk_banner.webp" alt="VK_banner" width="95%"/></a>
                <a href="https://www.eskimi.com/" target="_blank"><img src="images/banner_size_banner.webp" alt="eskimi" width="95%"/></a>
                <a href="https://www.furnituremastersal.com/" target="_blank"><img src="images/furniture_banner.webp" alt="furniture_banner" width="95%"/></a>
            </td>
        </table>

        <?php require 'components/footer_component.php'; ?>

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 3000, // Интервал смены слайдов в миллисекундах (в данном случае, 5 секунд)
                disableOnInteraction: false, // Оставить включенной автопрокрутку после взаимодействия пользователя
            },
            speed: 900,
            });
        </script>
    </body>
</html>