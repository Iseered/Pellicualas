<?php

include_once '../database/Conexion.php';

class PeliculaDAO {

    function ListarTodos() {
        $obj = new Conexion();
        $sql = "select id_pelicula,nombre,imagen,sipnosis
                from Pelicula";
        $res = mysqli_query($obj->getConnection(), $sql) or
                die(mysqli_error($obj->getConnection()));
        $vec = array();

        while ($fila = mysqli_fetch_array($res)) {
            $vec[] = $fila;
        }
        return $vec;
    }
    
    
    function buscarPorId($id) {
        $obj = new Conexion();
        $sql = "select *
                from Pelicula
                where id_pelicula = $id";
        $res = mysqli_query($obj->getConnection(), $sql) or
                die(mysqli_error($obj->getConnection()));

        if (mysqli_num_rows($res) > 0) {
            $vec = mysqli_fetch_array($res);
        } else {
            $vec = array();
        }
        return $vec;
    }


}

?>