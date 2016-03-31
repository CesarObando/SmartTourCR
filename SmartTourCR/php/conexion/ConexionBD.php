<?php

/* 
Conexion a la base de datos
 * Fecha 23/03/2016
 * Autor:Allan Moya
 */

$conexion = mysql_connect('163.178.107.130', 'adm', 'saucr.092')or die('No se pudo conectar: ' . mysql_error());
echo 'Conexion exitosa';
mysql_select_db('smarttour') or die('No se pudo seleccionar la base de datos');
