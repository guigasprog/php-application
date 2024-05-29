<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaos-Trials</title>
</head>

<style>
* {
    margin: 0;
    padding: 0;
    color: #ffffff;
}

.content {
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
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
}
</style>

<body style="width: 100%; height: 100vh; background-color: #111111;">
    <header style="width: 100%; 
    height: 10%; 
    background-color: #41414120;
    display: flex; justify-content: center; align-items: center">
        <h1>Chaos-Trials</h1>
    </header>

    <aside style="width: 20%; height: 86%; margin: 1%; 
    background-color: #41414120; border-radius: 10px;">
        <div class="content" style=" 
    overflow-y: scroll;">
            <div class="card" href="./account/Account.View.php">
                <a href="./account/Account.View.php">
                    <h1>Accounts</h1>
                </a>
            </div>
            <div class="card">

            </div>
        </div>
    </aside>

</body>

</html>