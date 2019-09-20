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




$update = "
DELETE FROM SOF_USUARIOS WHERE ID = $id
";

odbc_exec($cid, $update);



?>