<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result_form5</title>
</head>
<body>
    <?php
        if(isset($_POST["contrato"])){
            $content = $_POST["contrato"];
            $contrato = ""; 
            for($i=0;$i<strlen($content);$i++){
                if($content[$i] == "[" || $content[$i] == "]"){
                    $content[$i] = " ";
                }   
                $contrato .= $content[$i]; 
            }
            echo "<h1>Contrato</h1><hr>";
            echo "<p style='text-align: justify; width: 400px; font-size: 20px;'>$contrato</p>";
        } 
    ?>
</body>
</html>