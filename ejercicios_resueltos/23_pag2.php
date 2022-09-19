<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Pagina 2 Librerias</title>
</head>
<body>
    <?php include("22_libreria.php") ?> 
    <?php CabeceraPagina(); ?> 
    Esta es otra página<BR><BR> 
    completamente distinta<BR><BR> 
    pero comparte el pie y la cabecera con la otra.<BR><BR> 
    <?php PiePagina(); ?>
</body>
</html>