<?php

include_once '../database/Conexion.php';

class ClienteDAO {

    function registrar($nombres, $apellidos, $tipoDoc, $nroDoc , $celular , $correo , $contrasennia,$cineFavorito , $genero) {
        $obj = new Conexion();
        $sql = "insert into Cliente(nombres,apellidos,tipo_doc,nro_doc,celular,correo,contrasennia,cine_favorito,genero) "
                . " values ('$nombres','$apellidos','$tipoDoc','$nroDoc','$celular','$correo','$contrasennia' , '$cineFavorito','$genero')";
        $res = mysqli_query($obj->getConnection(), $sql) or
                die(mysqli_error($obj->getConnection()));
        return $res;
    }

}

?>