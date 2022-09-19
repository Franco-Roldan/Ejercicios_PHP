<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de multiplicar</title>
</head>
<body>
    <table border=1>
        <tr><th>Multiplicador</th><th>Multiplicando</th><th>Producto</th></tr>
        <?php                        
            $num_multi = 2;
            for($i=0; $i<=10;$i++){
                $result = $num_multi * $i;
                echo "
                    <tr>
                        <td><b>$num_multi</b></td>
                        <td><b>$i</b></td>
                        <td><b>$result</b></td>
                    </tr>
                ";
            }
        ?>
    </table>


</body>
</html>