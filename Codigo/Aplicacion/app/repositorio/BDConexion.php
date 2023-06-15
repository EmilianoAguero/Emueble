<?php

namespace app\repositorio;

use mysqli;
use Exception;

/**
 * @author GOLA BARRIA, Vanina
 * @author AGUERO, Emiliano
 * @author MARQUEZ, Emanuel
 */
class BDConexion extends mysqli 
{

    public static $instancia;

    public function __construct()
    {
        try {   
            global $g_db_hostname, $g_db_basename, $g_db_username, $g_db_password;
            parent::__construct('localhost', 'root', '', 'emueble');
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public static function getInstancia() {
        if (!self::$instancia instanceof self) {
            try {
                self::$instancia = new self;
            } catch (Exception $e) {
                die("Error de conexion a la base de datos: {$e->getCode()}.");
            }
        }
        return self::$instancia;
    }
    
}