<?php
    if(!empty($_POST["Ingresar"])){
        $Email = $_POST["Email"];
        $Contraseña = $_POST["Contraseña"];

        $Login = "SELECT * FROM usuario where Email = ? and Contraseña = ?";

        $QueryPreparada = $ConBD->prepare($Login);
        $QueryPreparada->bind_param('ss', $Email, $Contraseña);
        $QueryPreparada->execute();
        $RST = $QueryPreparada->get_result();

        $Rows = mysqli_fetch_array($RST);
// ----> LOGIN JEFE VENTAS <----
        if($Rows["Tipo"]== "JefeVentas"){
            echo '
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    const Toast = Swal.mixin({toast: true, position: "top-end",
                        showConfirmButton: false, timer: 3000, timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
                        }

                        });
                        Toast.fire({icon: "success",
                            title: "Signed in successfully"}).then(() => {
                        window.location = "../../Index.php";
                    });
                </script>'
            ;
            exit();
        } 
        else{
            echo '
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({icon: "error", title: "Oops...",
                        text: "No tienes permiso para ingresar",
                        }).then(() => {
                        event.target.reset();
                    });
                </script>'
            ;
            exit();
        }
// ----> LOGIN CLIENTE <----
        if($Rows["Tipo"]== "Cliente"){
            echo '
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    const Toast = Swal.mixin({toast: true, position: "top-end",
                        showConfirmButton: false, timer: 3000, timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
                        }

                        });
                        Toast.fire({icon: "success",
                            title: "Signed in successfully"}).then(() => {
                        window.location = "../../Index.php";
                    });
                </script>'
            ;
            exit();
        }
        else{
            echo '
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({icon: "error", title: "Oops...",
                        text: "No tienes permiso para ingresar",
                        }).then(() => {
                        event.target.reset();
                    });
                </script>'
            ;
            exit();
        }

    }

?>
