
<?php

    include_once("templates/header.php");

?>

        <div class="container">

        <?php include_once("templates/backbtn.html"); ?>

            <h1 id="main-title">Editar Contato</h1>

            <form id="create-form" action="<?php $BASE_URL ?>config/process.php" method="POST">

                <input type="hidden" name="type" value="edit">
                <input type="hidden" name="id" value="<?= $contact["id"] ?>">

                <div class="form-group">

                    <label for="name">Nome do Contato:</label>

                    <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do contato..." value="<?= $contact["name"] ?>" required>

                </div>

                <div class="form-group">

                    <label for="phone">Telefone do Contato:</label>

                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone do contato..." value="<?= $contact["phone"] ?>" required>

                </div>

                <div class="form-group">

                    <label for="observation">Observações:</label>

                    <textarea type="text" class="form-control" id="observation" name="observation" placeholder="Digite as observações do contato..." rows="3"> <?= $contact["observation"] ?></textarea>

                </div>

                <button type="submit" class="btn btn-primary">Atualizar</button>

            </form>

        </div>
        
<?php

    include_once("templates/footer.php");

?>