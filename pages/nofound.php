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
    <title>Document</title>
    <?php
        include "../layout/disenio.php";
    ?>
    <link rel="stylesheet" href="../styles/navbar.css">
</head>

<body>
    <?php
        include("../layout/navbar.php");
        ?>
        <br><br><br><br><br><br><br><br><br><br>
    <h2 class="text-center text-danger">Usted no tiene permisos para acceder a esta página</h2>
    <div class="text-center">
    <br><br><br><br><br>
        <a href="control.php" class="btn btn-lg btn-info">Regresar al inicio</a>
    </div>
</body>

</html>
