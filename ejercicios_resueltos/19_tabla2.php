<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio_19</title>
</head>
<body>
    <h1>Tabla condicional 2</h1> 
    <?php 
        /* Crearemos una tabla de valores de seno y coseno de 0 a 2 
        en incrementos de 0.01. Los valores negativos que resulten los queremos 
        mostrar en rojo, y los valores positivos en azul */ 
        /* Variacion. Un color diferente cada fila que se imprima */ 
        function muestra($valor, $renglon) { 
            if ($renglon % 2){ 
                $fondo = "#eee";
            } 
            else{ 
                $fondo = "#aaa";
            } 
            if ($valor < 0.5){ 
                $color = "red";
            } 
            else{ 
                $color = "blue";
            } 
            echo "<td bgcolor='$fondo'><font color='$color'>$valor</font></td>\n"; 
        }
    ?> 
    <table border="1"> 
        <?php 
            $renglon = 0; 
            for ($x=0; $x<=2; $x+=0.01){
                $renglon++; 
                echo "<tr>"; 
                muestra($x,$renglon); 
                muestra(sin($x),$renglon); 
                muestra(cos($x),$renglon); 
                echo "</tr>"; 
            }
        ?>
    </table> 
</body>
</html>