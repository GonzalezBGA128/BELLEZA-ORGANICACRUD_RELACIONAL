<?php

include "../config/conexion.php";

    $establecimiento = $_POST['establecimiento'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccionempresa = $_POST['direccionempresa'];
    $nombreempresa = $_POST['nombreempresa'];
    $codigopostal = $_POST['codigopostal'];
    $pais = $_POST['pais'];

$sql = "INSERT INTO provedoor(establecimiento, correo,telefono,direccionempresa,nombreempresa,codigopostal,pais)
    VALUES ('$establecimiento','$correo','$telefono','$direccionempresa','$nombreempresa','$codigopostal','$pais')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/marcas/index.php");
} else {
    echo "Datos no insertados";
}
