<?php

include "../config/conexion.php";

$idcategoria = $_POST['idcategoria'];
$idprovedoor = $_POST['idprovedoor'];
$preciopaquete = $_POST['preciopaquete'];
$descripcion = $_POST['descripcion'];
$preciounidad = $_POST['preciounidad'];
$noexistencias = $_POST['noexistencias'];
$nombreproducto = $_POST['nombreproducto'];

$sql = "INSERT INTO productos(categoriaId,provedoorId,preciopaquete,descripcion,preciounidad,noexistencias,nombreproducto)
    VALUES ('$idcategoria','$idprovedoor','$preciopaquete','$descripcion','$preciounidad','$noexistencias','$nombreproducto')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/productos/index.php");
} else {
    echo "Datos no insertados";
}