<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>KATT-KATT</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet" type="text/css" />

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>


 <!-- Navigation-->
 <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="index.html">KATT-KATT</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="proyectos.html">Proyectos</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="diseno.html">Dise&ntilde;o</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="contacto.php">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>


    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="divider-custom"></div>
            <!-- Contact Section Heading-->
            <?php
            // Primero, verifica si la variable 'funciono' está establecida en la URL
            if (isset($_GET['funciono'])) {
                $funciono = $_GET['funciono']; // Obtiene el valor de 'funciono'
            
                // Comprueba si 'funciono' es igual a "1"
                if ($funciono == "1") {
                    // Si es igual a "1", muestra el mensaje de éxito
                    echo '<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Mensaje enviado, gracias :3</h2><br>';
                    echo '<div class="text-center"><img src="./assets/img/portfolio/Hamhua2.png" alt="Imagen de éxito" style="height: 300px; width: auto;"></div>';
                } else {
                    // Si 'funciono' tiene cualquier otro valor, muestra el mensaje de error
                    echo '<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">El mensaje no se pudo enviar, intentelo de nuevo :(</h2><br>';
                    echo '<div class="text-center"><img src="./assets/img/portfolio/Moshang_uwu3.png" alt="Imagen sin exito" style="height: 300px; width: auto;"></div>';
                }
            } else {
                // Si 'funciono' no está establecida, también puedes optar por mostrar un mensaje predeterminado o redirigir al usuario
                echo '<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">El mensaje no se pudo enviar, intentelo de nuevo :(</h2><br>';
                echo '<div class="text-center"><img src="./assets/img/portfolio/Moshang_uwu3.png" alt="Imagen sin exito" style="height: 300px; width: auto;"></div>';
            }
            ?>
            <!-- Icon Divider-->
            <div class="divider-custom"></div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                   
                </div>
            </div>
        </div>
    </section>


    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; KATT-KATT 2024</small></div>
    </div>


            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
            <script src="a.js"></script>
        </body>
    </html>