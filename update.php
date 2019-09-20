<?php

// update.php

/**
* Establece la conexion de SQL
*/

$dsn = '1 - CENTRAL';
$user = 'sa';
$pass = 'Axoft1988';

$cid = odbc_connect($dsn, $user, $pass);


$id = $_POST['id'];
$nombre = $_POST['nombre'];
$pass = $_POST['pass'];
$permisos = $_POST['permisos'];
$dsn = $_POST['dsn'];
$descripcion = $_POST['descripcion'];
$codclient = $_POST['codclient'];
$nrosucurs = $_POST['nrosucurs'];
$codvended = $_POST['codvended'];
$tango = $_POST['tango'];



$update = "UPDATE SOF_USUARIOS SET 
NOMBRE = '$nombre',
PASS = '$pass',
PERMISOS = '$permisos',
DSN = '$dsn',
DESCRIPCION = '$descripcion',
COD_CLIENT = '$codclient',
NRO_SUCURS = '$nrosucurs',
COD_VENDED = '$codvended',
TANGO = '$tango'
WHERE ID = '$id'
";

odbc_exec($cid, $update);


?>