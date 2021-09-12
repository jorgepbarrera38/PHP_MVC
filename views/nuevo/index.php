<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/default.css">
</head>
<body>
        <?php require 'views/header.php'; ?>

        <div id="main">
            <h1 class="center">Nuevo</h1>
            <form action="<?php echo constant('URL'); ?>nuevo/registrarAlumno" method="POST">
                <p>
                    <label for="">Matrícula</label>
                    <input type="text" name="matricula">
                </p>
                <p>
                    <label for="">Nombre</label>
                    <input type="text" name="nombres">
                </p>
                <p>
                    <label for="">Apellido</label>
                    <input type="text" name="apellidos">
                </p>
                <p>
                    <button type="submit">Guardar</button>
                </p>
            </form>
        </div>

        <?php require 'views/footer.php'; ?>
</body>
</html>