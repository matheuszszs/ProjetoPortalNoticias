<?php 
    session_start();
    if (!isset($_SESSION['usuario_id'])) {
        header('Location: login.php');
        exit();
    }

    include_once './config/config.php';
    include_once './classes/Noticias.php';

    $noticia = new Noticias($db);
    if(isset($_GET['idnot'])){
        $idnot = $_GET['idnot'];
        $noticia->deletarNot($idnot);
        header('Location: crudNoticias.php');
        exit();
    }
?>