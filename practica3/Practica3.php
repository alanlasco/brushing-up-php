<?php 
session_start();
$usuario=$pass=$error ="";
$usuarioGuardado = "alan96";
$passGuardada="1234";
if(isset($_POST) && !empty($_POST)){
  if(!empty($_POST['usuario'])){
    $usuario = $_POST['usuario'];
  }else{
    $error .= "El usuario debe ser completado<br>";
  }
  if(!empty($_POST['contraseña'])){
    $pass = $_POST['contraseña'];
  }else{
    $error .= "La contraseña debe ser completado<br>";
  } 
  
  if(($usuario==$usuarioGuardado)&&($pass==$passGuardada)){
    $_SESSION = ['usuario'=>$usuario,'cliente'=>true];
    header('Location: index.php');
  }else{
    $error .= "El usuario o la contraseña no son correctos";
  }

}




?>

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



      <div style="width:50%; margin:auto">
        <div class="jumbotron">
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <h3>Inicio de sesión</h3><br>
            <div class="form-group">
              <label for="usuario">Usuario</label>
              <input type="text" id="usuario" class="form-control"  name="usuario">
            </div>
            <div class="form-group">
              <label for="pass">Contraseña</label>
              <input type="password" id="pass" class="form-control" name="contraseña">
            </div>
            <div class="form-group">
              <input type="checkbox" id="recuerdame" style="margin-left:0rem;" class="form-check-input" name="Recuerdame" value="ok">
              <label class="form-check-label" for="recuerdame">Recuerdame</label>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar sesion</button>
            <div style="color: red">
              <?php echo $error ?>

            </div>
          </form>
        </div>
      </div>


    <!-- jQuery y el JS de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
