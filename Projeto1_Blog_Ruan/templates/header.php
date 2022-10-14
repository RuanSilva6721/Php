<?php
include_once "help/url.php";
include_once "data/posts.php";
include_once "data/categories.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog do Ruan Felipe</title>
    <link rel="stylesheet" href="<?=$BASE_URL ?>/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">   
</head>
<body>
    <header>

        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Ruan Felipe">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
                <li><a href="<?= $BASE_URL ?>" class="nav-link">Categorias</a></li>
                <li><a href="<?= $BASE_URL ?>" class="nav-link" >Sobre</a></li>
                <li><a href="<?= $BASE_URL ?>/contact.php" class="nav-link">Contato</a>
            </ul>
        </nav>
    </header>