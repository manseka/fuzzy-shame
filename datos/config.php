<?php

// Datos para la base de datos.
 
/**
 * El motor de la base de datos, puede ser
 * 'mysql', 'postgresql', 'orale', etc.
 */
define('BD_MOTOR', 'mysql');
 
/**
 * El host.
 */
define('BD_HOST', 'localhost');
 
/**
 * Algunos host compartidos tienen un prefijo para sus bases de datos.
 */
define('BD_PREFIJO_NOM', '');
 
/**
 * El nombre de la base de datos del sistema.
 */
define('BD_PRINCIPAL_NOM', 'E_Tienda_Virtual');
 
/**
 * El nombre del usuario.
 */
define('BD_USUARIO_NOM', 'root');
 
/**
 * La clave del usuario.
 */
define('BD_USUARIO_CLAVE', '1842lp');
 
/**
 * Texto que se agrega a los hash para aumentar su seguridad.
 * En el caso de que se transporte el sistema y se use el instalador, es
 * necesario copiar este valor, de otro modo las contraseñas no funcionarán.

define('HASH_SALT', 'd+ñsdop'); // Aún no implementado.
 * 
 */
 
?>
