<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'datos'
) or die(mysqli_erro($mysqli));



/*
Este bloque de código PHP establece una conexión con una base de datos MySQL utilizando la extensión mysqli de PHP.

La función session_start() indica que se va a utilizar el mecanismo de sesiones de PHP para mantener información de sesión entre las diferentes páginas o scripts que componen la aplicación web.

La función mysqli_connect() realiza la conexión a la base de datos MySQL. Los cuatro parámetros que se le pasan son:

La dirección del servidor MySQL: En este caso, 'localhost',
El nombre de usuario de MySQL: En este caso, 'root',
La contraseña de MySQL: En este caso, '', 
El nombre de la base de datos: En este caso, 'cita'.

Si la conexión se establece correctamente, se devuelve un objeto de la clase mysqli que se utiliza 
para realizar consultas y otras operaciones en la base de datos. Si la conexión falla, 
se produce un error y se interrumpe la ejecución del script PHP.


*/?>


