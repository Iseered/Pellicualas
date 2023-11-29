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
        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            flex-direction: column;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.25rem;
        }
        .card-content {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1.25rem;
        }

        table {
            border-collapse: collapse;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            text-align: center;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }
    </style>
    <body>
        <?php
        session_start();
        include_once './../template/Navegacion.php';
        ?>
        <br />  <br />  <br /><br />  <br />   <br />

        <div style="width: 80%; margin: auto;">

            <div class="card">
                <div class="card-content">
                    <h1>Mi Carrito</h1>
                    <br />

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Imagen</th>
                                <th>Pelicula</th>
                                <th>Cant Entradas</th>
                                <th>Acción</th>
                               
                            </tr>
                        </thead>
                        <tbody >
                            <?php
                            if (!isset($_SESSION["carrito"]) || empty($_SESSION["carrito"])) {
                                echo "<tr><td class='text-center' colspan='4'>No se encontraron datos</td></tr>";
                            } else {
                                foreach ($_SESSION["carrito"] as $index => $item) {
                                    ?>
                                    <tr>
                                        <td><?= $index + 1 ?></td>
                                        <td>
                                            <img src="../assets/imagenes/peliculas/<?= $item[3] ?>" style="width: 100px; height: 100px;">
                                        </td>
                                        <td><?= $item[1] ?></td>
                                        <td><?= $item[2] ?></td>
                                        <td>
                                            <a href="../control/ControlCarrito.php?accion=anular&key=<?= $index ?>">Quitar</a>
                                        </td>
                                        
                                    </tr>

                                    <?php
                                }
                            }
                            ?>


                        </tbody>
                    </table>

                    <td>
                                            <a href="../control/ControlCarrito.php?accion=anular&key=<?= $index ?>">Registrar</a>
                                        </td>
                </div>
            </div>
        </div>

        <br />
        <?php include_once './../template/Footer.php'; ?>
    </body>

</html>