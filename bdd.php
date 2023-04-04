<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';

    $conn = mysqli_connect($host, $user, $password);

        $bd = 'website';

        mysqli_select_db($conn, $bd);

?>