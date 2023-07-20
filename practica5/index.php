<?php
require 'config.php';
session_start();
$sql="SELECT libros.nom_libro, autores.nom_autor FROM libros
INNER JOIN autores ON libros.autor_libro = autores.id_autor WHERE nom_libro LIKE '%an%' ";

$resultado = mysqli_query($conexion, $sql);


// En el caso de que la consulta traiga una respuesta, entonces la decodifico
if (mysqli_num_rows($resultado)!=0) {
  $resultado = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}else{
  $error = "Error";
}
//var_dump($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <?php for($i=0; $i < count($resultado); $i++){ ?>
    <div id="prueba"><?php echo $resultado[$i]['nom_libro'] ?><br>
    <?php echo $resultado[$i]['nom_autor'] ?>
    </div>
       <?php } ?> 
</body>
</html>

