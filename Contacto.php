<?php
class Contacto
{
    private $nombre;
    private $direccion;
    private $correoElectronico;

    public function __construct($nombre, $direccion, $correoElectronico)
    {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->correoElectronico = $correoElectronico;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getCorreoElectronico()
    {
        return $this->correoElectronico;
    }

    public function setCorreoElectronico($correoElectronico)
    {
        $this->correoElectronico = $correoElectronico;
    }

}
