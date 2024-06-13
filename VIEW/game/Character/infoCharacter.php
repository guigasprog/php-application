<?php 
    include_once '../../../BLL/Character.BLL.php'; 
    use BLL\Character;

    include_once '../../../BLL/Attribute.BLL.php'; 
    use BLL\Attribute;
    

    $id = $_GET['id'];
 
    $character =  \BLL\Character::SelectById($id);
    $attribute = \BLL\Attribute::SelectById($character->getIdAttribute());
    

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
}

.background {
    width: 101%;
    height: 101%;
    position: absolute;
    z-index: -1;
    filter: blur(2px);
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
    height: 15%;
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

.status {
    width: 100%;
    height: 100%;
    position: absolute;
    display: flex;
    justify-content: center;

}

.xp {
    width: 85%;
    height: 20%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.progress-bar-xp {
  --progress: <?php echo ($character->getXp()*100/$character->getXpNecessario()) > 100 ? 100 : $character->getXp()*100/$character->getXpNecessario(); ?>;
  height: 30px;
  padding: 5px;
  background-color: #ccc;
  display: flex;
  border-radius: 100px;
  width: 80%;
  margin: 0 auto;
}

.progress-bar-xp::before {
  content: "";
  width: calc(var(--progress) * 1%);
  background-color: #1eff00;
  transition: all 0.2s ease;
  border-radius: 100px;
}

.vida {
    width: 15%;
    margin-top: 2%;
    height: 90%;
    display: flex;
    justify-content: start;
    align-items: center;
    flex-direction: column;
}

.progress-bar-life {
  --progresslife: <?php echo $character->getVidaAtual()*100/$character->getVida(); ?>;
  width: 30px;
  padding: 5px;
  background-color: #ccc;
  display: flex;
  align-items: end;
  border-radius: 100px;
  height: 75%;
  margin: 0 auto;
  
}

.progress-bar-life::before {
  content: "";
  width: 100%;
  height: calc(var(--progresslife) * 1%);
  background-color: hsl( calc(var(--progresslife) * 1.2) , 80%, 50%);
  transition: all 0.2s ease;
  border-radius: 100px;
}

.atributos {
    width: 85%;
    height: 65%;
    position: absolute;
    top: 35%;
    left: 15%;
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}

.atributo {
    width: 25%;
    height: 40%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

</style>

<body>
    <div class="background">
        <img src="../imgs/background-info.gif" style="width: 100%; height: 100%">
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
                <h5><?php echo $character->getName(); ?> - <?php echo $character->getClass(); ?></h5>
            </div>
            <div class="direita" style="width: 20%; height: 100%;
            display: flex; justify-content: center; align-items: center;">
                <h5>Lvl:<?php echo $character->getLevel(); ?></h5>
            </div>
        </header>
        <div class="status">
            <div class="vida">
                <h6>HP: <?php echo $character->getVidaAtual(); ?> / <?php echo $character->getVida();?></h6>
                <div class="progress-bar-life"></div>
            </div>
            <div class="xp">
                <h6>Xp: <?php echo $character->getXp(); ?> / <?php echo $character->getXpNecessario();?></h6>
                <div class="progress-bar-xp"></div>
            </div>
        </div>
        <div class="atributos">
            <div class="atributo"><h6>Força: <?php echo $attribute->getStrength(); ?></h6></div>
            <div class="atributo"><h6>Destreza: <?php echo $attribute->getDexterity(); ?></h6></div>
            <div class="atributo"><h6>Vitalidade: <?php echo $attribute->getVitality(); ?></h6></div>
            <div class="atributo"><h6>Inteligência: <?php echo $attribute->getIntelligence(); ?></h6></div>
            <div class="atributo"><h6>Fé: <?php echo $attribute->getMind(); ?></h6></div>
            <div class="atributo"><h6>Pontos: <?php echo $attribute->getPontos(); ?></h6></div>
        </div>
        
        
    </modal>

</body>


    <script>

        function voltar() {
            location.href = '../firstPage/firstPage.php';
        }

    </script>
</body>

</html>