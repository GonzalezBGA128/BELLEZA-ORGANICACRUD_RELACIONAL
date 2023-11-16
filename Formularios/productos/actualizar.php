<?php
include_once("../../config/conexion.php")
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">
</head>

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url; ?>">
                    <img src="<?php echo base_url; ?>img/logo.png" alt="logo" height="55" width="115">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">PRODUCTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/categorias/index.php">CATEGORIAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/marcas/index.php">PROVEDORES</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">ACTUALIZAR PRODUCTO</h5>
                        <form action="../../CRUDP/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM productos WHERE idproducto =" . $_REQUEST['idproducto'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="idproducto" id="idproducto" value="<?php echo $row['idproducto'] ?>">

                            <!-- TRAER DATOS CATEGORIAS -->
                            <div class="mb-3">
                                <label for="idcategoria" class="form-label">Categorias</label>
                                <select class="form-select form-select-lg" name="idcategoria" id="idcategoria">
                                    <option selected disabled>Seleccione una categoria</option>
                                    <?php
                                    include_once("../../config/conexion.php");

                                    $sql1 = "SELECT * FROM categorias WHERE idcategoria=" . $row['categoriaId'];
                                    $resultado1 = $conexion->query($sql1);
                                    $row1 = $resultado1->fetch_assoc();

                                    echo "<option selected value='" . $row1['idcategoria'] . "'>" . $row1['nombrecategoria'] . "</option>";

                                    $sql2 = "SELECT * FROM categorias";
                                    $resultado2 = $conexion->query($sql2);

                                    while ($fila = $resultado2->fetch_array()) {
                                        if ($fila['idcategoria'] !== $row1['idcategoria']) {
                                            echo "<option value='" . $fila['idcategoria'] . "'>" . $fila['nombrecategoria'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="idprovedoor" class="form-label">provedoores</label>
                                <select class="form-select form-select-lg" name="idprovedoor" id="idprovedoor">
                                    <option selected disabled>Seleccione una marca</option>
                                    <?php
                                    include_once("../../config/conexion.php");

                                    $sql3 = "SELECT * FROM provedoor WHERE idprovedoor=" . $row['provedoorId'];
                                    $resultado3 = $conexion->query($sql3);

                                    $row3 = $resultado3->fetch_assoc();

                                    echo "<option selected value='" . $row3['idprovedoor'] . "'>" . $row3['establecimiento'] . "</option>";

                                    $sql4 = "SELECT * FROM marcas";
                                    $resultado4 = $conexion->query($sql4);

                                    while ($fila = $resultado4->fetch_array()) {
                                        if ($fila['idprovedoor'] !== $row3['idprovedoor']) {
                                            echo "<option value='" . $fila['idprovedoor'] . "'>" . $fila['establecimiento'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="preciopaquete" class="form-label">Precio Paquete</label>
                                <input type="text" class="form-control" id="preciopaquete" name="preciopaquete" placeholder="precio paquete" value="<?php echo $row['preciopaquete'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="2" placeholder="Descripcion"><?php echo $row['descripcion'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="preciounidad" class="form-label">Precio Unidad</label>
                                <input type="text" class="form-control" name="preciounidad" id="preciounidad" placeholder="precio unidad" value="<?php echo $row['preciounidad'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="noexistencias" class="form-label">No Existencias</label>
                                <textarea class="form-control" id="noexistencias" name="noexistencias" rows="2" placeholder="no existencias"><?php echo $row['noexistencias'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="nombreproducto" class="form-label">Nombre Producto</label>
                                <input type="text" class="form-control" name="nombreproducto" id="nombreproducto" placeholder="nombre producto " value="<?php echo $row['nombreproducto'] ?>">
                            </div>
                            <div class="text-center">
                                <a href="../productos/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.js"></script>

</body>

</html>