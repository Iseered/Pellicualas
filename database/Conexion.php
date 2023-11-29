<?php

class Conexion {
    private $cn = null;

    function getConnection() {
        if ($this->cn == null) {
            $this->cn = mysqli_connect("localhost", "root", "", "bd_cine");
            $this->cn->set_charset("utf8mb4");
        }
        return $this->cn;
    }

}

?>