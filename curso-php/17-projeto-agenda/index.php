<?php
    include_once "templates/header.php";
?>  

    <div id="main-container" class="container container-fluid">
        <?php include_once "templates/flash_msg.php" ?>

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
                            <a href="show.php?id=<?= $contact["id"] ?>" class="text-decoration-none">
                                <i class="fa-regular fa-eye btn p-0 ps-1 pe-1 text-primary"></i>
                            </a>
                            <a href="edit.php?id=<?= $contact["id"] ?>" class="text-decoration-none">
                                <i class="fa-regular fa-pen-to-square btn p-0 ps-1 pe-1"></i>
                            </a>
                            <form action="config/process.php" method="POST" class="d-inline-block">
                                <input type="hidden" name="type" value="delete">
                                <input type="hidden" name="id" value="<?= $contact["id"]?>">
<<<<<<< HEAD
                                <button type="submit" class="btn p-0 ps-1 pe-1">
                                    <a href="delete.php" class="text-decoration-none">
                                        <i class="fa-solid fa-trash text-danger"></i>
                                    </a>
                                </button>
=======
                                <button type="button" class="btn p-0 ps-1 pe-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <a href="#" class="text-decoration-none">
                                        <i class="fa-solid fa-trash text-danger"></i>
                                    </a>
                                </button>

                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Deseja deletar o contato?</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-danger">Deletar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
>>>>>>> f8f28e8d75d0a43eba4c782e4ca99b5fb03dccac
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            </table>
        <?php else: ?>
            <p class="text-center mt-3">Não há contatos na sua agenda, <a href="./create.php">clique aqui para adicionar</a></p>
        <?php endif ?>
    </div>

<<<<<<< HEAD
<?php include_once "templates/footer.php" ?>
=======
<?php
    include_once "templates/footer.php"
?>
>>>>>>> f8f28e8d75d0a43eba4c782e4ca99b5fb03dccac
