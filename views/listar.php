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
        <?= "<h1>Tabla de Vehiculos</h1>"; ?>
        <?php foreach ($arrayVehiculos as $vehiculo): ?>
            <?php if ($vehiculo instanceof  Coche): ?>
                <tr>
                    <td><?= $vehiculo->getId() ?></td>
                    <td><?= $vehiculo->getMarca() ?></td>
                    <td><?= $vehiculo->getModelo() ?></td>
                    <td><?= $vehiculo->getMatricula() ?></td>
                    <td><?= $vehiculo->getPrecioDia() ?></td>
                    <td><?= $vehiculo->getNumeroPuertas() ?></td>
                    <td><?= $vehiculo->getTipoCombustible() ?></td>

                    <td>
                        <!--Boton Editar-->
                        <form method="POST" action="index.php?accion=editarCoches" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $vehiculo->getId() ?>">
                            Marca: <input type="text" name="marca" value="<?= $vehiculo->getMarca() ?>" required>
                            Modelo: <input type="text" name="modelo" value="<?= $vehiculo->getModelo() ?>" required>
                            Matricula: <input type="text" name="matricula" value="<?= $vehiculo->getMatricula() ?>" required><br>
                            Precio Total: <input type="number" name="precioDia" value="<?= $vehiculo->getPrecioDia() ?>" required>
                            Numero Puertas: <input type="number" name="numeroPuertas" value="<?= $vehiculo->getNumeroPuertas() ?>" required>
                            Combustible: <input type="text" name="tipoCombustible" value="<?= $vehiculo->getTipoCombustible() ?>" required><br>
                            <br>
                            <button type="submit">Guardar</button>
                            <!--Boton Eliminar-->
                    <td><a href="index.php?accion=eliminar&id=<?= $vehiculo->getId() ?>">Eliminar </td>
                    </form>
                    </td>
                <tr>
                <?php endif ?>
            <?php endforeach ?>
            </table>
    </div>
    <div class="container-fluid">
        <?= '<table class="table table-striped">'; ?>
        <?= '<thead>
                    <tr>
                        <th>id</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Matricula</th>
                        <th>Precio</th>
                        <th>Cilindrada</th>
                        <th>Casco</th>
                        <th>Opciones CRUD</th>
                    </tr>
                </thead>'; ?>
        <?= "<h1>Tabla de Motocicletas</h1>"; ?>
        <?php foreach ($arrayVehiculos as $motocicleta): ?>
            <?php if ($motocicleta instanceof  Motocicleta): ?>
                <tr>
                    <td><?= $motocicleta->getId() ?></td>
                    <td><?= $motocicleta->getMarca() ?></td>
                    <td><?= $motocicleta->getModelo() ?></td>
                    <td><?= $motocicleta->getMatricula() ?></td>
                    <td><?= $motocicleta->getPrecioDia() ?></td>
                    <td><?= $motocicleta->getCilindrada() ?></td>
                    <td><?= $motocicleta->getIncluyeCasco() ?></td>

                    <td>
                        <!--Boton Editar-->
                        <form method="POST" action="index.php?accion=editarMotocicletas" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $motocicleta->getId() ?>">
                            Marca: <input type="text" name="marca" value="<?= $motocicleta->getMarca() ?>" required>
                            Modelo: <input type="text" name="modelo" value="<?= $motocicleta->getModelo() ?>" required>
                            Matricula: <input type="text" name="matricula" value="<?= $motocicleta->getMatricula() ?>" required><br>
                            Precio Total: <input type="number" name="precioDia" value="<?= $motocicleta->getPrecioDia() ?>" required>
                            Cilindrada: <input type="number" name="cilindrada" value="<?= $motocicleta->getCilindrada() ?>" required>
                            Incluye Casco:
                            <select name="incluyeCasco">
                                <option value="1" <?php if ($motocicleta->getIncluyeCasco() == 1) ?>>Sí</option>
                                <option value="0" <?php if ($motocicleta->getIncluyeCasco() == 0) ?>>No</option>
                            </select><br>
                            <br>
                            <button type="submit">Guardar</button>
                            <!--Boton Eliminar-->
                    <td><a href="index.php?accion=eliminar&id=<?= $vehiculo->getId() ?>">Eliminar </td>
                    </form>
                    </td>
                <tr>
                <?php endif ?>
            <?php endforeach ?>
            </table>
    </div>
</body>

</html>