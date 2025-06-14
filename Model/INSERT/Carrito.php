<?php
    if(!empty($_POST["AñadirCarrito"])){
        $stmt = $ConBD->prepare($AñadirCarrito);
        $stmt->bind_param("i", $Id_Paquete);
        $stmt->execute();
        $Resulado = $stmt->get_result();

        $QuitarPaquete = "SELECT Origen, Destino, Preciofinal, Fechaida, Fechavuelta FROM paquete WHERE Id_Paquete = ?";

        if($Resulado->num_rows > 0){
            $fila = $result->fetch_assoc();
            
            $Origen = $fila['Origen'];
            $Destino = $fila['Destino'];
            $PrecioFinal = $fila['PrecioFinal'];
            $Fechaida = $fila['FechaIda'];
            $Fechavuelta = $fila['FechaVuelta'];

            // Insertar en carrito
            $AgregarCarrito = "INSERT INTO carrito (Origen, Destino, Preciofinal, FechaIda, FechaVuelta) VALUES (?, ?, ?, ?, ?)";
            $stmt_insert = $ConBD->prepare($AgregarCarrito);
            $stmt_insert->bind_param("ssdss", $Origen, $Destino, $PrecioFinal, $FechaIda, $FechaVuelta);
        
            if($stmt_insert->execute()){
                echo "✔ Paquete agregado al carrito correctamente.";
            }
            else{
                echo "❌ Error al insertar en carrito.";

            }

        }
        else{
            echo "❌ No se encontró el paquete con ese ID.";

        }
        
    }

?>
