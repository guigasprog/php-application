<?php 
include_once 'C:\xampp\htdocs\php-application\BLL\Account.BLL.php';
use BLL\Account;

setcookie("account", '', time() + (86400 * 30), "/", "", 0);

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) { 
    if(isset($_POST['email']) && isset($_POST['password'])) {
        if($_POST['email'] == "guilhermedelgado876@admin.com" && $_POST['password'] == "admin123")
            header('Location: ../main.php');
        else if (\BLL\Account::login($_POST['email'], $_POST['password'])) {
            header('Location: ./firstpage/firstPage.php');
        }
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) { 
    if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['username'])) {
        \BLL\Account::register($_POST['username'], $_POST['email'], $_POST['password']);
        if (\BLL\Account::login($_POST['email'], $_POST['password'])) {
            header('Location: ./firstPage/firstPage.php');
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaos-Trials</title>
</head>

<style>

@font-face {
    font-family: centurion;
    src: url(./fonts/the-centurion/Centurion.ttf);
}

* {
    margin: 0;
    padding: 0;
    color: #ffffff;
    font-family: "Space Grotesk", sans-serif;
}

.gradient {
    width: 200%;
    height: 100%;
    background-image: linear-gradient(to right, transparent, black, transparent);
    transition: 1000ms;
}

body {
    width: 100%;
    height: 100vh;
    background-color: #111111;
    overflow: hidden;
}

.background {
    width: 100%;
    margin-top: -1%;
    z-index: -1;
    position: absolute;
}

aside {
    width: 20%;
    height: 30%;
    position: absolute;
    background: #11111180;
    top: 15%;
    left: 10%;
    text-align: center;
    border-radius: 30px;
    transition: 1000ms;
}

#aside2 {
    left: 190%;
}

.campo {
    width: 100%;
    height: 25%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.button {
    width: 15%;
    display: flex;
    align-items: center;
    justify-content: center
}

button {
    width: 140px;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    color: #ffffff;
    font-size: 18px;
    font-weight: 600;
    transition: 300ms;
    border: 0;
}

input {
    width: 100%;
}

input[type=submit] {
    width: 140px;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    color: #ffffff;
    font-size: 18px;
    font-weight: 600;
    transition: 300ms;
    border: 0;
    font-family: "Space Grotesk", sans-serif;
}

input[type=submit].primary {
    border: 3px solid #c155ff;
    background-color: #c155ff;
}

input[type=submit].primary:hover {
    color: #c155ff;
    background-color: transparent;
}

button.primary {
    border: 3px solid #c155ff;
    background-color: #c155ff;
}

button.primary:hover {
    color: #c155ff;
    background-color: transparent;
}

button.secondary {
    border: 3px solid #ffffff;
    background-color: #ffffff;
    color: #111111;
}

button.secondary:hover {
    color: #ffffff;
    background-color: transparent;
}

button.secondary h6 {
    color: #111111;
}

button.secondary:hover h6 {
    color: #ffffff;
}

.forms {
    width: 20%;
    height: 60%;
    position: absolute;
    top: 20%;
    right: 5%;
    background: #14141495;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    transition: 1000ms;
}

#forms2 {
    right: -105%;
}

</style>

<body>
    <img src="./imgs/background.jpg" class="background">
    <div class="gradient" id="gradient"></div>
        <aside id="aside">
            <h6 style="height: 15%; width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column">
    Jogue
</h6>
    <h6><span style="color: red; font-family: centurion; font-size: 42px; height: 20%; 
    display: flex;
    justify-content: center;
    align-items: center;">Chaos-Trials</span></h6>
            <h6 style="height: 80%; width: 100%; 
    display: flex;
    justify-content: center;
    align-items: center;">
    <br>
    <button class="secondary" onclick="register()"><h6>Registrar-se</h6></button>
        </aside>

        <div class="forms" id="forms">
            <header style="height: 20%; display: flex; justify-content: center; align-items: center;">
                <h5>Login</h5>
            </header>
            <main style="height: 100%">
                <form method="POST" style="height: 100%">
                    <div class="campo">
                        <h6 style="width: 100%; text-align: start;">Email</h6>
                        <input type="text" name="email">
                    </div>
                    <div class="campo">
                        <h6 style="width: 100%; text-align: start;">Password</h6>
                        <input type="password" name="password">
                    </div>
                    <div class="campo">
                        <input type="submit" name="login" class="primary" value="Logar">
                    </div>
                    <div class="row" style="width: 100%; display: flex; justify-content: center; align-items: center; margin-top: 15%;">
                        <p>Esqueci minha senha</p>
                    </div>
                </form>
            </main>
        </div>
        

        <aside id="aside2">
        <h6 style="height: 15%; width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column">
    Já tenho uma conta em
</h6>
    <h6><span style="color: red; font-family: centurion; font-size: 42px; height: 20%; 
    display: flex;
    justify-content: center;
    align-items: center;">Chaos-Trials</span></h6>
            <h6 style="height: 80%; width: 100%; 
    display: flex;
    justify-content: center;
    align-items: center;">
    <br>
    <button class="secondary" onclick="login()"><h6>Logar-se</h6></button>
        </aside>

        <div class="forms" id="forms2">
            <header style="height: 20%; display: flex; justify-content: center; align-items: center;">
                <h5>Registrar-se</h5>
            </header>
            <main style="height: 80%">
                <form method="POST" style="height: 100%">
                    <div class="campo">
                        <h6 style="width: 100%; text-align: start;">Username</h6>
                        <input type="text" name="username">
                    </div>
                    <div class="campo">
                        <h6 style="width: 100%; text-align: start;">Email</h6>
                        <input type="text" name="email">
                    </div>
                    <div class="campo">
                        <h6 style="width: 100%; text-align: start;">Password</h6>
                        <input type="password" name="password">
                    </div>
                    <div class="campo">
                        <input type="submit" name="register" class="primary" value="Registrar">
                    </div>
                </form>
            </main>
        </div>
    

    <script>
        function changeRouter(router) {
            document.location.href = router;
        }
        function register() {
            document.getElementById('aside').style.left = "-110%";
            document.getElementById('forms').style.right = "105%";
            document.getElementById('gradient').style.marginLeft = "-100%";
            document.getElementById('aside2').style.left = "70%";
            document.getElementById('forms2').style.right = "75%";
        }
        function login() {
            document.getElementById('aside').style.left = "10%";
            document.getElementById('forms').style.right = "5%";
            document.getElementById('gradient').style.marginLeft = "0";
            document.getElementById('aside2').style.left = "190%";
            document.getElementById('forms2').style.right = "-105%";
        }
    </script>
    <?php 

    ?>
</body>

</html>