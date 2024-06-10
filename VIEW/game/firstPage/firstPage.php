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
    filter: grayscale(1);
    cursor: pointer;
}

.cardPersonagem:hover {
    background-color: #414141;
    scale: 1.02;
    filter: grayscale(0);
}

.data {
    justify-content: center;
    align-items: center;
    display: flex;
    position: relative;
    width: 100%;
    height: 100%;
    transform: skew(15deg);
}
.background-card {
    width: 100%; height: 100%;
    justify-content: center;
    align-items: center;
    display: flex;
    position: absolute;
    z-index: 0;
}

.nome {
    width: 110%;
    height: 10%;
    background: #111111;
    justify-content: center;
    align-items: center;
    display: flex;
    position: absolute;
}

#dialog {
    position: absolute;
    top: 5vh;
    left: 20vw;
    width: 60vw;
    height: 90vh;
    background-color: #1d1d1dec;
    z-index: -1;
    opacity: 0;
    transition: 300ms;
    border-radius: 20px;
    overflow: hidden;
}

.close {
    position: absolute;
    top: 2%;
    right: 5%;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    filter: grayscale(1);
    transition: 200ms;
    cursor: pointer;
}

.close:hover {
    filter: grayscale(0);
}

.header-dialog {
    width: 100%;
    height: 11%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #1d1d1dec;
}

.content {
    width: 100%;
    height: 89%;
    background-color: #1d1d1dfb;
    display: flex;
}

.col-6 {
    width: 50%;
    height: 100%;
    padding: 5%;
}

.row {
    width: 100%;
    height: auto;
}

input[type=number]::-webkit-inner-spin-button {
  -webkit-appearance: none;
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
                    <div class="background-card">
                        <img src="../imgs/class/<?php echo $character->getClass(); ?>.jpeg" alt="" srcset="">
                    </div>
                    <div class="nome">
                        <h6 style="z-index: 1">
                            <?php echo $character->getName() ?>
                        </h6>
                    </div>
                    
                </div>
            </div>
        <?php } ?>
        <?php if(!sizeof($characters) == 5) { ?>
            <div class="cardPersonagem" onclick="openDialog('1')">
                <div class="data">
                    <h1>
                        +
                    </h1>
                </div>
            </div>
        <?php }} else {?>
            <div class="cardPersonagem" style="margin: 0 auto;" onclick="openDialog('1')">
                <div class="data">
                    <h1>
                        +
                    </h1>
                </div>
            </div>
            <?php }?>
    </main>

    <modal id="dialog">
        <div class="close" onclick="openDialog('2')">
            <img src="../imgs/remove.png" width="32" height="32">
        </div>
        <div class="header-dialog"><h3>Criação de Personagem</h3></div>
        <form class="content" method="POST">
            <div class="col-6">
                <div class="row">
                    <h5>Nome do Personagem</h5>
                    <input type="text" id="name" name="namePerson" required>
                </div>
                <div class="row">
                    <h5>Classe</h5>
                    <p>
                        <label>
                            <input class="with-gap" name="class" value="Arqueiro" type="radio" onchange="valorClass()" />
                            <span>Arqueiro</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input class="with-gap" name="class" value="Assassino" type="radio" onchange="valorClass()" />
                            <span>Assassino</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input class="with-gap" name="class" value="Clerigo" type="radio" onchange="valorClass()" />
                            <span>Clerigo</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input class="with-gap" name="class" value="Guerreiro" type="radio" onchange="valorClass()" />
                            <span>Guerreiro</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input class="with-gap" name="class" value="Mago" type="radio" onchange="valorClass()" />
                            <span>Mago</span>
                        </label>
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <h5>Atributos - Selecione a Classe</h5>
                    <p>
                        <p>Força</p>
                        <input type="number" name="strength" id="strength">
                    </p>
                    <p>
                        <p>Destreza</p>
                        <input type="number" name="dexterity" id="dexterity">
                    </p>
                    <p>
                        <p>Vitalidade</p>
                        <input type="number" name="vitality" id="vitality">
                    </p>
                    <p>
                        <p>Inteligência</p>
                        <input type="number" name="intelligence" id="intelligence">
                    </p>
                    <p>
                        <p>Fé</p>
                        <input type="number" name="mind" id="mind">
                    </p>
                </div>
            </div>
        </form>
    </modal>

    <script>

        function changeRouter(router) {
            document.location.href = router;
        }

        function openDialog(a) {
            if(a == '1') {
                document.getElementById("dialog").style.zIndex = "5000";
                setTimeout(
                    ()=>document.getElementById("dialog").style.opacity="1", 100
                )
            } else {
                document.getElementById("dialog").style.opacity="0";
                setTimeout(
                    ()=>document.getElementById("dialog").style.zIndex = "-1", 100
                )
            }
        }

        function valorClass() {
            var classes = document.querySelector('input[name="class"]:checked').value;
            var forca = document.querySelector('input[name="strength"]');
            var destreza = document.querySelector('input[name="dexterity"]');
            var vitalidade = document.querySelector('input[name="vitality"]');
            var inteligencia = document.querySelector('input[name="intelligence"]');
            var fe = document.querySelector('input[name="mind"]');
            if(classes == "Arqueiro") {
                forca.value = 1;
                destreza.value = 4;
                vitalidade.value = -3;
                inteligencia.value = 4;
                fe.value = 4;
            } else if(classes == "Assassino") {
                forca.value = 5;
                destreza.value = 5;
                vitalidade.value = 0;
                inteligencia.value = 5;
                fe.value = -5;
            } else if(classes == "Guerreiro") {
                forca.value = 5;
                destreza.value = 0;
                vitalidade.value = 5;
                inteligencia.value = -3;
                fe.value = 3;
            } else if(classes == "Mago") {
                forca.value = -5;
                destreza.value = -5;
                vitalidade.value = -5;
                inteligencia.value = 15;
                fe.value = 10;
            } else if(classes == "Clerigo") {
                forca.value = -5;
                destreza.value = -5;
                vitalidade.value = 0;
                inteligencia.value = 10;
                fe.value = 10;
            } else {
                forca.value = 0;
                destreza.value = 0;
                vitalidade.value = 0;
                inteligencia.value = 0;
                fe.value = 0;
            };
        }

    </script>
</body>

</html>