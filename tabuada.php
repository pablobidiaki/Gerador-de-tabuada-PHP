<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin: 0px;
            padding: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            background-color: #1e5cb8;
        }

        header{
            margin: 5px;
        }

        header > h1 {
            text-align: center;
            color: white;
        }

        main{
            margin: 5px;
        }

        div{
            display:block;
            margin:auto;
            width: 350px;
            background-color: rgba(255, 255, 255, 0.926) ;
            text-align: center;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.432);
        }

        .botao{
            width: 140px;
            border: 1px solid black;
            border-radius: 15px;
            text-align: center;
            margin: 6px;
            font-size: 20px;
            width: 100px;
            background-color: #c2bebe;
        }

        .botao:hover{
            cursor: pointer;
        }

        footer {
            display:block;
            margin:auto
        }

        footer > p{
            font-size: smaller;
            color: white;
            text-align: center;
            margin:6px;
        }

        a{
            color:goldenrod;
            text-decoration: none;
        }

        .tabuada > p{
            padding:5px;
        }
    </style>
    <title>Tabuadas</title>
</head>
<body>
<header>
        <h1> Gerador de Tabuada</h1>
    </header>
<div class="tabuada">
        <?php
            $num = $_POST['num1'];
            $quantlinhas = $_POST['numlinha'];

            echo "<h2>Tabuada do $num com $quantlinhas linha :</h2>";

            for($i = 0; $i <= $quantlinhas; $i++){
                $res = 0;
                $res = $i*$num;
                echo "<p>$num x $i = $res</p>";
            };

        ?>
        <a href="index.html"><input class="botao" type="button" value="Voltar"></a>
</div>

    <footer>
        <p>Desenvolvido por <a href="https://www.linkedin.com/in/pablo-bidiaki/" target="_blank">Pablo Bidiaki</a></p>
    </footer>
</body>
</html>