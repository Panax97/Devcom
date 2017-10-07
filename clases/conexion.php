<?php

function conexion()
{
    $servidor = "localhost";
    $usuario  = "root";
    $password = "";
    $bd       = "blog";

    $conexion = mysqli_connect($servidor, $usuario, $password, $bd);

    return $conexion;
}
