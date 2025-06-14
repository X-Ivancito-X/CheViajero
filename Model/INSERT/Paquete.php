<?php
    if(!empty($_POST["AñadirPaquete"])){
        $Origen = $_POST["Origen"];
        $Destino = $_POST["Destino"];
        $Precio = $_POST["Precio"];
        $FechaIda = $_POST["FechaIda"];
        $FechaVuelta = $_POST["FechaVuelta"];
        $Descripcion = $_POST["Descripcion"];

        $AñadirPaquete = $ConBD ->query ("INSERT INTO paquete(Origen, Destino, Precio, FechaIda, FechaVuelta, Descripcion) VALUES ('$Origen', '$Destino', '$Precio', '$FechaIda', '$FechaVuelta', '$Descripcion')");

        if($CrearCuenta){
            echo '';
        }
        else{

        }

    }

?>