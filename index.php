
<?php include("db.php"); ?>
<main class="container p-4">
  <div class="row">
    <div class="col-md-4">


      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <div class="card card-body">
        <h1>Alumnos</h1>
        <form action="save.php" method="POST">
          <div class="form-group">
            <input type="text" name="cedula" class="form-control" placeholder="Cedula" autofocus>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            <input type="text" name="nota_matematica" class="form-control" placeholder="Nota Matematica">
            <input type="text" name="nota_fisica" class="form-control" placeholder="Nota Fisica">
            <input type="text" name="nota_programacion" class="form-control" placeholder="Nota Programacion">
          </div>
          <input type="submit" name="save" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>

<div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nota promedio Matematica</th>
            <th>Nota promedio Fisica</th>
            <th>Nota promedio Programacion</th>
          </tr>
        </thead>
        <tbody>
          <h1>Nota promedio de cada materia</h1>
        <?php
          $query = "SELECT AVG(nota_matematica) AS nota_matematica, AVG(nota_fisica) AS nota_fisica , AVG(nota_programacion) AS nota_programacion FROM alumnos";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['nota_matematica']; ?></td>
            <td><?php echo $row['nota_fisica']; ?></td>
            <td><?php echo $row['nota_programacion']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Aprobados</th>
          </tr>
        </thead>
        <tbody>
          <h1>Numero de alumnos aprobados en matematica</h1>
        <?php
          $query = "SELECT count(*) as aprobados from alumnos where nota_matematica >= 10";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['aprobados']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Aprobados</th>
          </tr>
        </thead>
        <tbody>
          <h1>Numero de alumnos aprobados en fisica</h1>
        <?php
          $query = "SELECT count(*) as aprobados from alumnos where nota_fisica >= 10";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['aprobados']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Aprobados</th>
          </tr>
        </thead>
        <tbody>
          <h1>Numero de alumnos aprobados en programacion</h1>
        <?php
          $query = "SELECT count(*) as aprobados from alumnos where nota_programacion >= 10";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['aprobados']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Reprobados</th>
          </tr>
        </thead>
        <tbody>
          <h1>Numero de alumnos reprobados en matematica</h1>
        <?php
          $query = "SELECT count(*) as aprobados from alumnos where nota_matematica < 10";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['aprobados']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Reprobados</th>
          </tr>
        </thead>
        <tbody>
          <h1>Numero de alumnos reprobados en fisica</h1>
        <?php
          $query = "SELECT count(*) as aprobados from alumnos where nota_fisica < 10";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['aprobados']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Reprobados</th>
          </tr>
        </thead>
        <tbody>
          <h1>Numero de alumnos reprobados en programacion</h1>
        <?php
          $query = "SELECT count(*) as aprobados from alumnos where nota_programacion < 10";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['aprobados']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Aprobados</th>
          </tr>
        </thead>
        <tbody>
          <h1>Numero de alumnos que aprobaron todas las materias</h1>
        <?php
          $query = "SELECT count(*) as aprobados from alumnos where nota_programacion >= 10 and nota_fisica >= 10 and nota_matematica >= 10";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['aprobados']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Aprobados</th>
          </tr>
        </thead>
        <tbody>
          <h1>Numero de alumnos que aprobaron una sola materia</h1>
        <?php
          $query = "SELECT count(*) as aprobados from alumnos where nota_programacion >= 10 and nota_fisica < 10 and nota_matematica < 10 or nota_programacion < 10 and nota_fisica >= 10 and nota_matematica < 10 or nota_programacion < 10 and nota_fisica < 10 and nota_matematica >= 10";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['aprobados']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Aprobados</th>
          </tr>
        </thead>
        <tbody>
          <h1>Numero de alumnos que aprobaron dos materias</h1>
        <?php
          $query = "SELECT count(*) as aprobados from alumnos where nota_programacion >= 10 and nota_fisica >= 10 and nota_matematica < 10 or nota_programacion >= 10 and nota_fisica < 10 and nota_matematica >= 10 or nota_programacion < 10 and nota_fisica >= 10 and nota_matematica >= 10";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['aprobados']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
           <th>Nota maxima matematica</th>
            <th>Nota maxima fisica</th>
            <th>Nota maxima programacion</th>
          </tr>
        </thead>
        <tbody>
          <h1>Nota maxima en cada materia</h1>
        <?php
          $query = "SELECT MAX(nota_matematica) AS nota_matematica, MAX(nota_fisica) AS nota_fisica , MAX(nota_programacion) AS nota_programacion FROM alumnos";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['nota_matematica']; ?></td>
            <td><?php echo $row['nota_fisica']; ?></td>
            <td><?php echo $row['nota_programacion']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
</main>

