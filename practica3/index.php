<?php 
session_start();
if(!$_SESSION['cliente']){
    header('Location: Practica3.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inicio de Sesion correcto</h1>    
</body>
<?php session_destroy(); ?>
</html>