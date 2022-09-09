<?php
include_once "templates/header.php";
?>
    <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
        <h1 id="main-title">Criar Contato</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome do contato: </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o seu nome" required>
            </div>
            <div class="form-group">
                <label for="name">Telefone do contato: </label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o seu telefone" required>
            </div>
            <div class="form-group">
                <label for="name">Observações: </label>
                <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>

        </form>
    </div>


<?php include_once "templates/footer.php"; ?>