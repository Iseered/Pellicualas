<?php

include_once '../database/Conexion.php';

class RegistroPeliculaDAO {

    function registrar($id_registro, $id_cliente, $nombre_pelicula, $cantidad) {
        $obj = new Conexion();
        $sql = "INSERT INTO registro(id_registro, id_cliente, nombre_pelicula, cantidad) "
             . "VALUES ('$id_registro', '$id_cliente', '$nombre_pelicula', '$cantidad')";
        $res = mysqli_query($obj->getConnection(), $sql) or
                die(mysqli_error($obj->getConnection()));
        return $res;
    }

}

?>