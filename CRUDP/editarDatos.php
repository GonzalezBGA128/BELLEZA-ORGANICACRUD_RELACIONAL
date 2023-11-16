<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $idproducto = $_POST['idproducto'];
    $idcategoria = $_POST['idcategoria'];
    $idprovedoor = $_POST['idprovedoor'];
    $preciopaquete = $_POST['preciopaquete'];
    $descripcion = $_POST['descripcion'];
    $preciounidad = $_POST['preciounidad'];
    $noexistencias = $_POST['noexistencias'];
    $nombreproducto = $_POST['nombreproducto'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE productos SET categoriaId = '$idcategoria',provedoorId = '$idprovedoor',preciopaquete = '$preciopaquete',descripcion = '$descripcion', preciounidad = '$preciounidad',noexistencias = '$noexistencias', nombreproducto = '$nombreproducto' WHERE idproducto = $idproducto";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/productos/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
