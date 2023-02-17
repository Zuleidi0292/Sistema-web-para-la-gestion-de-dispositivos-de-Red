<?php

class BD
{
    private string $host = 'localhost';
    private String $user = 'root';
    private String $pass = '';
    private String $bd = 'bdtienda';
    protected mysqli $conexion;

    public function __construct()
    {
        $this->conexion = null;
    }

    public function conectar()
    {
        $this->conexion = new mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->bd
        );

        if ($this->conexion->connect_errno) {
            $this->conexion->close();
            return false;
        }
        return true;
    }

    public function desconectar()
    {
        if (!is_null($this->conexion)) {
            try {
                $this->conexion->close();
                $this->conexion = null;
            } catch (Exception $ex) {
                throw $ex;
            }
        }
    }
}
