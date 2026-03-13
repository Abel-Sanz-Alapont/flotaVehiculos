<!DOCTYPE html>
<html>

<head>
    <title>Agregar Vehiculos</title>
</head>

<body>
    <h1>Agregar Coches</h1>
    <form method="POST">
        <input type="text" name="marca" placeholder="marca" require><br>
        <input type="text" name="modelo" placeholder="modelo" require><br>
        <input type="text" name="matricula" placeholder="matricula" require><br>
        <input type="number" name="precioDia" placeholder="Precio" require><br>
        <input type="number" name="numeroPuertas" placeholder="Numero Puertas" require><br>
        <input type="text" name="tipoCombustible" placeholder="Combustible" require><br>
        <br>

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