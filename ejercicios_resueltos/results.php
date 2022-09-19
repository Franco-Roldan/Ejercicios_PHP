<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de encuestas</title>
</head>
<body>
    <h1>Resultados de la Encuesta</h1>
    <?php
        $file = "results.txt";
        $fp=fopen($file, "r+");
        $results = fread($fp, filesize($file));
        $ary_results = explode("," , $results);
        $vote1= $ary_results[0];
        $vote2= $ary_results[1];
        $vote3= $ary_results[2];

        
        echo "<p>Excelente, he aprendido mucho: <b>$vote1</b></p>";
        echo "<p>Mas o menos, es muy complicado: <b>$vote2</b></p>";
        echo "<p>¡Bah! para que quiero aprender php: <b>$vote3</b></p>";
        

    ?>

</body>
</html>