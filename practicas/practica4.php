<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario_3</title>
</head>
<body>
    <form action="practica4_result.php" method="POST">
        <label for="name">Nombre: </label><input type="text" name="name"><br>
        <label for="opcion">Deportes que practica: </label><br>
        <input type="checkbox" name="opc[]" value="futbol" > Futbol <br>
        <input type="checkbox" name="opc[]" value="basket"> Basket <br>
        <input type="checkbox" name="opc[]" value="tenis"> Tenis <br>
        <input type="checkbox" name="opc[]" value="voley"> Voley <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>