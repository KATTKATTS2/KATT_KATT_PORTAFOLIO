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
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contáctame</h2>
            <!-- Icon Divider-->
            <div class="divider-custom"></div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <form id="contactForm" action="conexion.php" method="post">
                        <!-- Name input-->
                            <div class="form-floating mb-3">
        <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
        <label for="name">Nombre completo</label>
        <div class="invalid-feedback" data-sb-feedback="name:required">Nombre requerido.</div>
    </div>
    <!-- Email address input-->
    <div class="form-floating mb-3">
        <input class="form-control" id="email" name="email" type="email" placeholder="correo@ejemplo.com" data-sb-validations="required,email" />
        <label for="email">Direccion de correo electronico</label>
        <div class="invalid-feedback" data-sb-feedback="email:required">Correo requerido.</div>
        <div class="invalid-feedback" data-sb-feedback="email:email">Correo no valido.</div>
    </div>
    <!-- Phone number input-->
    <div class="form-floating mb-3">
        <input class="form-control" id="phone" name="phone" type="tel" placeholder="5547639167" data-sb-validations="required" />
        <label for="phone">Número de teléfono</label>
        <div class="invalid-feedback" data-sb-feedback="phone:required">Número de teléfono requerido.</div>
    </div>
    <!-- Message input-->
    <div class="form-floating mb-3">
        <textarea class="form-control" id="message" name="message" type="text" placeholder="Ingrese su mensaje aquí..." style="height: 10rem" data-sb-validations="required"></textarea>
        <label for="message">Mensaje</label>
        <div class="invalid-feedback" data-sb-feedback="message:required">Mensaje requerido.</div>
    </div>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">¡Mensaje enviado!</div>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">¡Error enviando mensaje!</div></div>
                        <!-- Submit Button-->
                        <center><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Enviar</button></center>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; KATT-KATT 2024</small></div>
    </div>

            <!-- Te quiero mucho persona que lea esto :)-->
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
            <script src="a.js"></script>
        </body>
    </html>