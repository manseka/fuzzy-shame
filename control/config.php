<?php

/* 
 * Configurar Aqui los datos para la conexion.
 * 
 * 
 */
require_once 'classDatabase.php';

$config['data'] = array(
		'host'		=>'localhost',
		'port'		=> '8889',
		'usuario' 	=> 'root',
		'clave'		=> '1842lp',
		'dbNombre'      => 'tiendaVirtual'
		
);


$dsn='mysql:host='.$config['data']['host'].';port='.$config['data']['port'].
        ';dbname='.$config['data']['dbNombre'];

$opciones ='PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"';

$db = new database($dsn, $config['data']['usuario'], $config['data']['clave'], $opciones);

