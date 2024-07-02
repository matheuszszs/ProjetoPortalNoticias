<?php
session_start();
include_once './config/config.php';
include_once './classes/Noticias.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n = new Noticias($db);
    $idusu =  $_SESSION['usuario_id'];
    $titulo = $_POST['titulo'];
    $noticia = $_POST['noticia'];
    $data = date('Y-m-d');
  
    $n->registrar($idusu, $data, $titulo, $noticia);
    header('Location: crudNoticias.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./registrarNot.css">
    <title>Registrar Notícia</title>
</head>

<body>
    <a href="crudNoticias.php"><button class="botao">Voltar</button></a>

    <div class="box">
        <div class="titulo">
            <h1>Registre sua Notícia</h1>
        </div>

        <div class="cadastro">
            <form method="POST">
                <label for="titulo">Título: </label>
                <input type="text" class="campText" name="titulo" required><br><br>
                <label for="noticia">Notícia: </label>
                <input type="text" class="campText" name="noticia" required><br><br>

                <input class="botao" type="submit" value="Adicionar Notícia">
            </form>
        </div>
    </div>
</body>

</html>