<!DOCTYPE html>
<html lang="en">
    <head> 
        <title>Trabajo Final</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/style.css"> 
        <link rel="stylesheet" href="../assets/css/grid.css">
        <script src="https://kit.fontawesome.com/9105f47a47.js" crossorigin="anonymous"></script>
        <script defer src="../assets/js/index.js"></script>
        
    </head>

    <body>
        <?php include_once './../template/Navegacion.php'; ?>
        <?php
        include_once './../dao/PeliculaDAO.php';
        $daoPeli = new PeliculaDAO();
        ?>
        <div id="conteItmenCarrusel">
            <div class="itemCarrusel" id="ic1">
                <div class="targetCarusel" id="tc1">
                    <img src="../assets/imagenes/movieBanner.png" class="img-carrusel">
                </div>
                <div class="direcciones">
                    <a href="#ic3"><i class="fa-solid fa-circle-chevron-left"></i></a>
                    <a href="#ic2"><i class="fa-solid fa-circle-chevron-right"></i></a>
                </div>
            </div>
            <div class="itemCarrusel" id="ic2">
                <div class="targetCarusel" id="tc2">
                    <img src="../assets/imagenes/movieBanner2.jpg" class="img-carrusel">
                </div>
                <div class="direcciones">
                    <a href="#ic1"><i class="fa-solid fa-circle-chevron-left"></i></a>
                    <a href="#ic3"><i class="fa-solid fa-circle-chevron-right"></i></a>
                </div>
            </div>
            <div class="itemCarrusel" id="ic3">
                <div class="targetCarusel" id="tc3">
                    <img src="../assets/imagenes/movieBanner3.png" class="img-carrusel">
                </div>
                <div class="direcciones">
                    <a href="#ic2"><i class="fa-solid fa-circle-chevron-left"></i></a>
                    <a href="#ic1"><i class="fa-solid fa-circle-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <h1>Películas</h1>
        <div class="grid-container">
            <?php
            foreach ($daoPeli->ListarTodos() as $item) {
                ?>
                <div class="grid-movie">
                    <a href="Detalle.php?id=<?= $item['id_pelicula'] ?>">
                        <img src="../assets/imagenes/peliculas/<?= $item['imagen'] ?>" alt="">
                    </a>
                </div>
                    <?php
                }
                ?>

        </div>

        <?php include_once './../template/Footer.php'; ?>
    </body>

</html>