<?php
include_once 'C:\xampp\htdocs\php-application\DAL\Account.php';
//include_once '../../DAL/Account.php';
use DAL\Account;

$dalAccount = new \DAL\Account();

$accounts = $dalAccount->Select();
?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

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
    height: 95%; 
    margin: 1%; 
    background-color: #41414120; 
    border-radius: 10px;
    display: flex; 
    justify-content: center;
}

main {
    width: 80%;
    height: 95%;
    margin: 1%;
    border-radius: 10px;
    background-color: green;
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
    height: 120px;
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

.conteudo {
    width: 100%; 
    height: 100%;
    display: flex; 
    flex-direction: row;
    justify-content: center; 
    align-items: center;
}

.row {
    background-color: #111111;
    transition: 300ms;
}

.row:hover {
    background-color: #41414120;
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
    color: #c155ff;
    background-color: transparent;
}
</style>

<body>
    <header>
        <h3>Chaos-Trials</h3>
    </header>
    <div class="conteudo">
        <aside>
            <div class="content">
                <div class="card" href="/php-application/VIEW/account/">
                    <a href="/php-application/VIEW/account/">
                        <h5>Accounts</h5>
                    </a>
                </div>
                <div class="card">

                </div>
            </div>
        </aside>
    <main>
        <header style="width: 100%; height auto; display: flex; justify-content: center;">
            <div class="button">
                <button class="primary">
                    Back
                </button>
            </div>
            <h1 style="width: 85%; display: flex;
        align-items: center;
        flex-direction: column;">List Accounts</h1>
        </header>
        <table style="background-color: #41414120; margin: 1%">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>ID Character</th>
            </tr>

            <?php foreach ($accounts as $account) { ?>
            <tr class="row">
                <td><?php echo $account->getId(); ?></td>
                <td><?php echo $account->getUsername(); ?></td>
                <td><?php echo $account->getEmail(); ?></td>
                <td><?php echo $account->getPassword(); ?></td>
                <td><?php echo $account->getIdCharacter(); ?></td>
            </tr>
            <?php } ?>

        </table>
    </main>

    <script>
        function changeRouter(router) {
            document.location.href = router;
        }
    </script>
</body>

</html>