<?php
include_once "bd.php";
/* try {
    include_once "../Modelo/bd.php";
} catch (Exception $ex) {
    throw $ex;
} */

class Dispositivos extends BD
{
    private $idDispositivo;
    private $caracteristicas;
    private $precio;
    private $existencia;
    private $descuento;
    private $cantVendida;
    private $img1;
    private $img2;
    private $img3;
    private $idMarca;
    private $idCategoria;
    private $idUsuario;

    function __construct($id, $cara, $pre, $exis, $des, $cant, $img1, $img2, $img3, $marca, $cate, $user)
    {
        $this->idDispositivo = $id;
        $this->caracteristicas = $cara;
        $this->precio = $pre;
        $this->existencia = $exis;
        $this->descuento = $des;
        $this->cantVendida = $cant;
        $this->img1 = $img1;
        $this->img2 = $img2;
        $this->img3 = $img3;
        $this->idMarca = $marca;
        $this->idCategoria = $cate;
        $this->idUsuario = $user;
    }

    function registrar()
    {
        try {
            $this->conectar();
            $sql = 'INSERT INTO dispositivo (caracteristicas,precio,existencia,descuento,cantVendida,img1,img2,img3,idMarca,idCategoria,idUsuario) 
            values (?,?,?,?,?,?,?,?,?,?,?)';
            $consulta = $this->conexion->prepare($sql);
            $consulta->bind_param('sdidisssiii', $this->caracteristicas, $this->precio, $this->existencia, $this->descuento, $this->cantVendida, $this->img1, $this->img2, $this->img3, $this->idMarca, $this->idCategoria, $this->idUsuario);

            $consulta->execute();
            if ($consulta->affected_rows > 0) {
                return true;
            }
            return false;
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    public function obtenerTodosDispositivos()
    {
        try {
            $this->conectar();
            $sql = 'SELECT * FROM dispositivo WHERE idUsuario = ?';
            $consulta = $this->conexion->prepare($sql);
            $consulta->bind_param('i', $this->idUsuario);

            $consulta->execute();

            return $consulta->get_result()->fetch_all(MYSQLI_ASSOC);
        } catch (Exception $ex) {
            throw $ex;
        }
    }


/*     public static function buscarDispositivoID($idDispositivo)
    {

        $db = new BD();
        if ($db->conectar()) {
            $sql = "SELECT idDispositivo, Caracteristicas, Precio,Existencia, Descuento, CantVendida, img1, img2, img3, idMarca,idCategoria, idUsuario FROM Dispositivo WHERE idDispositivo=" . $idDispositivo;
            //var_dump($sql);
            $result = $db->conn->query($sql);
            if (is_null($result)) {
                return false;
            }
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $d = new Dispositivos(
                        $row["idDispositivo"],
                        $row["Caracteristicas"],
                        $row["Precio"],
                        $row["Existencia"],
                        $row["Descuento"],
                        $row["CantVendida"],
                        $row["img1"],
                        $row["img2"],
                        $row["img3"],
                        $row["idMarca"],
                        $row["idCategoria"],
                        $row["idUsuario"]
                    );
                    return $d;
                }
            }
        } else {
            return false;
        }
    }

    public function actualizar()
    {
        $db = new BD();
        if ($db->conectar()) {
            $sql = "UPDATE dispositivo
                    SET caracteristicas = '" . $this->caracteristicas . "',
                    precio='" . $this->precio . "',
                    existencia='" . $this->existencia . "',
                    descuento='" . $this->descuento . "',
                    cantVendida='" . $this->cantVendida . "',
                    idMarca='" . $this->idMarca . "',
                    idCategoria='" . $this->idcategoria . "'
                    
                    WHERE idDispositivo=" . $this->idDispositivo;
        }
    }

    public static function eliminar($id){
        $bd = new BD();
        if($bd->conectar()){
            $sql="DELETE FROM dispositivo WHERE idDispositivo=".$id;
        }

        if($bd->conn->query($sql) === TRUE){
            $bd->desconectar();
            return true;
        }else{
            $bd->desconectar();
            return false;
        }
    } */
}
