<?php
require_once("../../config/conexion.php");
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
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
                        <h5 class="card-title text-center">REGISTRAR PROVEDOOR</h5>
                        <form action="<?php echo base_url; ?>CRUDM/insertarDatos.php" method="POST">
                        <label for="establecimiento" class="form-label" >Establecimiento:</label>
                             <select name="establecimiento" id="establecimiento">
                             <option value="Empresa">Empresa</option>
                             <option value="Local">Local</option>
                             <!-- Puedes agregar más opciones según sea necesario -->
                             </select>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="correo" required>
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono" required>
                            </div>
                            <div class="mb-3">
                                <label for="direccionempresa" class="form-label">Direccion Empresa</label>
                                <input type="text" class="form-control" id="direccionempresa" name="direccionempresa" placeholder="direccion empresa" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombreempresa" class="form-label">Nombre Empresa</label>
                                <input type="text" class="form-control" id="nombreempresa" name="nombreempresa" placeholder="nombre empresa" required>
                            </div>
                            <div class="mb-3">
                                <label for="codigopostal" class="form-label">Codigo Postal</label>
                                <input type="text" class="form-control" id="codigopostal" name="codigopostal" placeholder="codigo postal" required>
                            </div>
                            <div class="mb-3">
                                <label for="pais" class="form-label">Pais</label>
                                <input type="text" class="form-control" id="pais" name="pais" placeholder="pais" required>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/marcas/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
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