<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $idcategoria = $_POST['idcategoria'];
    $nombrecategoria = $_POST['nombrecategoria'];
    $estadocategoria = $_POST['estadocategoria'];
    $descripcioncategoria = $_POST['descripcioncategoria'];
    $fechacreacion = $_POST['fechacreacion'];
    $creadorcategoria = $_POST['creadorcategoria'];
    $notacategoria = $_POST['notacategoria'];
  
    

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE categorias SET nombrecategoria = '$nombrecategoria',estadocategoria = '$estadocategoria',descripcioncategoria = '$descripcioncategoria',fechacreacion = '$fechacreacion',creadorcategoria = '$creadorcategoria',notacategoria = '$notacategoria' WHERE idcategoria = $idcategoria";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/categorias/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
