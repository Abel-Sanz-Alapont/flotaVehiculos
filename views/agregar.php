<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<head>
    <title>Agregar Vehiculos</title>
</head>

<body>
    <main>
        <h1>Formulario para Agregar Vehiculos(Coches/Motocicletas)</h1>
        <a href="index.php">Volver a Index</a>
        <hr>
    </main>
    <nav>
        <form method="POST" action="index.php?accion=guardarVehiculo">

            <h1> Selecciona el Tipo de Vehiculo</h1>
            <select name="tipoVehiculo" require>
                <option value="Coche">Coche</option>
                <option value="Motocicleta">Motocicleta</option>
            </select><br>
            <h3>Datos Generales</h3>
            <input type="text" name="marca" placeholder="marca" require><br>
            <input type="text" name="modelo" placeholder="modelo" require><br>
            <input type="text" name="matricula" placeholder="matricula" require><br>
            <input type="number" name="precioDia" placeholder="Precio" require><br>

            <h3>Datos solo para Coches</h3>
            <input type="number" name="numeroPuertas" placeholder="Numero Puertas" require><br>
            <input type="text" name="tipoCombustible" placeholder="Combustible" require><br>
            <br>

            <h3>Datos solo para Motos</h3>
            <input type="text" name="cilindrada" placeholder="Cilindrada" require><br>
            incluye Casco:<input type="checkbox" name="incluyeCasco" placeholder="incluyeCasco" value="1" require><br>

            <button type="submit">Agregar Coche</button>
        </form>
    </nav>
    <br>

</body>

</html>