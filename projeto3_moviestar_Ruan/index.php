<?php
require_once "global.php";
require_once "db.php";
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
        <nav id="mani-navbar" class="navbar navbar-expand-lg">
            <a href="<?=$BASE_URL ?>" class="navbar-brand">
                <img src="<?=$BASE_URL ?>/img/logo.svg" alt="MovieStar" id="logo">
                <span id="moviestar-title">MovieStar</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbar" aria-controls="navbar" aria-expanded="false" aria-label="tagglenavigation">
                <i class="fas fa-bars"></i>
            </button>
            <form action="" id="search-from" class="form-inline my-2 my-lg-0" method="GET">
                <input type="text" name="q" id="search" class="form0control mr-sm-2" type="search" placeholder="Buscar Filmes" aria-label="submit">
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


    <div id="manin-container" class="container-fluid">

        <h1>Corpo do site</h1>
    </div>
    <footer id="footer">
        <div class="social-container">
            <ul>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-square"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </li>
            </ul>
        </div>
        <div id="footer-links-container">
            <ul>
                <li><a href="#">Adicionar filme</a></li>
                <li>Adicionar crítica</li>
                <li><a href="">Entrar/Registrar</a></li>
            </ul>
        </div>
        <p>&copy; 2022: Ruan Felipe</p>

    </footer>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>