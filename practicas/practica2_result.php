<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result_form1</title>
</head>
<body>
    <?php 
        if(isset($_POST["name"]) && isset($_POST["age"]) && $_POST["name"] != "" && $_POST["age"] != ""){
            $nombre = $_POST["name"];
            $edad = $_POST["age"];

            if($edad >= 18){
                echo "<h3>La persona de nombre <b>$nombre</b>, es mayor de edad</h3>";
            }else{
                echo "<h3>La persona de nombre <b>$nombre</b>, es menor de edad</h3>";
            }
        } else{
            header("Location: practica2.php");
            exit();
        }         

    ?>
</body>
</html>