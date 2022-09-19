<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario_6</title>
</head>
<body>
    <h3>Primer y ultimo dia de la semana</h3>
    <?php
        $semana = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
        echo "<p><b>".$semana[0]."</b> y <b>".$semana[count($semana)-1]."</b></p>";
    ?>
</body>
</html>