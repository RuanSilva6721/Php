<?php
include_once "help/url.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog do Ruan Felipe</title>
    <link rel="stylesheet" href="<?=$BASE_URL ?>/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">   
</head>
<body>
    <header>
        Templete Cabeçalho
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Ruan Felipe">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>/"></a>Home</li>
                <li><a href="<?= $BASE_URL ?>/"></a>Categorias</li>
                <li><a href="<?= $BASE_URL ?>/"></a>Sobre</li>
                <li><a href="<?= $BASE_URL ?>/contact.php">Contato</a>
            </ul>
        </nav>
    </header>