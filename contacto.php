<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agro_Mex | Compra y Vende</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Agro_Mex | Compra y Vende</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="sobre_nosotros.php">Sobre Nosotros</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="sube_productos.php">Sube tus Productos</a>
            </li> -->
            <li class="nav-item active">
              <a class="nav-link" href="contacto.php">Contacto</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categorias
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="agricolas.php">Productos Agricolas</a>
                <a class="dropdown-item" href="ganaderia.php">Ganaderia</a>
                <a class="dropdown-item" href="pesca.php">Pesca</a>
                <a class="dropdown-item" href="equipo_agroquimicos.php">Equipo y Agroquimicos</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="inicio.php">Iniciar Sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contacto |
        <small>¿Tienes alguna duda o quieres contactarte con agro_mex.com?
        </small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Contacto</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="img/ubicacion.jpg"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Detalles de contacto</h3>
          <p>
            3481 Villa Victoria
            <br>Col,.Centro, CA 90210
            <br>
          </p>
          <p>
            <abbr title="Phone">Tel</abbr>: (123) 456-7890
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="abraham.tecnokratix@gmail.com">transilvania@gmail.com
            </a>
          </p>
          <p>
            <abbr title="Horario">H</abbr>: Lunes - Viernes: 9:00 AM a 5:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Envianos un mensaje</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Nombre completo:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Por favor introduce tu nombre.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Numero Telefonico:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Por favor introduce tu numero Telefonico.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Corre electronico:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Por favor introduce tu correo electronico.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Mensaje:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Por favor escribe tu mensaje" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar mensaje</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Agro_Mex | Compra y Vende</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

  </body>

</html>
