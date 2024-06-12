<?php 
    include_once '../../../BLL/Character.BLL.php'; 
    use BLL\Character;

    include_once '../../../BLL/Attribute.BLL.php'; 
    use BLL\Attribute;
    

    $id = $_GET['id'];
 
    $character =  \BLL\Character::SelectById($id);
    $attribute = \BLL\Attribute::SelectById($character->getId());
    

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

</style>

<body>
    <div class="background">
        <img src="../imgs/background-game.gif">
    </div>
    <modal id="informacoes">

    </modal>
</body>

</html