<?php if(isset($_SESSION["msg"])): ?>
    <?php if($_SESSION["state"] === "success"): ?>
        <div id="sucess-msg" class="container justify-content-center alert alert-success text-center w-50 mt-3" role="alert">
    <?php else: ?>
        <div id="sucess-msg" class="container justify-content-center alert alert-danger text-center w-50 mt-3" role="alert">
    <?php endif ?>

        <?= $_SESSION["msg"] ?>
    </div>

    <?php $_SESSION["msg"] = null ?>
<?php endif ?>