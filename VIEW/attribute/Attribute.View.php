<?php
include_once 'C:\xampp\htdocs\php-application\DAL\Attribute.php';
// include_once '../../DAL/Attribute.php';
use DAL\Attribute;

$dalAttribute = new \DAL\Attribute();

$attributes = $dalAttribute->Select();
?>



<!DOCTYPE html>
<html lang="pt-BR">

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
    display: flex;
    align-items: center;
    flex-direction: column;
}

header {
    width: 100%; 
    height: 10%; 
    background-color: #41414120;
    display: flex; 
    justify-content: center; 
    align-items: center
}

aside {
    width: 20%; 
    height: 90%; 
    margin: 1%; 
    background-color: #41414120; 
    border-radius: 10px;
    display: flex; 
    justify-content: center;
}

main {
    width: 80%;
    height: 90%;
    margin: 1%;
    border-radius: 10px;
    background-color: #41414110;
    overflow-y: scroll;
}

.content {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    flex-direction: column;
    overflow: hidden;
    overflow-y: scroll;
}

.card {
    width: 90%;
    height: 80px;
    margin: 3%;
    background-color: #41414120;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 300ms;
    cursor: pointer;
}

.card:hover {
    background-color: #41414160;
}

.cardSelected {
    background-color: #41414160;
}

.cardSelected:hover {
    background-color: #41414160;
}

.conteudo {
    width: 100%; 
    height: 90%;
    display: flex; 
    flex-direction: row;
    justify-content: center; 
    align-items: center;
}

.row {
    background-color: #111111;
    transition: 300ms;
}

.rowSec {
    background-color: #11111120;
    transition: 300ms;
} 

.row:hover {
    background-color: #41414120;
}

.rowSec:hover {
    background-color: #22222260;
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

</style>

<body>
    <header>
        <h4>Chaos-Trials</h4>
    </header>
    <div class="conteudo">
        <aside>
            <div class="content">
                <div class="card" onclick="changeRouter('../account/Account.View.php')">
                    <a>
                        <h6>Accounts</h6>
                    </a>
                </div>
                <div class="card" onclick="changeRouter('../character/Character.View.php')">
                    <a>
                        <h6>Characters</h6>
                    </a>
                </div>
                <div class="card cardSelected">
                    <a>
                        <h6>Attributes</h6>
                    </a>
                </div>
            </div>
        </aside>
    <main>
        <header style="width: 100%; height: auto; display: flex; justify-content: center;
        border-bottom: 3px solid #111111">
            <div class="button" style="width: 25%;display: flex;
        align-items: center;
        flex-direction: column;">
                <button class="primary" onclick="changeRouter('../main.php')">
                    <h6>Back</h6>
                </button>
            </div>
            <h3 style="width: 75%; display: flex;
        align-items: center;
        flex-direction: column;">List Attribute</h3>
        </header>
        <table style="background-color: #41414120;">
            <tr>
                <th>ID</th>
                <th>Strength</th>
                <th>Dexterity</th>
                <th>Vitality</th>
                <th>Intelligence</th>
                <th>Mind</th>
            </tr>

            <?php $i=0;
            foreach ($attributes as $attribute) { 
                $i++;
                if($i%2 != 0) echo "<tr class='row'>";
                else echo "<tr class='rowSec'>";
            ?>
                <td><?php echo $attribute->getId(); ?></td>
                <td><?php echo $attribute->getStrength(); ?></td>
                <td><?php echo $attribute->getDexterity(); ?></td>
                <td><?php echo $attribute->getVitality(); ?></td>
                <td><?php echo $attribute->getIntelligence(); ?></td>
                <td><?php echo $attribute->getMind(); ?></td>
            </tr>
            <?php } ?>

        </table>
    </main>
</div>
    <script>
        function changeRouter(router) {
            document.location.href = router;
        }
    </script>
</body>

</html>