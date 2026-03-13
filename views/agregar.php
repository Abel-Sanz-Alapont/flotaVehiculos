<!DOCTYPE html>
<html>

<head>
    <title>Agregar Vehiculos</title>
</head>

<body>
    <h1>Agregar Coches</h1>
    <form method="POST">
        Nombre:<br>
        <input type="text" name="marca" require><br>
        <input type="text" name="modelo" require><br>
        <input type="text" name="matricula" require><br>
        <input type="number" name="precioDia" require><br>
        <input type="number" name="numeroPuertas" require><br>
        <input type="number" name="tipoCombustible" require><br>

        <button type="submit">Agregar Coche</button>
    </form>
    <br>

    <!--<h1>Agregar Motocicletas</h1>
    <form method="POST">
        Nombre:<br>
        <input type="text" name="nombre" require><br>

        <button type="submit">Agregar Motocicleta</button>
    </form>
    <br>-->

    <a href="index.php">Volver a Index</a>



</body>

</html>