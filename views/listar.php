<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <?= "<h1>Hello, Welcome DAW Student!</h1>"; ?>
    <a href="index.php?accion=agregar">Vehiculo a la DB</a>
    <div class="container-fluid">
        <?= '<table class="table table-striped">'; ?>
        <?= '<thead>
                    <tr>
                        <th>id</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Matricula</th>
                        <th>Precio</th>
                        <th>Combustible</th>
                        <th>Opciones</th>
                    </tr>
                </thead>'; ?>
        <?php foreach ($arrayCoches as $coches): ?>
            <tr>
                <td><?= $coches->getId() ?></td>
                <td><?= $coches->getMarca() ?></td>
                <td><?= $coches->getModelo() ?></td>
                <td><?= $coches->getMatricula() ?></td>
                <td><?= $coches->getPrecioDia() ?></td>
                <td><?= $coches->getNumeroPuertas() ?></td>
                <td><?= $coches->getTipoCombustible() ?></td>
                <td><?= $coches->getCilindrada() ?></td>
                <td><?= $coches->getTipoCombustible() ?></td>

                <td>
                    <!--Boton Editar-->
                    <form method="POST" action="index.php?accion=editarCoche" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $persona->getId() ?>">
                        Marca: <input type="text" name="marca" value="<?= $persona->getMarca() ?>" required>
                        Modelo: <input type="text" name="modelo" value="<?= $persona->getModelo() ?>" required>
                        Matricula: <input type="text" name="matricula" value="<?= $persona->getMatricula() ?>" required>
                        Precio Total: <input type="number" name="precioDia" value="<?= $persona->getPrecioDia() ?>" required>
                        Numero Puertas: <input type="number" name="numeroPuertas" value="<?= $persona->getNumeroPuertas() ?>" required>
                        Combustible: <input type="text" name="tipoCombustible" value="<?= $persona->getTipoCombustible() ?>" required>

                        <button type="submit">Guardar</button>
                        <!--Boton Eliminar-->
                <td><a href="index.php?accion=eliminar&id=<?= $persona->getId() ?>">Eliminar </td>
                </form>
                </td>
            <tr>
            <?php endforeach ?>
            </table>
    </div>
</body>

</html>