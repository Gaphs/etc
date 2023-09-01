<?php

include_once('connect.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaa = $_POST['senhaa'];

if($senha != $senhaa || strlen($senha) < 8) {
    echo "Senhas não conferem ou não se enquadram nos padrões exigidos pelo sistema";die();
} 

    $sql = "INSERT INTO usuario2 (nome, senha, email) VALUES ('$nome', '$senha', '$email')";
        try {
            $insert = mysqli_query($conexao, $sql);
            
            session_start();
        $_SESSION['nome']= $nome;
            header('Location: home.php');

        } catch (Exception $e) {
            die($e->getMessage());
        }

?>