<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario_4</title>
</head>
<body>
    <form action="practica5_result.php" method="POST">
        <label for="name">Nombre: </label><input type="text" name="name"><br>
        <label for="salario">Salario:</label>
        <select name="salario" id="salario">
            <option value="1">100 - 1000 $ARG</option>
            <option value="2">1001 - 3000 $ARG</option>
            <option value="3"> Más de 3000 $ARG</option>
        </select><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>