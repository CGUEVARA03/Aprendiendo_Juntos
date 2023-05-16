<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu de navegación</a>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="bienvenida.php">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registrar
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="Crud.php">Registros de Estudiantes</a></li>
            <li><a class="dropdown-item" href="..//crudpadres/CrudDos.php">Registrar Encargados</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="listado.php">Registros de Estudiantes</a></li>
            <li><a class="dropdown-item" href="..//crudpadres/listado.php">Registros de Encargados</a></li>
          </ul>
      </form>
    </div>
  </div>
</nav>
    <div class="container">
        <br>
        <center>
            <H1>Listado de estudiantes</H1>
        </center>
        <br>
        <div class="container">
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Encargado</th>
                        <th scope="col">Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "Config/Conexion.php";

                    $Sql = "SELECT * FROM estudiantes";
                    $resultado = $conexion->query($Sql);

                    while ($Fila = $resultado->fetch_assoc()) { ?>

                        <tr>
                            <th scope="row"><?php echo $Fila['id']?></th>
                            <td><?php echo $Fila['nombres']?></td>
                            <td><?php echo $Fila['apellidos']?></td>
                            <td><?php echo $Fila['correo']?></td>
                            <td><?php echo $Fila['usuario']?></td>
                            <td><?php echo $Fila['edad']?></td>
                            <td><?php echo $Fila['rol']?></td>
                            <td><?php echo $Fila['Encargado']?></td>
                            <td><img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['foto_estudiante'])?>" alt=""></td>
                        </tr>
                </tbody>
            <?php } ?>
            </table>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="assets/js/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>