<?php

namespace app\modelo;


/**
 * Listados de atm.
 * 
 * @package app\modelo. 
 * 
 * @uses MySQLServer app\modelo\MySQLServer.
 * 
 * @author  Vanina Luciana Gola Barria <vanina.gola@santacruz.com>
 * 
 * @version 1.0
 * 
 */
class EscrituraColeccion
{
    public static function buscar($escrito, $folio, $fecha) {
        $query = "SELECT * FROM mueble";
        $stmt = BDConexion::getInstancia()->prepare($query);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                
            }
        }
        return $row;
    }

  
    
}