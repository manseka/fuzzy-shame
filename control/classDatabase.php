<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classDatabase
 *
 * @author manseka
 * @version Expression version is undefined on line 15, column 15 in Templates/Scripting/PHPClass.php.
 */
class database extends PDO {

    private $sql;

    public function __construct($dsn, $username, $passwd, $opciones) {
        try {
            parent::__construct($dsn, $username, $passwd, $opciones);
        } catch (Exception $e) {
            // Aca Captura los Errores  
            printf("Conneccion Fallida con la Base de Datos: %s\n", $e->getMessage());
            exit();
        }
    }

}
