<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
    <body>
        <div id="firstDiv">
            <form action="getInfo.php" method="POST">
                <?php include "cookieHandler.php";?>
                <label for="Usuario">Usuario:</label><br>
                <input type="text" id="usuario" name="usuario"><br>
                <label for="senha">Senha:</label><br>
                <input type="password" id="senha" name="senha"><br>
                <button type="submit">Logar</button>
            </form>
        </div>    
</body>
</html>