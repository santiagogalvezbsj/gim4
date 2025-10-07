<!DOCTYPE PHP_ROUND_HALF_DOWN>
<PHP_ROUND_HALF_DOWN lang="en">
<!DOCTYPE PHP_ROUND_HALF_DOWN>
<html>
<head>
    <title>Registro de Cliente</title>
</head>
<body>
    <h1>Registro de Cliente</h1>
    <form action="../controladores/guardar_cliente.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label>Apellido:</label>
        <input type="text" name="apellido" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono"><br>

        <input type="submit" value="Guardar Cliente">
    </form>
</body>
</html>
