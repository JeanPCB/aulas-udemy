<?php
    include_once "templates/header.php";
?>
    <div id="main-container" class="container container-fluid">
        <h1 class="text-center m-3" id="main-title">Meus Contatos</h1>

        <?php if(count($contacts) > 0): ?>
            <table class="table table-light table-striped" id="main-table">
            <thead>
                <tr>
                    <th scope="col" class="bg-primary text-light">#</th>
                    <th scope="col" class="bg-primary text-light">Nome</th>
                    <th scope="col" class="bg-primary text-light">Telefone</th>
                    <th scope="col" class="bg-primary text-light"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($contacts as $contact): ?>
                    <tr>
                        <td class="align-middle"><?= $contact["id"] ?></td>
                        <td class="align-middle"><?= $contact["name"] ?></td>
                        <td class="align-middle"><?= $contact["phone"] ?></td>
                        <td class="align-middle">
                            <a href="<?= $BASE_URL ?>/show.php?id=<?= $contact["id"] ?>" class="text-decoration-none">
                                <i class="fa-regular fa-eye btn p-0 ps-1 pe-1 text-primary"></i>
                            </a>
                            <a href="#" class="text-decoration-none">
                                <i class="fa-regular fa-pen-to-square btn p-0 ps-1 pe-1"></i>
                            </a>
                            <button type="submit" class="btn p-0 ps-1 pe-1">
                                <a href="#" class="text-decoration-none">
                                    <i class="fa-solid fa-trash text-danger"></i>
                                </a>
                            </button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            </table>
        <?php else: ?>
            <p class="text-center mt-3">Não há contatos na sua agenda, <a href="./create.php">clique aqui para adicionar</a></p>
        <?php endif ?>
    </div>

<?php 
    include_once "templates/footer.php";
?>