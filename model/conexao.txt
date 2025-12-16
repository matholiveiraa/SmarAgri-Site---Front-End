<?php
    $server = "localhost";
    $user = "root";
    $password = "root";
    $bdname = "smartagri";

    $conn = mysqli_connect($server, $user, $password, $bdname);

    if (!$conn) {
        die("Erro na conexão: " . mysqli_connect_error());
    }
?>
