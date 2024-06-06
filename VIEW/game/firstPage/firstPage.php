<?php 
include_once 'C:\xampp\htdocs\php-application\BLL\Account.BLL.php';
use BLL\Account;


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
    <title>Accounts</title>
</head>

<style>

* {
    margin: 0;
    padding: 0;
    color: #ffffff;
    font-family: "Space Grotesk", sans-serif;
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
    <button class="secondary" onclick="register()">Registrar-se</button>
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
                        <input type="submit" name="login" class="primary" value="Logar"></button>
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
    <button class="secondary" onclick="login()">Logar-se</button>
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
                        <input type="submit" name="register" class="primary" value="Registrar"></button>
                    </div>
                </form>
            </main>
        </div>
    

    <script>
        function changeRouter(router) {
            document.location.href = router;
        }
    </script>
    <?php 

    ?>
</body>

</html>