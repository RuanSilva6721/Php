<?php
include_once "templates/header.php";
?>
    <div class="container">
        <?php
         if(isset($printMsg) && $pringMsg != ''){
        ?>
        <p id="msg"><?=$pringMsg ?></p>
        <?php }?>
        <h1 id="main-title">Minha Agenda</h1>
        <?php if(count($contacts) > 0):
        ?>
        <!-- <p>Tem Contatos</p> -->
        <table class="table" id="contacts-table">
            <thead>
                <tr>
                   <th scope="col" >#</th>
                   <th scope="col" >Nome</th>
                   <th scope="col" >Telefone</th>
                   <th scope="col" >#</th> 
                </tr>
            </thead>
            <tbody>
                <?php foreach($contacts as $contact){?>
                    <tr>
                        <td scope="row" class="col-id"><?= $contact['id']?></td>
                        <td scope="row"><?= $contact['name']?></td>
                        <td scope="row"><?= $contact['phone']?></td>
                        <td class="actions">
                        <a href="<?= $BASE_URL ?>detalhes.php?id=<?= $contact['id']?>"><i class="fas fa-eye check-icon"></i></a>
                        <a href="#"><i class="fas fa-edit edit-icon"></i></a>
                        <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                    </td>
                    </tr>
                <?php }?>
            </tbody>

        </table>
        <?php else: ?>
           <p id="empty-list-text">Ainda não há contatos, <a href="<?= $BASE_URL ?>create.php">Clique aqui para criar</a></p> 
        <?php endif; ?>
    </div>


<?php include_once "templates/footer.php"; ?>