<?php require_once 'bdd.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $numero = $_POST['numero'];
    $correo = $_POST['correo'];

    $query = "INSERT INTO `registro`(`nombre`, `apellido`, `numero`, `correo`) VALUES ('$nombre','$apellido','$numero','$correo')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header('location:index.php');
    }


?>