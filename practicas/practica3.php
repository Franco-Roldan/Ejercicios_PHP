<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario_2</title>
</head>
<body>
    <form action="practica3_result.php" method="post">
        <label for="name">Nombre: </label><input type="text" name="name"><br>
        <label for="radio">Nivel de estudios: </label><br>
        <input type="radio" name="radio" value="1">No tiene estudios <br>
        <input type="radio" name="radio" value="2">Estudios Primarios <br>
        <input type="radio" name="radio" value="3">Estudios Secundarios <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>