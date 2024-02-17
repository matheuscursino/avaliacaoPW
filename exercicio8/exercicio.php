<html>
    <style>
        .input {
            margin: 20px;
            padding: 20px;
        }


        .botao {
            padding: 10px;
            margin: 20px;
            border: none;
            border-radius: 8px;
            color: white;
            cursor: pointer;
        }

        .enviar {
            background-color: green;
        }

        .limpar {
            background-color: red;
        }

        .resultado {
            display: none;
        }
    </style>
    <head>
        <title>Calcular média</title>
    </head>
    <body>
        <form action="resultado.php" method="POST">
            <a>Digite a nota 1:</a>
            <input name="nota1"> </br>
            <a>Digite a nota 2:</a>
            <input name="nota2"> </br>
            <a>Digite a nota 3:</a>
            <input name="nota3"> </br>
            <a>Digite a nota 4:</a>
            <input name="nota4"> </br>
            <button type="submit" class="botao enviar" >Enviar</button>
            <button class="botao limpar">Limpar</button>
        <form>
        <div class="resultado">
        </div>
    </body>
</html>