<?php

namespace app\modelo;

/**
 * @author GOLA BARRIA, Vanina
 * @author AGUERO, Emiliano
 * @author MARQUEZ, Emanuel
 */
class Mueble
{
    private $id;
    private $categoria;
    private $nombre;
    private $largo;
    private $ancho;
    private $medida;

    public function __construct(
        $id = NULL,
        $categoria = NULL,
        $nombre = NULL,
        $largo = NULL,
        $ancho = NULL
    ) {
        $this->id = $id;
        $this->categoria = $categoria;
        $this->nombre = $nombre;
        $this->largo = $largo;
        $this->ancho = $ancho;
        $this->medida = ($this->largo && $this->ancho) ? ($this->largo * $this->ancho) : null;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getLargo()
    {
        return $this->largo;
    }

    public function getAncho()
    {
        return $this->ancho;
    }

    public function getMedida()
    {
        return $this->medida;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setLargo($largo)
    {
        $this->largo = $largo;
    }

    public function setAncho($ancho)
    {
        $this->ancho = $ancho;
    }

    
}
