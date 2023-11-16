<?php
require_once("../../config/conexion.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">

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
                        <h5 class="card-title text-center">ACTUALIZAR CATEGORIA</h5>
                        <form action="<?php echo base_url; ?>CRUDC/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM categorias WHERE idcategoria =" . $_REQUEST['idcategoria'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="idcategoria" id="idcategoria" value="<?php echo $row['idcategoria'] ?>">
                            <div class="mb-3">
                                <label for="nombrecategoria" class="form-label">Nombre Categoria</label>
                                <input type="text" class="form-control" id="nombrecategoria" name="nombrecategoria" placeholder="nombre categoria " value="<?php echo $row['nombrecategoria'] ?>">
                            </div>
                            <label for="estadocategoria" class="form-label" >Estado categoria:</label>
                             <select name="estadocategoria" id="estadocategoria">
                             <option value="Activa">Activa</option>
                             <option value="Inactiva">Inactiva</option>
                             <!-- Puedes agregar más opciones según sea necesario -->
                             </select>
                            <div class="mb-3">
                                <label for="descripcioncategoria" class="form-label">Descripcion Categoria</label>
                                <input type="text" class="form-control" id="descripcioncategoria" name="descripcioncategoria" placeholder="descripcion categoria " value="<?php echo $row['descripcioncategoria'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="fechacreacion" class="form-label">Fecha Creacion</label>
                                <input type="date" class="form-control" id="fechacreacion" name="fechacreacion" placeholder="fecha creacion" value="<?php echo $row['fechacreacion'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="creadorcategoria" class="form-label">Creador Categoria</label>
                                <input type="text" class="form-control" id="creadorcategoria" name="creadorcategoria" placeholder="creador categoria " value="<?php echo $row['creadorcategoria'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="notacategoria" class="form-label">Nota Extra Categoria</label>
                                <input type="text" class="form-control" id="notacategoria" name="notacategoria" placeholder="nota categoria" value="<?php echo $row['notacategoria'] ?>">
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

</body>

</html>