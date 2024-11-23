<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>

    <link rel="stylesheet" href="recursos/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Compras</h1>
        <ul class="nav nav-tabs mt-3">
            <li class="nav-item">
                <a class="nav-link active" href="?view=registrar_compra">Registrar Compra</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?view=compras_registradas">Compras Registradas</a>
            </li>
        </ul>
        <div class="tab-content mt-4">
        
            <?php include($view); ?>
        </div>
    </div>


    <script src="recursos/bootstrap.bundle.min.js"></script>
</body>
</html>
