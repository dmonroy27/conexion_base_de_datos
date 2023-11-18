<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>formulario de contacto</h1>
    <form action="validar.php" method="POST">
        <label for="nombre">nombre</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="email">email</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="telefono">telefono</label>
        <input type="telefono" id="telefono" name="telefono" required><br><br>
        <input type="submit" value="enviar">
        <button><a href="mostrar.php">mostrar datos</a></button>

    </form>
    
</body>
</html>