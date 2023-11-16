<?php

include "../config/conexion.php";

    $nombrecategoria = $_POST['nombrecategoria'];
    $estadocategoria = $_POST['estadocategoria'];
    $descripcioncategoria = $_POST['descripcioncategoria'];
    $fechacreacion = $_POST['fechacreacion'];
    $creadorcategoria = $_POST['creadorcategoria'];
    $notacategoria = $_POST['notacategoria'];

$sql = "INSERT INTO categorias(nombrecategoria, estadocategoria,descripcioncategoria,fechacreacion,creadorcategoria,notacategoria)
    VALUES ('$nombrecategoria','$estadocategoria','$descripcioncategoria','$fechacreacion','$nombrecategoria','$notacategoria')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/categorias/index.php");
} else {
    echo "Datos no insertados";
}
