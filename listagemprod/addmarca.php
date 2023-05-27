<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar marca</title>
</head>
<body>
    <h1>INCLUIR MARCA</h1>
    <form action="addmarcabd.php" method="post"> <!--NÃO ESQUECER DO COLOCAR METHOD!!!!-->
        <div>
            <label for="nomemarca">Nome da marca:</label>
            <input type="text" name="addmarca" style="text-transform: uppercase;">
        </div>
        <br>
        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>