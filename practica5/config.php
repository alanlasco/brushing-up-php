<?php
$servidor = 'localhost';
$usuarioBD = 'root';
$passBD = '';
$BaseDatos = 'libreria';

error_reporting(0);

$conexion = mysqli_connect($servidor, $usuarioBD, $passBD, $BaseDatos);
mysqli_set_charset($conexion, "utf8");


?>