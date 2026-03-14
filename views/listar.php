<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <?= "<h1>Gestor de Vehiculos</h1>"; ?>
    <a href="index.php?accion=agregarCoches">Formulario para Agregar mas Vehiculos</a>
    <div class="container-fluid">
        <?= '<table class="table table-striped">'; ?>
        <?= '<thead>
                    <tr>
                        <th>id</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Matricula</th>
                        <th>Precio</th>
                        <th>Puertas</th>
                        <th>Combustible</th>
                        <th>Opciones CRUD</th>
                    </tr>
                </thead>'; ?>
        <?php foreach ($arrayVehiculos as $coches): ?>
            <tr>
                <td><?= $coches->getId() ?></td>
                <td><?= $coches->getMarca() ?></td>
                <td><?= $coches->getModelo() ?></td>
                <td><?= $coches->getMatricula() ?></td>
                <td><?= $coches->getPrecioDia() ?></td>
                <td><?= $coches->getNumeroPuertas() ?></td>
                <td><?= $coches->getTipoCombustible() ?></td>

                <td>
                    <!--Boton Editar-->
                    <form method="POST" action="index.php?accion=editarCoches" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $coches->getId() ?>">
                        Marca: <input type="text" name="marca" value="<?= $coches->getMarca() ?>" required>
                        Modelo: <input type="text" name="modelo" value="<?= $coches->getModelo() ?>" required>
                        Matricula: <input type="text" name="matricula" value="<?= $coches->getMatricula() ?>" required><br>
                        Precio Total: <input type="number" name="precioDia" value="<?= $coches->getPrecioDia() ?>" required>
                        Numero Puertas: <input type="number" name="numeroPuertas" value="<?= $coches->getNumeroPuertas() ?>" required>
                        Combustible: <input type="text" name="tipoCombustible" value="<?= $coches->getTipoCombustible() ?>" required><br>
                        <br>
                        <button type="submit">Guardar</button>
                        <!--Boton Eliminar-->
                <td><a href="index.php?accion=eliminar&id=<?= $coches->getId() ?>">Eliminar </td>
                </form>
                </td>
            <tr>
            <?php endforeach ?>
            </table>
    </div>
</body>

</html>