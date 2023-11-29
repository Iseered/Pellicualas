<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/style.css"> 
        <link rel="stylesheet" href="../assets/css/grid.css">
        <script src="https://kit.fontawesome.com/9105f47a47.js" crossorigin="anonymous"></script>
        <script defer src="../assets/js/index.js"></script>
        <title>Cines</title>
    </head>
    <body>
        <?php include_once './../template/Navegacion.php'; ?>

        <br />  <br />  <br />
        <nav>
            <h1>Cines</h1>
            <article>
                <div class="select">
                    <select name="format" id="format">
                        <option selected disabled>Cines</option>
                        <option value="lim">Aviacion</option>
                        <option value="moq">Benavides</option>
                        <option value="puc">Breña</option>
                        <option value="piu">Chorrillos</option>
                        <option value="tac">Comas</option>
                        <option value="tara">SanJuan</option>
                        <option value="tum">Sur</option>
                        <option value="chim">Uni</option>
                    </select>
                </div>
            </article>

            <section>
                <div class="container">
                    <div class="section">
                        <div class="parrafo">
                            <h1>Cinestar Aviacion</h1>
                            <a href="https://maps.app.goo.gl/nYJE7AiZDi14Hcno7" style="text-decoration:none"><p>Av. Aviación 2400, San Borja 15037</p></a>
                        </div>
                        <a href="">
                            <img src="../assets/imagenes/Aviacion.png">
                        </a>
                    </div>
                    <div class="section">
                        <div class="parrafo">
                            <h1>Cinestar Benavides</h1>
                            <a href="https://maps.app.goo.gl/XEntR3dzd3RmhFBK9" style="text-decoration:none"><p>Avenida Alfredo Benavides Nº 4981 Santiago de Surco</p></a>
                        </div>
                        <a href="">
                            <img src="../assets/imagenes/Benavides.jpg">
                        </a>
                    </div>
                    <div class="section">
                        <div class="parrafo">
                            <h1>Cinestar Breña</h1>
                            <a href="../assets/https://maps.app.goo.gl/qN5R3TeiPYDtUMzx7" style="text-decoration:none"><p>Iquique 315, Breña 15082</p></a>
                        </div>
                        <a href="">
                            <img src="../assets/imagenes/Breña.jpg">
                        </a>
                    </div>
                    <div class="section">
                        <div class="parrafo">
                            <h1>Cinestar Chorrillos</h1>
                            <a href="https://maps.app.goo.gl/4bvHjnjkJyCoX3fx7" style="text-decoration:none"><p>Av. Guardia Civil Sur 390, Chorrillos 15056</p></a>
                        </div>
                        <a href="">
                            <img src="../assets/imagenes/Chorrillos.jpg">
                        </a>
                    </div>
                    <div class="section">
                        <div class="parrafo">
                            <h1>Cinestar Comas</h1>
                            <a href="https://maps.app.goo.gl/Xy1eF7H4iiNCrPvw8" style="text-decoration:none"><p>Abraham Valdelomar 828, Comas 15326</p></a>
                        </div>
                        <a href="">
                            <img src="../assets/imagenes/Comas.jpg">
                        </a>
                    </div>

                    <span class="hide" id="hideTxt">
                        <div class="section">
                            <div class="parrafo">
                                <h1>Cinestar SanJuan</h1>
                                <a href="https://maps.app.goo.gl/EKnEj9C32hYiAtV3A" style="text-decoration:none"><p>Av. Próceres de la Independencia 1632, San Juan de Lurigancho 15431</p></a>
                            </div>
                            <a href="">
                                <img src="../assets/imagenes/SanJuan.jpg">
                            </a>
                        </div>

                        <div class="section">
                            <div class="parrafo">
                                <h1>Cinestar Sur</h1>
                                <a href="https://maps.app.goo.gl/JeQDWMuV17L9oJvUA" style="text-decoration:none"><p>Av. los Héroes 240, San Juan de Miraflores 15801</p></a>
                            </div>
                            <a href="">
                                <img src="../assets/imagenes/Sur.jpg">
                            </a>
                        </div>

                        <div class="section">
                            <div class="parrafo">
                                <h1>Cinestar UNI</h1>
                                <a href="https://maps.app.goo.gl/UPvgAH5rgAfXM9rD8" style="text-decoration:none"><p>Rímac 15333</p></a>
                            </div>
                            <a href="">
                                <img src="../assets/imagenes/Uni.jpg">
                            </a>
                        </div>
                    </span>
                    <div class="boton">
                        <button class="readMore_btn" id="hideTxt_btn">Ver mas cines</button>
                    </div>
                </div>
                <script>

                    let hideTxt_btn = document.getElementById("hideTxt_btn");
                    let hideTxt = document.getElementById("hideTxt");

                    hideTxt_btn.addEventListener("click", toggleText);

                    function toggleText() {
                        hideTxt.classList.toggle("show");

                        if (hideTxt.classList.contains("show")) {
                            hideTxt_btn.innerHTML = "Ver menos cines";
                        } else {
                            hideTxt_btn.innerHTML = "Ver mas cines";
                        }
                    }
                </script>
            </section>
        </nav>
        <div class="aviso">
            <div class="import">
                <p>Aviso Importante</p>
            </div>
            <p>El horario de apertura del cine 
                es 15 minutos antes de la primera funcion programada</p>
        </div>

        <?php include_once './../template/Footer.php'; ?>

    </body>
</html>