<?php

session_start();

$accion = $_REQUEST["accion"];

$carrito = array();
if (isset($_SESSION["carrito"])) {
    $carrito = $_SESSION["carrito"];
}

if ($accion === "listar") {
    header("location: ./../vista/Carrito.php");
} else if ($accion === "agregar") {
    $codigo = $_REQUEST["codigo"];
    $nombre = $_REQUEST["nombre"];
    $imagen = $_REQUEST["imagen"];
    $cantidad = $_REQUEST["cantidad"];


    $index = Buscar($codigo, $carrito);

    if ($index == -1) {
        $cp = array($codigo, $nombre, $cantidad, $imagen);
        $carrito[] = $cp;
    } else {
        $carrito[$index][2] += $cantidad;
    }

    $_SESSION["carrito"] = $carrito;

     header("location: ./../vista/Carrito.php");
} else if ($accion === "anular") {

    $indice = $_REQUEST["key"];

    unset($carrito[$indice]);
    $_SESSION["carrito"] = $carrito;
    header("location: ./../vista/Carrito.php");
}

function Buscar($code, $carrito) {
    foreach ($carrito as $key => $item) {
        if ($code == $item[0]) {
            return $key;
        }
    }
    return -1;
}
?>

