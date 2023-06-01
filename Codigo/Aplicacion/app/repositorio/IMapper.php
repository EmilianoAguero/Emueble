<?php

namespace app\repositorio;


/**
 * @author GOLA BARRIA, Vanina
 * @author AGUERO, Emiliano
 * @author MARQUEZ, Emanuel
 */
interface IMapper 
{
    public function borrar($id);
   

    public function buscar($nombre);
  

    public function insertar($mueble);
  

    public function modificar($mueble);
  

    public function obtener($id);
   
    public function obtenertodos();
 
}
