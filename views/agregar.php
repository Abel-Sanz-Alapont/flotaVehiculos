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
        <hr>
    </main>
    <nav>


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



        <h1>Agregar Motocicletas</h1>

        <input type="text" name="marca" placeholder="marca" require><br>
        <input type="text" name="modelo" placeholder="modelo" require><br>
        <input type="text" name="matricula" placeholder="matricula" require><br>
        <input type="number" name="precioDia" placeholder="Precio" require><br>
        <input type="number" name="casco" placeholder="Casco" require><br>
        <input type="text" name="cilindrada" placeholder="Cilindrada" require><br>

        <button type="submit">Agregar Motocicleta</button>
        </form>
        <br>

        <form method="POST">

    </nav>
    <a href="index.php">Volver a Index</a>
</body>

</html>