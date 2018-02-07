<?php
  session_start();
?>
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
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Agro_Mex | Compra y Vende</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
  <!-- Page Content -->
    <div class="container">
      <h1 class="my-4">Bienvenido, Registrate</h1>
      <hr>
    </div>
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" name="login" class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="usuario" class="form-control" placeholder="tu usuario" required autofocus>
                <label for="">Contrasena</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contrasena" required>
                <label for="">Repite tu Contrasena</label>
                <input type="password" name="password2" id="inputPassword" class="form-control" placeholder="Repite la Contrasena" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Recordar mi cuenta
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
            </form><!-- /form -->
            <a href="inicio.php" class="forgot-password">
                Tengo una cuenta.
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
    <br>
    <br>
    <br>
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
    <script type="text/javascript" src="js/script.js">

    </script>
  </body>

</html>
