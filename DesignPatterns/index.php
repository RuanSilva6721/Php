<?php
include_once "DAO.php";
include_once "DAO/CarDAO.php"
?>
<h1>Insira um carro</h1>

     <form action="process.php" method="POST">
        <div>
            <label for="brand">Marcar do carro: </label>
            <input type="text" name="brand" placeholder="Insira a marca">
        </div>
        <div>
            <label for="km">Kilometragem: </label>
            <input type="text" name="km" placeholder="Insira a kilometragem">
        </div>
        <div>
            <label for="color">Cor do carro: </label>
            <input type="text" name="color" placeholder="Insira a cor">
        </div>
        <input type="submit" value="Salvar">

     </form>