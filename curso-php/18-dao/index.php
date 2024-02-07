<?php
    include_once "db.php";
    include_once "dao/CarDAO.php";

    $carDAO = new CarDAO($conn);
    $cars = $carDAO->findAll();
?>

<h1>Insira um carro:</h1>
<form action="process.php" method="POST">
    <div>
        <label for="brand">Marca:</label>
        <input type="text" name="brand" placeholder="Insira a marca">
    </div>

    <div>        
        <label for="km">Quilometragem:</label>
        <input type="text" name="km" placeholder="Insira a quilometragem">
    </div>

    <div>
        <label for="color">Cor:</label>
        <input type="text" name="color" placeholder="Insira a cor">
    </div>

    <button type="submit">Enviar</button>
</form>

<ul>
    <?php foreach($cars as $car): ?>
        <li><?= $car->getBrand() ?> - <?= $car->getKm() ?> - <?= $car->getColor() ?></li>
    <?php endforeach ?> 
</ul>

<form action="delete.php" method="POST">
    <div>
        <button type="submit">Deletar</button>
    </div>
</form>