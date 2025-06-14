<!doctype html>
<html lang="en">
<head>
    <title>CheViajero</title>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="../Css/Global.css">
    <link rel="stylesheet" href="../Css/Style.css"> -->

</head>

<body>
    <header class="Encabezado">
        

    </header>

    <main class="Cuerpo">
        <section class="ContenedorCrearCuenta">
            <form action="" method="post" class="FormularioCrearCuenta was-validated">
                <h1>Registre su cuenta</h1>
                <label for="">Nombre:</label>
                <input type="text" class="form-control" name="Nombre" id="" aria-describedby="helpId" placeholder="Ingrese su nombre" required/>

                <label for="">Apellido:</label>
                <input type="text" class="form-control" name="Apellido" id="" aria-describedby="helpId" placeholder="Ingrese su apellido" required/>

                <label for="">DNI:</label>
                <input type="text" class="form-control" name="DNI" id="" aria-describedby="helpId" placeholder="Ingrese su DNI" required/>

                <label for="">Email:</label>
                <input type="email" class="form-control" name="Email" id="" aria-describedby="helpId" placeholder="Ingrese su email" required/>

                <label for="">Contraseña:</label>
                <input type="password" class="form-control" name="Contraseña" id="" aria-describedby="helpId" placeholder="Ingrese su contraseña" required/>

                <label for="">Telefono:</label>
                <input type="text" class="form-control" name="Telefono" id="" aria-describedby="helpId" placeholder="Ingrese su telefono" required/>

                <label for="">Calle:</label>
                <input type="text" class="form-control" name="Calle" id="" aria-describedby="helpId" placeholder="Ingrese su calle" required/>

                <label for="">Altura:</label>
                <input type="text" class="form-control" name="Altura" id="" aria-describedby="helpId" placeholder="Ingrese su altura" required/>

                <label for="">Pais:</label>
                <input type="text" class="form-control" name="Pais" id="" aria-describedby="helpId" placeholder="Ingrese su pais" required/>

                <label for="">Provincia:</label>
                <input type="text" class="form-control" name="Provincia" id="" aria-describedby="helpId" placeholder="Ingrese su Provincia" required/>

                <label for="">Distrito o partido:</label>
                <input type="text" class="form-control" name="DistritoPartido" id="" aria-describedby="helpId" placeholder="Ingrese su distrito o partido" required/>

                <label for="">Localidad:</label>
                <input type="text" class="form-control" name="Localidad" id="" aria-describedby="helpId" placeholder="Ingrese su localidad" required/>

                <label for="">Codigo postal:</label>
                <input type="text" class="form-control" name="CodigoPostal" id="" aria-describedby="helpId" placeholder="Ingrese su codigo postal" required/>

                <input type="submit" value="Crear cuenta" id="" name="CrearCuenta">

                <a href="../Pages/Login.php">¿Ya esta registrado? Iniciar sesion</a>

                <?php 
                    include("../../Controller/ConBD.php");
                    include("../../Model/INSERT/CrearCuenta.php");

                ?>

            </form>

        </section>

    </main>

    <footer class="Pie">
    

    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>
