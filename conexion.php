<?php

$dsn = '1 - CENTRAL';
$user = 'sa';
$pass = 'Axoft1988';

$cid = odbc_connect($dsn, $user, $pass);

$sql = "SELECT * FROM SOF_USUARIOS ORDER BY NRO_SUCURS";



?>