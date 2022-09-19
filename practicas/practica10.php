<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar Password</title>
</head>
<body>
    <h1>Validar Password</h1>
    <form action="practica10.php" method="post">
        <label for="name">Nombre: </label><input type="text" name="name"><br>
        <label for="password">Contraseña: </label><input type="password" name="password"><br>
        <label for="password2">Verificación: </label><input type="password" name="password2"><br>
        <input type="submit" value="Validar">
    </form>
    <?php
        if(isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["password2"])){
            if($_POST["password"] == $_POST["password2"]){
                echo "<h3 style='color:green;background-color:#ccc;padding:10px;'>La contraseña es valida!</h3>";
            }else{
                echo "<h3 style='color:red;background-color:#ccc;padding:10px;'>La contraseña es invalida</h3>";
            }
        }
    ?>

</body>
</html>