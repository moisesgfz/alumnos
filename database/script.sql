CREATE DATABASE datos;

use datos;

CREATE TABLE alumnos (
  id int(11) NOT NULL,
  cedula varchar(25) NOT NULL,
  nombre varchar(25) NOT NULL,
  nota_matematica INT NOT NULL,
  nota_fisica INT NOT NULL,
  nota_programacion INT NOT NULL
)

