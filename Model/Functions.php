<?php
    function LogIn(){
    include("./Controller/ConBD.php");
    if(!empty($_POST["Ingresar"])){
        $EmailUsuario = $_POST["Usuario"];
        $Contraseña = $_POST["Contraseña"];

        $Login = "SELECT * FROM login where Email = ? or Usuario = ? and Contraseña = ?";

        $QueryPreparada = $ConBD->prepare($Login);
        $QueryPreparada->bind_param('ss', $EmailUsusario, $Contraseña);
        $QueryPreparada->execute();
        $RST = $QueryPreparada->get_result();

        $Rows = mysqli_fetch_array($RST);

        if($Rows["Tipo"]== "Administrador_General"){
            header("location:../Pages/Personal.php");
        
        }
        if($Rows["Tipo"]== "Administrador"){
            header("location:../Pages/Personal.php");
        
        }
        if($Rows ["Tipo"]=="Cliente"){
            header("location:../../Index.php");

        }
        else{     
            echo '
            <script>
            alert("Usuario no encontrado, introduzca datos verificados");
            window.location = "../../Index.php";
            </script>';
            
        }
    }

}

function AltaLogIn(){
    include("./Controller/ConBD.php");
    if(!empty($_POST["CrearCuenta"])){

            $Email = $_POST["E-mail"];
            $Usuario = $_POST["Usuario"];
            $Contraseña = $_POST["Contraseña"];

            $CrearCuenta = $ConBD ->query ("INSERT INTO login(Email, Usuario, Contraseña) VALUES ('$Email','$Usuario', '$Contraseña')");

        if($CrearCuenta){
            echo 'Cuenta creada con exito';
        }
        else{
            echo 'No se pudo crear la cuenta';
        }

    }

}


?>

