<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio_21</title>
</head>
<body>
    <h1>Bucle While</h1>
    <form action="21_while.php" method="post"> 
        <label for="number">¿Cuantas veces?</label><input type="text" name="number"> 
        <input type="submit" value="Enviar"> 
    </form> 

    <p> 
        <?php 
            /* Mostraremos el uso de la sentencia While y comenzamos a usar entrada 
            del teclado mediante un formulario simple */ 
            if ( isset( $_POST['number'] )) { 
                $number = $_POST['number']; 
                $counter = 1; 
                while ($counter <= $number) { 
                    echo "Los bucles son faciles!<br>\n"; 
                    $counter++; 
                }
                echo "Se acabo.\n"; 
            }
        ?> 
    </p>
</body>
</html>