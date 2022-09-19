<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta de opinion</title>
</head>
<body>
    <h1>Encuesta</h1> 
    <h3>¿Que opinas de este curso de php?</h3> 
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
        <input type="radio" name="reply" value="0"> 
        Excelente, he aprendido mucho.<br> 
        <input type="radio" name="reply" value="1"> 
        Mas o menos, es muy complicado.<br> 
        <input type="radio" name="reply" value="2"> 
        ¡Bah! para que quiero aprender php 
        <br> <br> 
        <?php 
            if (empty($_POST["submit"]) && empty($_COOKIE["voted"])) { 
                //Mostrar el botòn submit solo si el formulario todavia 
                // no se ha enviado y el usuario no ha votado. 
                ?> 
                <input name="submit" type="submit" value="vota!"> 
                <?php
            } else { 
                echo "<p>Gracias por tu voto.</p>\n"; 
                //¿Formulario enviado? ¿cookies activas? ¿pero todavia no se ha votado? 
                if (isset($_POST['reply']) /*&& isset($_COOKIE['check'])/* && empty($_COOKIE['voted'])*/) { 
                    //Guardar nombre de archivo en la variable 
                    $file="results.txt"; 
                    $fp=fopen($file, "r+");
                    $vote=fread($fp, filesize($file)); 
                    //Descomponer la string del archivo en array con coma como separador 
                    $arr_vote = explode("," , $vote); //explode convierte la string en array 
                    //¿que valor se ha selleccionado en el formulario? 
                    //¡El recuento aumenta en 1! 
                    $reply = $_POST['reply']; 
                    $arr_vote[$reply]++; 
                    //volver a montar la string 
                    $vote = implode(",", $arr_vote); // implode vincula elementos de la array a string 
                    rewind($fp); 
                    //Escribir nueva string en el archivo 
                    fputs($fp, $vote); 
                    fclose($fp); 
                }else{
                    echo "<p>No se guardaron los datos de encuenta</p>";
                }
            }
        ?> 
    </form> 
    <p> 
        [ <a href="results.php" target="_blank">ver resultados de la encuesta</a>] 
    </p>
</body>
</html>