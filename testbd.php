<?php
// El servidor con el formato: <computer>\<instance name> o 
// <server>,<port> cuando se use un número de puerto diferente del de defecto
$server = 'good.experto-hosting.com:50932';
$username = 'reporteEcoApp';
$password = '4ppr3P0rT3Ec0';
$database = 'ReporteEconimicoDev';

foreach(PDO::getAvailableDrivers() as $driver)
{
echo $driver.'<br />';
}

$connection = mssql_connect($server, $username, $password);
if (!$connection) {  die('Not connected : ' . mssql_get_last_message());} 


$db_selected = mssql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mssql_get_last_message());
} 


$query = "SELECT * FROM menus";
$result = mssql_query($query);


foreach ($result as $row) {
	echo $row[id];
}

if (!$result) {  
  die('Invalid query: ' . mssql_get_last_message());
} 
