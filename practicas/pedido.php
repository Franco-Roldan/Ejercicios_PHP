<?php
    if(isset($_POST["name"]) && isset($_POST["address"])){
        $nf = "datos.txt";
        $file = fopen($nf, "r+");
        $old = fread($file, filesize($nf));
        $nombre = $_POST["name"];
        $direccion = $_POST["address"];
        $fecha = date("d/m/y | G:i");
        $cantidad = 0;
        $salto = "---------------------------------------";
        $pedido = $salto."\n-- Nuevo Pedido -- \nNombre:".$nombre."\nDirección: ".$direccion."\nFecha: $fecha"."\nPedido: ";
        foreach($_POST["pizza"] as $pizza){
            $cantidad = $_POST[$pizza];
            $pizzas = "\n - ".$pizza.", cantidad: ".$cantidad;
            $pedido .= $pizzas;
        } 
        rewind($file);
        fputs($file, "$pedido \n$salto\n$old");
        fclose($file);  
    }
?>