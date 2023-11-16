<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $idprovedoor = $_POST['idprovedoor'];
    $establecimiento = $_POST['establecimiento'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccionempresa = $_POST['direccionempresa'];
    $nombreempresa = $_POST['nombreempresa'];
    $codigopostal = $_POST['codigopostal'];
    $pais = $_POST['pais'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE provedoor SET establecimiento = '$establecimiento',correo = '$correo',telefono = '$telefono',direccionempresa = '$direccionempresa',nombreempresa = '$nombreempresa',codigopostal = '$codigopostal',pais = '$pais' WHERE idprovedoor = $idprovedoor";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/marcas/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
