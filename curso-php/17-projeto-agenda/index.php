<?php
    include_once "./templates/header.php";
?>
    <div id="main-container" class="container container-fluid">
        <h1 class="text-center m-3" id="main-title">Meus Contatos</h1>

        <?php if(count($contacts) > 0): ?>
            <table class="table" id="main-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($contacts as $contact): ?>
                    <tr>
                        <td class="align-middle"><?= $contact["id"] ?></td>
                        <td class="align-middle"><?= $contact["name"] ?></td>
                        <td class="align-middle"><?= $contact["phone"] ?></td>
                        <td class="align-middle">
                            <i class="fa-regular fa-eye btn p-0 ps-1 pe-1"></i>
                            <i class="fa-regular fa-pen-to-square btn p-0 ps-1 pe-1"></i>
                            <button type="submit" class="btn p-0 ps-1 pe-1">
                                <i class="fa-solid fa-trash"></i>
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
    include_once "./templates/footer.php";
?>