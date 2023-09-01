<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <style>
        body {
            text-align: center;
            background-color: rgb(255, 180, 242);
        }
        input {
            padding: 1%;
            border-radius: 100px;
            border: none;
        }
        .sub {
            padding: 1%;
            width: 100px;
            border: none;
            background-color: rgb(214, 88, 214);
            border-radius: 100px;
            color: white;
        }

        h1 {
            color: white;
            font-family: CityBlueprint Regular;
            background-color: rgb(255, 135, 235);
            padding: 2%;
        }
        a{
            text-decoration:none;
            color: white;
            font-size: 2.5vw;
            font-weight: bold;
        }
        a:hover{
            color:white;
        }
        header{
            display:flex;
            flex-direction:row;
            width: 98%;
            background-color: rgb(255, 135, 235);
            text-align: center;
            justify-content: space-around;
            padding: 1%;
        }
        </style>
</head>
<body>
<header>
    <a href="home.php" class="a1">HOME</a>
    <a href="log.php" class="a1">LOGIN</a>
    </header>
    <h1>CADASTRO DE USUÁRIO</h1>
    <form action="send.php" method="post"  >
        <input type="text" placeholder="Nome" name="nome" required><br><br>
        <input type="email" placeholder="E-mail" name="email" required><br><br>
        <input type="password" placeholder="Senha" name="senha" required><br><br>
        <input type="password" placeholder="Confirmação de Senha" name="senhaa" required><br><br>
        <input type="submit" placeholder="Cadastrar" value="Enviar" class="sub">
    </form>
</body>
</html>