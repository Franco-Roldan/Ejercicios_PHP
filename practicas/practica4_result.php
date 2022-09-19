<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result_form3</title>
</head>
<body>
    <?php
        if(isset($_POST["name"]) && $_POST["name"] != "" ){
            $nombre = $_POST["name"];
            echo "Nombre: $nombre <br>";
            echo "Deportes que practica: ";
            if(!isset($_POST["opc"])){
                echo "<li>Ninguno</li>";
            }else{
                foreach($_POST["opc"] as $selected){
                    echo "<li>$selected</li>";
                }
            }
        }else{
            header("Location: practica4.php");
            exit();
        }
    ?>
</body>
</html>