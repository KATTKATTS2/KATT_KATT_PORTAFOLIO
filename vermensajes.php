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
        <?php
        // Verifica si el usuario llegó aquí después de un login exitoso
        session_start();
        if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
            header('Location: index.html'); // Redirige al usuario a index.html si no está autenticado
            exit;
        }
        ?>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

<body onload="verificarCredenciales();">
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
            <center>
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Mensajes recibidos:</h2><br>
               <?php
    // Datos de conexión a la base de datos
    require_once 'noabrir.php';

    // Crear conexión
    $conn = new mysqli($host, $username, $password, $database);

    // Verificar conexión
    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }

    // Prepara la llamada al procedimiento almacenado
    $query = "CALL SP_GET_MENSAJES()";
    ?>

    <div class="table-responsive">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Mensaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result = mysqli_query($conn, $query)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['HIST_ME_NOMBRE']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['HIST_ME_CORREO']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['HIST_ME_TELEFONO']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['HIST_ME_MENSAJE']) . "</td>";
                        echo "</tr>";
                    }
                    mysqli_free_result($result);
                } else {
                    echo "<tr><td colspan='4'>Error al obtener los datos: " . mysqli_error($conn) . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php
    // Cierra la conexión
    $conn->close();
    ?>
                </center>
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