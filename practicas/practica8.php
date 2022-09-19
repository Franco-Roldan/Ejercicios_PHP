<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido_pizza</title>
</head>
<body>
    <h1>Hacer Pedido</h1><hr>
    <form action="practica8.php" method="POST">
        <label for="name">Nombre: </label><input type="text" name="name"><br>
        <label for="address">Dirección: </label><input type="text" name="address"><br>
        <label for="opciones">Opciones: </label><br>
        <ul>
            <li><input type="checkbox" name="pizza[]" value="jamon_y_queso">Jamon y queso</li> 
            Cantidad: <input type="number" name="jamon_y_queso" min="1" max="20" value="1"><br>

            <li><input type="checkbox" name="pizza[]" value="Napolitana">Napolitana</li> 
            Cantidad: <input type="number" name="Napolitana" min="1" max="20" value="1"><br>
            
            <li><input type="checkbox" name="pizza[]" value="Mozzarella">Mozzarella</li> 
            Cantidad: <input type="number" name="Mozzarella" min="1" max="20" value="1"><br>            
        </ul>
        <input type="submit" value="Confirmar">
    </form>
    <?php
        if(isset($_POST["name"]) && isset($_POST["address"]) && isset($_POST["pizza"])){
            $nf = "datos.txt";
            $file = fopen($nf, "r+");
            $old = fread($file, filesize($nf));
            $nombre = $_POST["name"];
            $direccion = $_POST["address"];
            $fecha = date("d/m/y | G:i");
            $cantidad = 0;
            $salto = "<p>---------------------------------------</p>";
            $pedido = $salto."\n<h3>-- Nuevo Pedido -- </h3>\n<p>Nombre:".$nombre."</p>\n<p>Dirección: ".$direccion."</p>\n<p>Fecha: $fecha"."</p>\n<p>Pedido: </p>";
            foreach($_POST["pizza"] as $pizza){
                $cantidad = $_POST[$pizza];
                $pizzas = "\n<li> - ".$pizza.", cantidad: ".$cantidad."</li>";
                $pedido .= $pizzas;
            } 
            rewind($file);
            fputs($file, "$pedido \n$salto\n$old");
            fclose($file);
       
            echo "<h3 style='color:green;padding:10px;background-color:#ccc;'>¡El pedido sea enviado con Exito!</h3>";

        }else{
            echo "<h3 style='color:red;padding:10px;background-color:#ccc;'>Complete los campos requeridos</h3>";
        }
    ?>
</body>
</html>


