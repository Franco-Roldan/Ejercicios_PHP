<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 3_1: ANALISIS DE FORMULARIO</title>
</head>
<body>
    <h1>EJERCICIO 3_1: ANALISIS DE FORMULARIO</h1><br> 
    <br>
    <h1>Rellena los campos (form.html)</h1> 
    <form action="24_analisis.php" method="post"> Tu nombre: 
        <input type="text" name="firstname"> 
        <input type="submit"> 
    </form> 
 
    <h1>analisis de formularios (analisis.php)</h1> 
    <?php
        if(isset($_POST["firstname"]) && $_POST["firstname"] != ""){
            echo "Hola <b>{$_POST['firstname']}</b>, encantado de saludarte."; 
        } 
    ?>
</body>
</html>