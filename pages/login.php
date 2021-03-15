<?php
    session_start();
?>
<html>
  <head>
      <title>Login</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
      <link rel="stylesheet" href="../styles/login.css">
  </head>
  <body> 
      <div class="container">
        <label></label>
      </div>
      <form method="post" action="../Database/iniciarSesion.php" class="login">
          <header>Hospital General</header>
          <img src="../Database/img/recepcion.png" alt="" style="width: 150px; margin-bottom: 15px;">
          <div class="field">
              <span class="fa fa-user"></span>
              <input type="text" placeholder="Usuario" name="txtUsuario" id="txtUsuario">
          </div>
          <div class="field">
            <span class="fa fa-lock"></span>
            <input type="password" placeholder="Contraseña" name="txtPassword" id="txtPassword">
          </div>
          <input type="submit" class="submit" value="Entrar">
    </form>
    <?php
        include("../layout/sweetAlert.php");
    ?>
  </body>
</html>
