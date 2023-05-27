<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>

<body>
    <h1>Produtos</h1>
    <form action="addproduto.php" method="post">
        <div>
            <label for="tipo">Tipo:</label>
            <select name="tipo">
                <option value="">TIPO</option>
                <option value="GUITARRA">GUITARRA</option>
                <option value="VIOLÃO">VIOLÃO</option>
            </select>
        </div>
        <br>
        <div>
            <label for="estoque">Estoque:</label>
            <input type="number" name="estoque" placeholder="Ex.: 000">
        </div>
        <br>
        <div>
            <label for="preco">Preço:</label>
            <input type="number" name="preco" placeholder="Ex.: 0,000">
        </div>
        <br>
        <div>
            <label for="marca">MARCA:</label>
            <select name="marca">
                <option>SELECIONE A MARCA</option>
                <option value="1">FENDER</option>
                <option value="2">GUIBSON</option>
            </select>
        </div>
        <br>
        <div>
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" cols="40" rows="5"></textarea>
        </div>
        <br>
        <input type="submit" value="ENVIAR">
    </form>
    <br>
    <a href="addmarca.php">Adicionar marca</a><br>
</body>

</html>