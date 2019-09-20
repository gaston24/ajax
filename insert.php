<?php

// update.php

/**
* Establece la conexion de SQL
*/

$dsn = '1 - CENTRAL';
$user = 'sa';
$pass = 'Axoft1988';

$cid = odbc_connect($dsn, $user, $pass);



$nombre = $_POST['nombre'];
$pass = $_POST['pass'];
$permisos = $_POST['permisos'];
$dsn = $_POST['dsn'];
$descripcion = $_POST['descripcion'];
$codclient = $_POST['codclient'];
$nrosucurs = $_POST['nrosucurs'];
$codvended = $_POST['codvended'];
$tango = $_POST['tango'];



$update = "INSERT INTO SOF_USUARIOS 
VALUES
( 
'$nombre', '$pass', $permisos, '$dsn', '$descripcion', '$codclient', $nrosucurs, '$codvended', '$tango'
)
";

odbc_exec($cid, $update);



?>