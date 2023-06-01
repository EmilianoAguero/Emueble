<?php

namespace app\servicio;

use app\repositorio\Mapper;

/**
 * @author GOLA BARRIA, Vanina
 * @author AGUERO, Emiliano
 * @author MARQUEZ, Emanuel
 */
class ServicioMueble
{
    private $repositorio;

    public function __construct()
    {
        $this->repositorio = new Mapper();
    }

    public function borrar($id)
    {
       return $this->repositorio->borrar($id);
    }

    public function buscar($nombre)
    {
        return $this->repositorio->buscar($nombre);
    }

    public function crear($mueble)
    {
        return $this->repositorio->insertar($mueble);
    }

    public function modificar($mueble)
    {
        return $this->repositorio->modificar($mueble);
    }

    public function obtener($id)
    {
        return $this->repositorio->obtener($id);
    }
    public function obtenertodos()
    {
        return $this->repositorio->obtenertodos();
    }
}
