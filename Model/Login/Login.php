<?php
    if(!empty($_POST["Ingresar"])){
        $Email = $_POST["Email"];
        $Contraseña = $_POST["Contraseña"];

        $Login = "SELECT * FROM login where Email = ? and Contraseña = ?";

        $QueryPreparada = $ConBD->prepare($Login);
        $QueryPreparada->bind_param('ss', $Email, $Contraseña);
        $QueryPreparada->execute();
        $RST = $QueryPreparada->get_result();

        $Rows = mysqli_fetch_array($RST);

        if($Rows["Tipo"]== "Administrador_General"){
            header("location:../../Index.php");
        
        }

        if($Rows["Tipo"]== "Administrador"){
            header("location:../../Index.php");
        
        }
        if($Rows ["Tipo"]=="Cliente"){
            header("location:../../Index.php");

        }
        else{     
            
        }
        
    }

?>
