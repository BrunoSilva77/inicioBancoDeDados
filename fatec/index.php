<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Primeiro site</title>
</head>
<body>

    <div>

        <form action="gravar_produtos.php" method="get">

            <div>

                <h1>Formulário</h1>

            </div>

            <div>

                <label for="marca">Marca:</label>
                <input type="text" name="marca" id="inp_marca">

            </div>

            <div>

                <label for="preco">Preço:</label>
                <input type="text" name="preco" id="inp_preco">

            </div>

            <div>

                <label for="estoque">Estoque:</label>
                <input type="text" name="estoque" id="inp_estoque">

            </div>

            <div>

                <label for="descricao">Descrição:</label>
                <br>
                <textarea name="descricao" id="txt_descricao" cols="30" rows="10"></textarea>

            </div>

            <div class="btn_enviar">

                <input type="submit" id="submit" name="Enviar" value="Enviar">

            </div>

            <div>

                <button>

                        <a href="/listagem_produtos.php">Produtos Cadastrados</a>

                </button>

            </div>

        </form>

    </div>

</body>
</html>