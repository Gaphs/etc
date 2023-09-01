<?php 
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    <a href="interface.php" class="a1">CADASTRO</a>
    <a href="log.php" class="a1">LOGIN</a>
    </header>
    <b>Bem-Vindo(a), <?php echo $_SESSION['nome']; ?></b>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus doloremque, ducimus laudantium mollitia quod laborum laboriosam eius, repellendus neque delectus consequuntur ipsa soluta voluptatem quae reprehenderit cum minus quaerat! Nemo! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt veritatis laborum cum quas quos laboriosam impedit? Accusamus veritatis voluptate quas quasi commodi, animi porro alias totam fugiat nobis dignissimos esse! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam eos deleniti qui praesentium expedita dolores sapiente fuga, cumque ipsa, unde, ipsum suscipit voluptatibus ipsam error. Esse saepe tempora quasi dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, veritatis sequi nostrum temporibus ullam consequuntur, voluptatem fugit laudantium at ab quos, numquam voluptatibus ipsa molestiae corporis error perferendis sunt ratione. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde et sed aut omnis tempore sit harum quas inventore recusandae atque ex nulla quia cum, odio consequatur velit provident. Voluptatibus, fugit.</p>
</body>
</html>