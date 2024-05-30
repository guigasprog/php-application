

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
}
.background {
    width: 100%;
    margin-top: -1%;
    z-index: -1;
    position: absolute;
}

aside {
    width: 20%;
    height: 30%;
    position: absolute;
    top: 15%;
    left: 10%;
    text-align: center;
}

.campo {
    width: 100%;
    height: 25%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
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

.forms {
    width: 20%;
    height: 80%;
    position: absolute;
    top: 10%;
    right: 5%;
    background: #14141495;
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

</style>

<body>
    <img src="./imgs/background.jpg" class="background">
    <aside>
        <h6>Jogue <span style="color: red">Chaos-Trials</span><br>Logue já</h6>
    </aside>

    <div class="forms">
        <header style="height: 20%; display: flex; justify-content: center; align-items: center;">
            <h5>Login</h5>
        </header>
        <main style="height: 80%">
            <div class="campo">
                <h6 style="width: 100%; text-align: start;">Username</h6>
                <input type="text">
            </div>
            <div class="campo">
                <h6 style="width: 100%; text-align: start;">Email</h6>
                <input type="text">
            </div>
            <div class="campo">
                <h6 style="width: 100%; text-align: start;">Password</h6>
                <input type="password">
            </div>
            <div class="campo">
                <button class="primary">Submit</button>
            </div>
        </main>
    </div>

    <script>
        function changeRouter(router) {
            document.location.href = router;
        }
    </script>

</body>

</html>