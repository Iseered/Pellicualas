<!DOCTYPE html>
<html lang="en">
    <head> 
        <title>Cine</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/style.css"> 
        <link rel="stylesheet" href="../assets/css/grid.css">
        <script src="https://kit.fontawesome.com/9105f47a47.js" crossorigin="anonymous"></script>
        <script defer src="../assets/js/index.js"></script>
    </head>
    <style>
        .detalle {
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr ; 
        }
    </style>
    <body>
        <?php include_once './../template/Navegacion.php'; ?>
        <br />  <br />  <br /><br />  <br />   <br />

        <?php
        include_once './../dao/PeliculaDAO.php';
        $daoPeli = new PeliculaDAO();
        $item = $daoPeli->buscarPorId($_REQUEST["id"]);
        ?>

    <center>
        <iframe width="90%" height="500" src="<?= $item['trailer'] ?>"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </center>


    <div style="width: 80%; margin: auto;">
        <h1>Detalle Pelicula</h1>
        <br />

        <div class="detalle" >
            <div >
                <center>
                    <a href="Detalle.php?id=<?= $item['id_pelicula'] ?>">
                        <img src="../assets/imagenes/peliculas/<?= $item['imagen'] ?>" style="width: 350px; height: 400px;">
                    </a>
                </center>
            </div>
            <div >
                <table>
                    <tr>
                        <td>
                            <form action="../control/ControlCarrito.php" method="post">
                                <fieldset id="" style="width:500px ; background-color: #f0f0f0 ; box-shadow: 2px 2px 5px #888 ; font-family: Arial, sans-serif;
                                          font-size: 16px; padding: 10px 10px 10px 10px;" >
                                    <div>
                                        <h1 style="font-size: 25px;text-transform: uppercase"><?= $item['nombre'] ?></h1>
                                    </div>

                                    <br />

                                    <div>
                                        <h2>SIPNOSIS</h2>
                                        <br />
                                        <p style="text-align: justify;"><?= $item['sipnosis'] ?></p>
                                    </div>


                                    <br />

                                    <div >
                                        <label>Cantidad Entradas:</label>

                                        <input type="number" min="1" required="" name="cantidad" />

                                    </div>


                                    <div class="boton_registro">
                                        <input type="hidden" name="imagen" value="<?= $item['imagen'] ?>">
                                        <input type="hidden" name="nombre" value="<?= $item['nombre'] ?>">
                                        <input type="hidden" name="codigo" value="<?= $item['id_pelicula'] ?>">
                                        <input type="hidden" name="accion" value="agregar">
                                        <input type="submit" id="boton_registro" value="Agregar">
                                    </div>

                                </fieldset>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <br />
    <?php include_once './../template/Footer.php'; ?>
</body>

</html>