<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $header_styles; ?>">
    <link rel="stylesheet" href="<?php echo $form_styles; ?>">
    <title>Интернет-магазин «Befree»</title>
</head>
<body>
    <table border="0" cellpadding="0" cellspacing="0" align="center" class="header">
        <tr>
            <td class="logo">
                <a href="/index.php"><img src="<?php echo $logo; ?>"></a>
            </td>
            <td>
                <h1 class="title"><?php echo $title; ?></h1>
            </td>
            <td class="login-form">
                <div class="session">
                <?php
                    session_start();

                    require $configURL;
                    require $baseconnectURL;
    
                    $loggedInUser = $_SESSION['username'];
    
                    $sql2 = "SELECT * FROM `cart_items` WHERE `username` LIKE '%$loggedInUser%'";
    
                    $result2 = $conn->query($sql2);

                    // Проверяем, существует ли информация о пользователе в сессии
                    if(isset($_SESSION['username'])) {
                        $username = $_SESSION['username'];

                        // код для отображения логина в шапке страницы
                        echo '<div style="display: flex">';
                        echo "<p>Логин: $username</p>";  
                        echo '<form action="../public_html/logout.php" method="post">
                            <button type="exit" value="Выйти" class="show-register-form"><img style="width: 30px; height: 30px" src="'.$exit_imageURL.'"></button>
                        </form>';
                        echo '</div>';           
                        echo '<a href="' . $cartURL . '" style="text-decoration: none"><button type="cart" value="Корзина" class="show-register-form"><p>Корзина</p> <p class="count-of-goods">';
                        
                        $totalcount = 0;
                        if ($result2->num_rows > 0) {
                            $cheque = 0;
                            while($row = $result2->fetch_assoc()) {
                                $quantity = $row['quantity'];
                                $totalcount = $totalcount + $quantity;
                            }
                            echo $totalcount;
                        } else {
                            echo '0';
                        }   
                        
                        echo '</p></button></a>';
                    } else {
                        echo '<button type="submit" value="Войти" class="show-register-form" onclick="toggleLoginForm()">Войти</button>
                        <button type="register" value="Регистрация" class="show-register-form" onclick="toggleRegisterForm()">Регистрация</button>';
                    }
                ?>
                </div>
            </td>            
        </tr>
    </table>

    <div class="register-form" id="registerForm">
        <span class="close-btn" onclick="closeRegisterForm()">&times;</span>
        <div class="container">
            <form action="../public_html/register.php" method="post">
                <h1>Регистрация</h1>
                    <p>Пожалуйста, заполните форму, чтобы создать аккаунт.</p>
                <hr>
            
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Введите вашу почту" name="login" required>
                
                <label for="psw"><b>Пароль</b></label>
                <input type="password" placeholder="Введите пароль" name="password" required>
            
                <label for="psw-repeat"><b>Повторите пароль</b></label>
                <input type="password" placeholder="Введите пароль ещё раз" name="repeatpass" required>
                <hr>
                <p>Создавая аккаунт вы соглашаете с нашей <a href="#">политикой конфиденциальности</a>.</p>
                
                <button type="submit" class="registerbtn">Зарегистрироваться</button>
            </form> 
        </div>
            
        <div class="container signin">
                <p>У вас уже есть аккаунт? <a onclick="toggleLoginForm(), closeRegisterForm()">Войти</a>.</p>
        </div>
    </div>

    
    <div class="register-form" id="loginForm">
        <span class="close-btn" onclick="closeLoginForm()">&times;</span>
            <div class="container">
                <form action="../public_html/login.php" method="post">
                    <h1>Вход</h1>
                    <hr>
                
                    <label for="email"><b>Email</b></label>
                    <input type="email" placeholder="Введите вашу почту" name="login" required>
                
                    <label for="psw"><b>Пароль</b></label>
                    <input type="password" placeholder="Введите пароль" name="password" required>

                    <hr>
                
                    <button type="submit" class="registerbtn">Войти</button>
                </form>
            </div>
            
        <div class="container signin">
            <p>У вас ещё нет аккаунта? <a onclick="toggleRegisterForm(), closeLoginForm()">Зарегестрироваться</a>.</p>
        </div>
    </div>

    <script>
        function toggleRegisterForm() {
            closeLoginForm()
            var registerForm = document.getElementById('registerForm');
            if (registerForm.style.display === 'block') {
                registerForm.style.display = 'none';
            } else {
                registerForm.style.display = 'block';
            }
        }
        function closeRegisterForm() {
            var registerForm = document.getElementById('registerForm');
            registerForm.style.display = 'none';
        }
        function toggleLoginForm() {
            closeRegisterForm()
            var loginForm = document.getElementById('loginForm');
            if (loginForm.style.display === 'block') {
                loginForm.style.display = 'none';
            } else {
                loginForm.style.display = 'block';
            }
        }
        function closeLoginForm() {
            var loginForm = document.getElementById('loginForm');
            loginForm.style.display = 'none';
        }
    </script>
    
    <div class="nav-buttons">
        <a href="/index.php"><button class="nav-button" id="about-us">Главная</button></a>
        <a href="/pages/сatalog.php"><button class="nav-button" id="company-history">Каталог</button></a>
        <a href="/pages/contacts.php"><button class="nav-button" id="employees">Контакты</button></a>
    </div>
    <BR>
</body>
</html>