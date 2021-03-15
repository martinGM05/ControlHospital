<?php
session_start();
if (!isset($_SESSION['NombreUsuario'])) {
    header("location: login.php?Error=401");
} else {
    include "../Database/conexion.php";
    $IdUsuario = $_SESSION['IdUsuario'];
    $sql = "select * from Usuario where idUsuario=" . $IdUsuario;
    $resultado = $cn->query($sql);
    $imagenUsuario = $resultado->fetch(PDO::FETCH_OBJ);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Principal</title>
    <link rel="stylesheet" href="../styles/control.css">
    <?php
    include('../layout/disenio.php');
    ?>
    <style type="text/css">
        body {
            background-color: rgb(3, 21, 48);
        }
    </style>
    <link rel="stylesheet" href="../styles/navbar.css">
</head>

<body>
    <?php
    include("../layout/navbar.php");
    ?>
    <div class="container">
        <div class="card" id="cardPacientes">
            <div class="box">
                <div class="content">
                    <h2 style="padding-top: 15px;"><i class="fas fa-head-side-mask"></i></h2>
                    <br><br>
                    <h3>Pacientes</h3>
                    <br>
                    <p>En este apartado podemos ver la información de nuestros pacientes</p>
                    <a href="verPacientes.php?Consulta=0">Ver Pacientes</a>
                    <a href="AgregarPaciente.php?" style="background: #28f321;">Agregar Pacientes</a>
                </div>
            </div>
        </div>
        <div>
            <i class="fas fa-hospital-alt" style="font-size: 180px;"></i>
        </div>

        <div class="card" id="cardDepartamentos">
            <div class="box">
                <div class="content">
                    <br><br>
                    <h2 style="padding-top: 15px;"><i class="fas fa-hospital-user"></i></h2>
                    <br>
                    <h3>Departamentos</h3>
                    <p>En este apartado podemos ver nuestors departamentos</p>
                    <a href="VerAreas.php">Ver Departamentos Activos</a>
                </div>
            </div>
        </div>
    </div>
    <footer id="About">
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4><i class="fab fa-github"></i></h4>
                <a href="https://github.com/martinGM05">
                    <p>martinGM05</p>
                </a>
                <a href="https://github.com/manolo2603">
                    <p>manolo2603</p>
                </a>
                <a href="https://github.com/ivanCordova">
                    <p>ivanCordova</p>
                </a>

            </div>
            <div class="content-foo">
                <h4><i class="fab fa-google"></i></h4>
                <p>mtn.gm05@gmail.com</p>
                <p>manuelfrancis44@gmail.com</p>
                <p>talivan1602@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4><i class="fab fa-facebook"></i></i></h4>
                <a href="https://www.facebook.com/martin.gonzalezmiranda/">
                    <p>Martín González Miranda</p>
                </a>
                <a href="https://www.facebook.com/manuel.franciscopena.7">
                    <p>Manuel Francisco Peña</p>
                </a>
                <a href="https://www.facebook.com/ivan.cordova.3517/">
                    <p>Ivan Córdova Rodríguez</p>
                </a>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Martín González Miranda | Manuel Francisco Peña | Ivan Cordova Rodríguez
        </h2>
    </footer>
    <?php
    include("../Layout/sweetAlert.php");
    ?>
</body>

</html>
