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
    <link rel="stylesheet" href="../Css/Global.css"> 
    <link rel="stylesheet" href="../Css/Style.css">

</head>

<body>
    <header class="Encabezado">
        <div class="Menu container">
            <a href="Views/Pages/Login.php" class="logo">Che Viajero</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <!-- colocar icono  -->
                <img src="" class="menu-icono" alt="">
            </label>

            <nav class="navbar">
                <ul>
                    <li><a href="#">Alojamientos</a></li>
                    <li><a href="#">Vuelos</a></li>
                    <li><a href="#">Paquetes</a></li>
                    <li><a href="#">Ofertas</a></li>
                    <li><a href="#">Alquileres</a></li>
                    <li><a href="#">Autos</a></li>
                    <li><a href="#">Disney</a></li>

                </ul>

            </nav>

            <div class="icons">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twiter"></i>

            </div>

    </header>

    <main class="Cuerpo">
        <section class="ContenedorLogin">
            <form action="" method="post" class="FormularioLogin was-validated Glass">
                <h1>Descubre mas!</h1>
                <label for="">Email:</label>
                <input type="email" class="form-control" name="Email" id="" aria-describedby="helpId" placeholder="Ingrese su email" required/>

                <label for="">Contraseña:</label>
                <input type="password" class="form-control" name="Contraseña" id="" aria-describedby="helpId" placeholder="Ingrese su contraseña" required/>

                <input type="submit" class="ingresar" value="Ingresar" id="" name="Ingresar" >

                <a href="">¿Olvido su Contraseña?</a>

                <a href="../Pages/CrearCuenta.php">¿No esta registrado? crear cuenta</a>

                <?php 
                    include("../../Controller/ConBD.php");
                    include("../../Model/SELECT/Login.php");

                ?>

            </form>

        </section>

    </main>

    <footer class="Pie">
    

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>
