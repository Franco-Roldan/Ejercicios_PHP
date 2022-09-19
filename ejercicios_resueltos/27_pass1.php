<?php 
    if (isset($_POST['pw'])) { 
        $pw = $_POST['pw']; 
        if ($pw == "magic") { 
            header ("Location: newpage1.html"); 
        } elseif ($pw == "abracadabra" ){ 
            header ("Location: newpage2.html"); 
        } else { 
            header ("Location: sorry.html"); 
        }
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de password y header</title>
</head>
<body>
    
    <h1> Ejemplo de password y funcion header </h1> 
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
        <input type="text" name="pw">
        <input type="submit" value="Envialo"> 
    </form>

</body>
</html>