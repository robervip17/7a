<?php
$conexion = new mysqli("localhost", "root", "", "juegos");

  if (!empty($_POST['nombre'])&&(!empty($_POST['apellidos']))&&(!empty($_POST['edad']))&&(!empty($_POST['curso']))) {

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
      $edad = $_POST['edad'];
          $curso = $_POST['curso'];
  $consulta="INSERT INTO usuarios (`nombre`, `apellidos`, `edad`, `curso`) VALUES ('$nombre', '$apellidos', '$edad', '$curso')";

  $resultado =$conexion->query($consulta);
  if (!$resultado)echo $conexion->error;

  $consulta="SELECT * FROM equipo ORDER BY id_equipo DESC LIMIT 1";
  $resultado= $conexion->query($consulta);

  echo "<h2>Tu cuenta se ha creado correctamente. </h2>";

  }

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <nav>
      <font size="250" face="courier new" >Juego de MicroRobots</font>
      <a href="usuarios.php">Jugadores TOP</a>
      <a href="usuarios.php">Usuarios</a>
    </nav>
    <form class="" action="" method="post">
        Dame tu nombre:
        <input type="text" name="nombre" value="" idea id="nombre"><br><br>
        Dime tu primer apellido:
        <input type="text" name="apellidos" value="" idea id="apellido"><br><br>
        Dime tu edad:
        <input type="text" name="edad" value="" idea id="edad"><br><br>
        Dime tu curso:
        <input type="text" name="curso" value="" idea id="curso"><br><br>
        <input type="submit" name="button" value="Enviar">
    </form>
    <script type="text/javascript" src="comprobar.js">
    </script>
  </body>
</html>
