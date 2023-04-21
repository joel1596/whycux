<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whycux</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/Estilo2.css">
    <link rel="stylesheet" type="text/css" href="css/TablaContactenos.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />

</head>

<body style="background-color: #83c6ce">



    <?php
    include 'components/navbar/navbar.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>

    <h1 class="titulo">Datos de Contactenos</h1>
    

    <?php

//1. Establecer la conexión con el motor de base de datos y seleccionar la base de datos que  vamos a utilizar cuando trabajamos DML
$conexion = new mysqli('localhost', 'root', '', 'whycux');

if($conexion->connect_error != null){
    echo "Ocurrió un error al establecer la conexión: {$conexion->connect_error}";
}

//2. Ejecutar la consulta. (Ingreso de datos)
$resultado = $conexion->query("select contactenos_id, nombre, apellidos, correo, ciudad, mensaje from contactenos");

if($conexion->error != ''){
    echo "Ocurrió un error al ejecutar la consulta: {$conexion->error}";
}

//3. Mostrar los resultados de la consulta

ImprimirDatos($resultado);

//4. Cerrar la conexion
$conexion->close();

function ImprimirDatos($datos)
{
  echo '<div class="container">';
  echo '<table class="table align-middle mb-0 bg-white">';
  echo '<thead class="bg-light">';
  echo '<tr >';
  echo '<th>Nombre</th>';
  echo '<th>Apellidos</th>';
  echo '<th>Correo</th>';
  echo '<th>Ciudad</th>';
  echo '<th>Mensaje</th>';
  echo '<th></th>';
  echo '</tr>';
  echo '</thead>';

  if ($datos->num_rows > 0) {
      while ($row = $datos->fetch_assoc()) {
          echo '<tr class="contenido">';
          echo '<td>' . $row['nombre'] . '</td>';
          echo '<td>' . $row['apellidos'] . '</td>';
          echo '<td>' . $row['correo'] . '</td>';
          echo '<td>' . $row['ciudad'] . '</td>';
          echo "<td style='max-width: 200px; word-wrap: break-word; word-break: break-all;'>{$row['mensaje']}</td>";
          echo '<td><a class="btn btn-danger btn-rounded btn-sm fw-bold"
          data-mdb-ripple-color="black" href="php2/elimina-formulario.php?id=' . $row['contactenos_id'] . '">Eliminar</a></td>';
          echo '</tr>';
          
      }
  } else {
      echo '<tr><td>No hay datos</td></tr>';
  }

  echo '</table>';
  echo '</div>';
}

?>

</body>

</html>