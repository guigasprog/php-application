<?php 
    include_once '../../../BLL/Character.BLL.php'; 
    use BLL\Character;

    include_once '../../../BLL/Attribute.BLL.php'; 
    use BLL\Attribute;

    include_once '../../../BLL/Account.BLL.php'; 
    use BLL\Account;
    

    $id = $_GET['id'];

    $character =  \BLL\Character::SelectById($id);
    $account =  \BLL\Account::SelectById($character->getIdAccount());
    if($account->getEmail() != $_COOKIE['account']) header('Location: http://localhost:80/php-application/VIEW/game/firstPage/firstPage.php');
    $attribute = \BLL\Attribute::SelectById($character->getIdAttribute());
    

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaos-Trials</title>
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

.background {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: 0;
    left: 0;
}

.background img {
    width: 100%;
    margin-top: -7%;
    filter: blur(2px) brightness(85%);
}

#informacoes {
    position: absolute;
    top: 15vh;
    left: 20vw;
    width: 60vw;
    height: 70vh;
    background-color: #1d1d1de1;
    z-index: 5000;
    border-radius: 10px;
    border: 2px solid #141414;
    overflow: hidden;
}

header {
    width: 100%;
    height: 20%;
    background-color: #1d1d1de1;
    display: flex;
    justify-content: center;
    align-items: center;
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

button.primary {
    border: 3px solid #c155ff;
    background-color: #c155ff;
}

button.primary:hover {
    background-color: transparent;
}

button.primary:hover h6 {
    color: #c155ff;
}

.life {
    width: 85%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.progress-bar-life {
  --progress: <?php echo $character->getVidaAtual()*100/$character->getVida(); ?>;
  height: 30px;
  padding: 5px;
  background-color: #ccc;
  display: flex;
  border-radius: 100px;
  width: 80%;
  margin: 0 auto;
}

.progress-bar-life::before {
  content: "";
  width: calc(var(--progress) * 1%);
  background-color: hsl( calc(var(--progress) * 1.2) , 80%, 50%);
  transition: all 0.2s ease;
  border-radius: 100px;
}

.conteudo {
    width: 100%;
    height: 80%;
    display: flex;
}

.treino {
    width: 33%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 30px;
}

.game {
    width: 77%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 10px;
    padding: 15px;
}

.game button {
    width: 89%;
}

.terminal {
    width: 89%;
    height: 89%;
    border-radius: 15px;
    border: 2px solid #141414;
    overflow: hidden;
}
.value {
    width: 100%;
    height: 100%;
    background-color: #282828;
    padding: 15px;
    display: flex;
    justify-content: end;
    align-items: start;
    flex-direction: column;
}

.value h6 {
    font-family: "VT323", monospace;
    font-size: 28px;
}

</style>

<body>
    <div class="background">
        <img src="../imgs/background-game.gif">
    </div>
    <modal id="informacoes">
        <header>
            <div class="esquerda" style="width: 20%; height: 100%;
            display: flex; justify-content: center; align-items: center;">
                <button onclick="voltar()" class="primary">
                    <h6>Voltar</h6>
                </button>
            </div>
            <div class="meio" style="width: 60%; height: 100%;
            display: flex; justify-content: center; align-items: center;">
                <div class="life">
                    <h6>HP: <?php echo $character->getVidaAtual(); ?> / <?php echo $character->getVida();?></h6>
                    <div class="progress-bar-life"></div>
                </div>
            </div>
            <div class="direita" style="width: 20%; height: 100%;
            display: flex; justify-content: center; align-items: center;">
                <h6>Xp: <?php echo $character->getXp(); ?> / <?php echo $character->getXpNecessario();?></h6> 
            </div>
        </header>
        <div class="conteudo">
            <div class="treino">
                <h6>Treinamento</h6>
                <button onclick="acao(1)" class="primary">
                    <h6>Socar</h6>
                </button>
                <button onclick="acao(2)" class="primary">
                    <h6>Meditar</h6>
                </button>
                <button onclick="acao(3)" class="primary">
                    <h6>Correr</h6>
                </button>
                <button onclick="acao(4)" class="primary">
                    <h6>Estudar</h6>
                </button>
            </div>
            <div class="game">
                <div class="terminal">
                    <div class="value">
                        
                    </div>
                </div>
                <button onclick="acao(5)" class="primary">
                    <h6>Descansar</h6>
                </button>
            </div>
        </div>
    </modal>
    <script>
        function voltar() {
            location.href = '../firstPage/firstPage.php';
        }

        function acao(acao) {
            location.href = '../acao/acao.php?id=<?php echo $character->getId(); ?>&acao='+acao;
        }
    </script>
</body>

</html>