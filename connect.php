<?php
$servidor= '127.0.0.1';
$usuario= 'Ellie';
$senha='12345678';
$database='formulario';

try { 
    $conexao = mysqli_connect($servidor, $usuario, $senha, $database, 6033);
    echo 'OK';
} catch (Exception $e) {
    die($e->getMessage());
} 


?>