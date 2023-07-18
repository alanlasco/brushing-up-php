<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5">

      <!-- Tarjeta de presentacion -->
      <div class="jumbotron">
        <h1 class="display-4">Trabajo Practico N°2</h1>
        <p class="lead">Deben crear un array de arrays asociativos (como el que hay de ejemplo dentro del código) que contengan informacion de al menos 3 personas
          (nombre, apellido, edad y mail). Luego crear una tarjeta, como la que hay de muestra, por cada persona guardada en el array. Las tarjetas pueden ser creadas una por una, o utilizando ciclos</p>
        <hr class="my-4">
        <p>Para realizar este trabajo, basta con modificar este mismo documento y enviarlo por medio de la plataforma. No es necesario realizar un nuevo.</p>
      </div>

      <!-- Array de muestra -->
      <?php

        $personas =
              [
                "nombre"=>["Alan","Pedro", "Juan"],
                "apellido"=>["Lasco", "Juarez", "Hernandez"],
                "edad"=> [26, 28, 45] ,
                "mail"=>["alannnxavier@gmail.com", "juarezzz@gmail.com", "Herni@gmail.com"]
              ];

      ?>

      <!-- Tarjeta a replicar -->
      <?php for($i=0; $i <=2; $i++){     ?>
      <div class="card text-white bg-secondary mb-3" style="max-width: 70%; margin:auto">
        <div class="card-header"><?php echo $personas['nombre'][$i] ." ". $personas['apellido'][$i] ?></div>
        <div class="card-body">
          <h5 class="card-title"> <?= $personas['edad'][$i]?></h5>
          <p class="card-text"><?= $personas['mail'][$i]?></p>
        </div>
      </div>
      <?php }; ?>

    </div>


    <!-- jQuery y el JS de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
