<?php
    include_once "./templates/header.php";
?>

<div id="contact-container" class="container container-fluid mt-4">
    <?php include_once "templates/back_btn.php" ?>
    <h1 class="mb-3">Criar Contato</h1>

    <form action="config/process.php" method="POST">
        <input type="hidden" name="type" value="create">
        <input type="hidden" name="id" value="<?= $contact["id"] ?>">
        <div class="form-group mb-3">
            <label for="name" class="mb-1">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group mb-3">
            <label for="phone" class="mb-1">Telefone:</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group mb-3">
            <label for="phone" class="mb-1">Observações:</label>
            <textarea class="form-control" name="observations" id="observations" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
    </form>
</div>

<?php
    include_once "./templates/footer.php";
?>