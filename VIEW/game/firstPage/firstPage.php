<?php 
include_once 'C:\xampp\htdocs\php-application\BLL\Account.BLL.php';
use BLL\Account;

include_once 'C:\xampp\htdocs\php-application\BLL\Character.BLL.php';
use BLL\Character;

$account = \BLL\Account::SelectByEmail($_COOKIE['account']);

$characters = \BLL\Character::SelectByIdAccount($account->getId());
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

body {
    width: 100%;
    height: 100vh;
    background-color: #111111;
    overflow: hidden;
    display: flex;
    flex-direction: column;
}

.starting {
    width: 100%;
    height: 10%;
    background-color: transparent;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 15%;
    animation: starting 3s forwards normal;
}

@keyframes starting {
    0% {
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    90% {
        background-color: transparent;
    }
    100% {
        margin-top: 0;
        background-color: #141414;
    }
}

@keyframes startingMenu {
    from {
        opacity: 0;
        margin-top: 15%;
    }
    to {
        opacity: 1;
        margin-top: 0;
    }
}

main {
    width: 100%;
    height: 90%;
    background-color: #111111;
    animation: startingMenu 3s forwards normal;
    display: flex;
    gap: 1%;
}

.cardPersonagem {
    width: 20%;
    height: 100%;
    background-color: #141414;
    transform: skew(-15deg);
    justify-content: center;
    align-items: center;
    display: flex;
    overflow: hidden;
    transition: all 500ms;
    z-index: 0;
    position: relative;
}

.cardPersonagem:hover {
    background-color: #414141;
    scale: 1.02;
}

.data {
    transform: skew(15deg);
}

</style>

<body>
    <div class="starting">
        <h5 class="welcome">
            Welcome 
            <?php echo $account->getUsername();
            ?>
        </h5>
    </div>
    <main>
        <?php 
            if(!empty($characters)) {
                foreach($characters as $character) {
            
        ?>
            <div class="cardPersonagem">
                <div class="data">
                    <h6>
                        <?php echo $character->getName() ?>
                    </h6>
                </div>
            </div>
        <?php }} else {?>
            <div class="cardPersonagem" style="margin: 0 auto;">
                <div class="data">
                    <h1>
                        +
                    </h1>
                </div>
            </div>
            <?php }?>
    </main>

    <script>
        function changeRouter(router) {
            document.location.href = router;
        }
    </script>
</body>

</html>