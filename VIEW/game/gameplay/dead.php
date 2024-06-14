<?php

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['voltar'])) header("Location: ../firstPage/firstPage.php");

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
    text-align: center;
}

.text {
    width: 100%;
    height: 100%;
    background-image: linear-gradient(to bottom, transparent, black 35%, black 70%, transparent);
    display: flex;
    justify-content: center; align-items: center;
    flex-direction: column;
}

</style>

<body style="width: 100%; height: 100vh;
margin: 0; padding: 0;
overflow: hidden; display: flex;
justify-content: center; align-items: center;
flex-direction: column;">
    <img src="../imgs/dead.gif" style="width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: -1;">
    <div class="text">
        <h1>Você <span style="color: red;">Morreu</span></h1>
        <h3>Aperte em qualquer lugar<br> na tela para voltar</h3>
    </div>
    <form method="POST" style="width: 100%; height: 100%; position: absolute; top: 0; left: 0; opacity: 0; z-index: 5000;">
        <input type="submit" name="voltar" style="width: 100%; height: 100%;">
    </form>
</body>
</html>
