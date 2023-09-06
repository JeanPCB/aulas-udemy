<?php
    include_once "templates/header.php"
?>

<div id="contact-container" class="container container-fluid mt-4">
    <?php include_once "./templates/back_btn.php" ?>
    <h1 class="mb-4"><?= $contact["name"] ?></h1>

    <div class="mb-4">
        <p class="mb-1 fw-bold">Telefone:</p>
        <p><?= $contact["phone"] ?></p> 
    </div>

    <div>
        <p class="mb-1 fw-bold">Observações:</p>
        <p><?= $contact["observations"] ?></p>
    </div>
</div>

<?php 
    include_once "templates/footer.php"
?>