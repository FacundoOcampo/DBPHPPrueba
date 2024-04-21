<?php
    include_once 'conexion.php';
    include_once 'obtener.php';

    

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <h2>Tarjetas</h2>
            <?php foreach($db as $dato): ?>
                    <div class="alert alert-<?php echo $dato['nombre'] ?> text-uppercase"><?php echo $dato['nombre'] ?> - <?php echo $dato['descripcion'] ?></div>
            <?php endforeach ?> 
        </div>
        <div class="col-md-6" style="padding-left:3vw;">
            <?php if(!$_GET): ?>
                <h2> Agregar </h2>
                <form method="POST">
                    <input class="form-control mt-3" type="text" placeholder="Ingrese el nombre de la tarjeta" name="nombre">
                    <input class="form-control mt-4" type="text" placeholder="Ingrese la descripcion de la tarjeta" name="descripcion">
                    <button class="btn btn-primary mt-4">Agregar</button>
                </form>
            <?php endif ?>
            <?php if($_GET): ?>
                <h2> Editar </h2>
                <form method="GET">
                    <input class="form-control mt-3" type="text" placeholder="Ingrese el nombre de la tarjeta" name="nombre">
                    <input class="form-control mt-4" type="text" placeholder="Ingrese la descripcion de la tarjeta" name="descripcion">
                    <button class="btn btn-primary mt-4">Agregar</button>
                </form>
            <?php endif ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>