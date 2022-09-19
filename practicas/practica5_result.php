<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result_form4</title>
</head>
<body>
    <?php
        if(isset($_POST["name"]) && isset($_POST["salario"]) && $_POST["name"] != ""){
            $nombre = $_POST["name"];
            $salario = $_POST["salario"];
            if($salario == 3){
                echo "el Sr/a $nombre, debe pagar el impuesto a las ganancias";
            }else{
                echo "el Sr/a $nombre, NO debe pagar el impuesto a las ganancias";
            }
        }else{
            header("Location: practica5.php");
            exit();
        }
    ?>
</body>
</html>