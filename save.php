<?php

include('db.php');

if (isset($_POST['save'])) {

  $cedula = $_POST['cedula'];
  $nombre = $_POST['nombre'];
  $nota_matematica = $_POST['nota_matematica'];
  $nota_fisica = $_POST['nota_fisica'];
  $nota_programacion = $_POST['nota_programacion'];
  
  $query = "INSERT INTO alumnos(cedula, nombre, nota_matematica, nota_fisica, nota_programacion) 
  VALUES ('$cedula', '$nombre', '$nota_matematica', '$nota_fisica', '$nota_programacion')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Alumno registrado exitosamente ';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
