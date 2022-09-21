<?php
require_once "global.php";
require_once "db.php";
require_once "models/Message.php";

$message = new Message($BASE_URL);

$FlassMenssage = $message->getMessage();
if(!empty($FlassMenssage["msg"])){
//limpar
}
$message->cleanMessage();
?>

<!DOCTYPE html>
<html lang="pt0br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movieStarRuan</title>
    <link rel="short icon" href="img/moviestar.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css" integrity="sha512-drnvWxqfgcU6sLzAJttJv7LKdjWn0nxWCSbEAtxJ/YYaZMyoNLovG7lPqZRdhgL1gAUfa+V7tbin8y+2llC1cw==" crossorigin="anonymous" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a href="<?=$BASE_URL ?>" class="navbar-brand">
                <img src="<?=$BASE_URL ?>/img/logo.svg" alt="MovieStar" id="logo">
                <span id="moviestar-title">MovieStar</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbar" aria-controls="navbar" aria-expanded="false" aria-label="tagglenavigation">
                <i class="fas fa-bars"></i>
            </button>
            <form action="" id="search-form" class="form-inline my-2 my-lg-0" method="GET">
                <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar Filmes" aria-label="submit">
                <i class="fas fa-search"></i>
            </form>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item"> <a href="<?=$BASE_URL?>auth.php" class="nav-link">Entrar/Cadastrar</a>

                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <?php if(!empty($FlassMenssage["msg"])) {
        ?>
        
        <div class="msg-container">
        
            <p class="msg <?= $FlassMenssage["type"] ?>"> <?= $FlassMenssage["msg"] ?></p>

        </div>
    
        <?php } ?>
