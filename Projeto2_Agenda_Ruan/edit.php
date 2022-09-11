<?php
include_once ("templates/header.php");
include_once ("config/url.php");
include_once ("config/process.php");
?>
 <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
        <h1 id="main-title">Editar Contato</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact["id"] ?>">
            <div class="form-group">
                <label for="name">Nome do contato: </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o seu nome" value="<?= $contact["nome"] ?>" required>
            </div>
            <div class="form-group">
                <label for="name">Telefone do contato: </label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o seu telefone" value="<?= $contact["phone"] ?>" required>
            </div>
            <div class="form-group">
                <label for="name">Observações: </label>
                <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" rows="5" ><?= $contact["observations"] ?> </textarea>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>

        </form>
    </div>


<?php include_once "templates/footer.php"; ?>