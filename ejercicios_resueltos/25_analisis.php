<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 3_1: ANALISIS DE FORMULARIO Version 2</title>
</head>
<body>
    <h1>EJERCICIO 3_1: ANALISIS DE FORMULARIO Version 2</h1><br> 
    <br> 
    <h1>Rellena los campos (form.html)</h1> 
    <form action="25_analisis.php" method="post"> 
        <input type="radio" name="gender" value="0"> Sr. 
        <input type="radio" name="gender" value="1"> Sra.<br> 
        Tu apellido:<br> 
        <input type="text" name="lastname"> 
        <input type="submit"> 
    </form> 
    <h1>analisis de formularios (analisis.php)</h1> 
    <?php
        if(isset($_POST["gender"]) && isset($_POST["lastname"])){

            if($_POST['gender'] == 0) { 
                echo "Hola Sr. "; 
            } else { 
                echo "Hola Sra. "; 
            }
            echo "<b>{$_POST['lastname']}</b>, encantado de saludarte."; 
        }        
?>
</body>
</html>