<?php
//ini_set ("display_errors","1" );
error_reporting(E_ALL); 
// El servidor con el formato: <computer>\<instance name> o 
// <server>,<port> cuando se use un número de puerto diferente del de defecto
$server = 'good.experto-hosting.com:50932';
$username = 'reporteEcoApp';
$password = '4ppr3P0rT3Ec0';
$database = 'ReporteEconimicoDev';

?php

$conn = mssql_connect($server,$username, $password);

mssql_select_db( $database, $conn );

$query_result = mssql_query( "SELECT * FROM menus", $conn );

echo "The field number one is: ";

echo mssql_result ($query_result, 0, 0);

mssql_close($conn); // close connection

?>
