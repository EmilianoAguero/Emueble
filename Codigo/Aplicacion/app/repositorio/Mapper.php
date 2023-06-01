<?php

namespace app\repositorio;

use app\modelo\Mueble;
use app\repositorio\BDConexion;
use app\repositorio\IMapper;
/**
 * @author GOLA BARRIA, Vanina
 * @author AGUERO, Emiliano
 * @author MARQUEZ, Emanuel
 */
class Mapper implements IMapper
{
    public function borrar($id)
    {
        $query = "DELETE FROM mueble WHERE id = ?";
        $stmt = BDConexion::getInstancia()->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function buscar($nombre)
    {
        $list = NULL;
        $query = "SELECT * FROM mueble WHERE nombre LIKE ?";
        $stmt = BDConexion::getInstancia()->prepare($query);
        $param = "%{$nombre}%";
        $stmt->bind_param("s", $param);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row) {
                $mueble = new Mueble($row['id'], $row['categoria'], $row['nombre'], $row['largo'], $row['ancho']);
                $list[] = $mueble;
            }
        }

        return $list;
    }

    public function insertar($mueble)
    {
        $query = "INSERT INTO mueble (categoria, nombre, largo, ancho) VALUES (?, ?, ?, ?)";
        $stmt = BDConexion::getInstancia()->prepare($query);
        $categoria = $mueble->getCategoria();
        $nombre = $mueble->getNombre();
        $largo = $mueble->getLargo();
        $ancho = $mueble->getAncho();
        $stmt->bind_param("ssdd", $categoria, $nombre, $largo, $ancho);
        return $stmt->execute();
    }

    public function modificar($mueble)
    {
        $query = "UPDATE mueble SET categoria=?, nombre=?, largo=?, ancho=? WHERE id=?";
        $stmt = BDConexion::getInstancia()->prepare($query);
        $categoria = $mueble->getCategoria();
        $nombre = $mueble->getNombre();
        $largo = $mueble->getLargo();
        $ancho = $mueble->getAncho();
        $id = $mueble->getId();
        $stmt->bind_param("ssddi", $categoria, $nombre, $largo, $ancho, $id);
        return $stmt->execute();
    }

    public function obtener($id)
    {
        $mueble = NULL;
        $query = "SELECT * FROM mueble WHERE id = ?";
        $stmt = BDConexion::getInstancia()->prepare($query);
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $mueble = new Mueble($row['id'], $row['categoria'], $row['nombre'], $row['largo'], $row['ancho']);
            }
        }
        return $mueble;
    }

    
    public function obtenertodos()
    {
       
        $list = NULL;
        $query = "SELECT * FROM mueble ";
        $stmt = BDConexion::getInstancia()->prepare($query);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row) {
                $mueble = new Mueble($row['id'], $row['categoria'], $row['nombre'], $row['largo'], $row['ancho']);
                $list[] = $mueble;
            }
        }

        return $list;
    }
}
