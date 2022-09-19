<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio_17</title>
</head>
<body>
    <h1>Condicional Switch. Ejemplo</h1> 
    <?php 
        /*Declaramos una variable con un valor de muestra */ 
        $posicion = "arriba"; 
        echo "La variable posicion es ",$posicion; 
        echo "<br>"; 
        switch($posicion){ 
            case "arriba": // Primer condicion si es arriba 
                echo "La variable contiene el valor de arriba"; 
                break; 
            case "abajo": //Segunda condicion del supuesto 
                echo "La variable contiene el valor de abajo"; 
                break; 
            default: //Condicion por default o si no es ninguna 
                echo "La variable contiene otro valor distinto arriba y abajo";
                break; 
        }
    ?>
</body>
</html>