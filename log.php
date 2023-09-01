<?php

if(isset($_POST['email']) && (isset($_POST['senha']))){

include_once('connect.php');

$sql = "SELECT * FROM usuario2 WHERE nome ='$nome' and senha = '$senha'";
$query = mysqli_query($conexao, $sql);
$user = $query->fetch_assoc();
$nome = $_POST['nome'];
$senha = $_POST['senha']; 

var_dump($user);

if (mysqli_num_rows($query)== 0) {
    echo "<b>E-mail ou senha incorretos</b>";
} else {
    if (!isset($_SESSION)) {
        session_start();
        $_SESSION['nome']= $nome;
        header('location:home.php');
    }
}
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
body {
            background-color: rgb(255, 180, 242);
            text-align:center;
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
            justify-content: space-around;
            padding: 1%;
        }
    </style>
</head>

<body>
<header>
    <a href="interface.php" class="a1">CADASTRO</a>
    <a href="home.php" class="a1">HOME</a>
    </header>
    <h1>LOGIN </h1>
    <form action="home.php" method="post" >
        <input type="email" placeholder="E-mail" name="email" required><br><br>
        <input type="password" placeholder="Senha" name="senha" required><br><br>
        <input type="submit" placeholder="Acessar" value="Enviar" class="sub">
    </form>
</body>

</html>