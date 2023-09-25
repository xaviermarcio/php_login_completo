<?php
/* DOIS MODOS POSSÍVEIS -> local, produção*/

$modo = 'local';

if($modo == 'local'){
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "projeto_login";
}

if($modo == 'producao'){
    $servidor = "";
    $usuario = "";
    $senha = "";
    $banco = "";
}

try{
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Sucesso";
}catch(PDOEXception $errp){
    echo "Fala ao conectar com o banco!";
}
?>