<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result_form2</title>
</head>
<body>
    <?php
        if(isset($_POST["name"]) && isset($_POST["radio"]) && $_POST["name"] != "" && $_POST["radio"] != ""){
            $Nombre = $_POST["name"];
            $Opcion = $_POST["radio"];
            if($Opcion == "1"){
                echo "<h3>Nombre: $Nombre</h3>";
                echo "<h3>Nivel de estudios: No tiene estudios</h3>";    
            }elseif($Opcion == "2"){
                echo "<h3>Nombre: $Nombre</h3>";
                echo "<h3>Nivel de estudios: Estudios Primarios</h3>"; 
            }else{
                echo "<h3>Nombre: $Nombre</h3>";
                echo "<h3>Nivel de estudios: Estudios Secundarios</h3>";                 
            }
        }else{
            header("Location: practica3.php");
            exit();
        }
    ?>
</body>
</html>