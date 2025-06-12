<?php
    if(!empty($_POST["CrearCuenta"])){
        $Nombre = $_POST["Nombre"];
        $Apellido = $_POST["Apellido"];
        $DNI = $_POST["DNI"];
        $Email = $_POST["Email"];
        $Contraseña = $_POST["Contraseña"];
        $Telefono = $_POST["Telefono"];
        $Calle = $_POST["Calle"];
        $Altura = $_POST["Altura"];
        $Pais = $_POST["Pais"];
        $Provincia = $_POST["Provincia"];
        $DistritoPartido = $_POST["DistritoPartido"];
        $Localidad = $_POST["Localidad"];
        $CodigoPostal = $_POST["CodigoPostal"];

        $CrearCuenta = $ConBD ->query ("INSERT INTO login(Nombre, Apellido, DNI, Email, Contraseña, Telefono, Calle, Altura, Pais, Provincia, DistritoPartido, Localidad, CodigoPostal) VALUES ('$Nombre', '$Apellido', '$DNI', '$Email', '$Contraseña', '$Telefono', '$Calle', '$Altura', '$Pais', '$Provincia', '$DistritoPartido', '$Localidad', '$CodigoPostal')");

        if($CrearCuenta){
            
        }
        else{

        }

    }

?>
