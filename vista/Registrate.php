
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../assets/css/main.css">
        <title>Cine</title>
        <style>
            /* Estilos para el formulario */

            span{
                font-size: 10px;
                font-weight: bold;
            }

            label {
                position: absolute;
                font-weight: bold;
                left: 5px;
                padding-left: 15px;
           
                top:30%; /*-40% para el primer efecto*/
                /*transform: translateY(-50%);
                transition: transform 0.3s, font-size 0.3s, color 0.3s;*/
                transform-origin:0 0;
                transition:opacity 0.1s ease-in-out,transform 0.1s ease-in-out;
                font-size:13px;
                color:#979797;
            }

            input[type="text"] , input[type="password"], select,input[type="check"]{
                padding-top:20px;
                padding-left: 5px;
                padding-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                width: 450px;
            }

            input:focus + label,
            input:not(:placeholder-shown) + label {
                /*transform: translateY(-20px);*/
                font-size: 12px;
                color: #007BFF;
                transform:scale(.8) translateY(-.8rem) translateX(.15rem);
                opacity:.8;
            }

            .boton_registro {
                text-align: center;
            }

            .form-group {
                margin-bottom: 20px;
                margin-right:20px;
                position: relative;
                margin: 20px;
            }

        </style>
        <script>

            function validarFormulario() {
                var validacionNombre = validarNombre();
                var validacionApellidos = validarApellidos();
                var validacionDocumento = validarDocumento();
                var validacionCelular = validarCelular();
                var validacionCorreo = validarCorreo();
                var validacionCheckBox = validarCheckbox();

                if (validacionNombre && validacionApellidos && validacionCelular && validacionDocumento && validacionCorreo && validacionCheckBox) {

                    if (confirm("¿Está seguro de enviar el formulario?")) {
                        // Si el usuario acepta, procesar el formulario normalmente
                        return true;
                    } else {
                        // Si el usuario cancela, mantener al usuario en el formulario
                        return false;
                    }

                } else {
                    return false;
                }
            }
            function validarNombre() {
                var nombre = document.getElementById('input_nombre').value;
                if (nombre === "") {
                    // El campo de nombre está vacío, muestra un mensaje de error en rojo
                    document.getElementById('mensajeError_Nombre').style.color = "red";
                    document.getElementById('mensajeError_Nombre').innerHTML = "Ingresa un nombre.";
                    return false;
                } else {
                    document.getElementById('mensajeError_Nombre').innerHTML = "";
                    return true;
                }
            }
            function validarApellidos() {
                var Apellidos = document.getElementById('input_apellidos').value;
                if (Apellidos === "") {
                    // El campo de nombre está vacío, muestra un mensaje de error en rojo
                    document.getElementById('mensajeError_apellido').style.color = "red";
                    document.getElementById('mensajeError_apellido').innerHTML = "Debes ingresar tus apellidos.";
                    return false;
                } else {
                    document.getElementById('mensajeError_apellido').innerHTML = "";
                    return true;
                }
            }
            function cambiarPlaceholder() {
                var selector = document.getElementById('tipo_doc');
                var inputDocumento = document.getElementById('input_documento');

                if (selector.value === "Dni") {
                    inputDocumento.placeholder = "";
                } else if (selector.value === "Carnet de Extranjeria") {
                    inputDocumento.placeholder = "";
                } else {
                    inputDocumento.placeholder = "";
                }
            }

            function validarDocumento() {
                var selector = document.getElementById('tipo_doc');
                var inputDocumento = document.getElementById('input_documento');
                var mensajeError = document.getElementById('mensajeError_Documento');
                var valor = inputDocumento.value;

                if (selector.value === "Dni") {
                    if (/^\d{8}$/.test(valor)) {
                        mensajeError.innerHTML = ""; // Campo válido, elimina cualquier mensaje de error
                        return true;
                    } else {
                        mensajeError.style.color = "red";
                        mensajeError.innerHTML = "El DNI debe tener 8 dígitos numéricos.";
                        return false;
                    }
                } else if (selector.value === "Carnet de Extranjeria") {
                    if (/^\d{10,20}$/.test(valor)) {
                        mensajeError.innerHTML = ""; // Campo válido, elimina cualquier mensaje de error
                        return true;
                    } else {
                        mensajeError.style.color = "red";
                        mensajeError.innerHTML = "El Carnet de Extranjeria debe tener entre 10 y 20 dígitos numéricos.";
                        return false;
                    }
                } else {
                    mensajeError.innerHTML = ""; // Campo válido, elimina cualquier mensaje de error si no es DNI ni Carnet de Extranjería
                }
            }
            function validarCelular() {
                var inputCelular = document.getElementById('input_celular');
                var mensajeError = document.getElementById('mensajeError_Celular');
                var valor = inputCelular.value;

                if (/^\d{9}$/.test(valor)) {
                    mensajeError.innerHTML = ""; // Campo válido, elimina cualquier mensaje de error
                    return true;
                } else {
                    mensajeError.style.color = "red";
                    mensajeError.innerHTML = "El Celular debe tener 9 dígitos numéricos.";
                    return false;
                }
            }
            function validarCorreo() {
                var inputCorreo = document.getElementById('input_email');
                var mensajeError = document.getElementById('mensajeError_Email');
                var valor = inputCorreo.value;

                if (/@.*\.com$/.test(valor)) {
                    mensajeError.innerHTML = ""; // Campo válido, elimina cualquier mensaje de error
                    return true;
                } else {
                    mensajeError.style.color = "red";
                    mensajeError.innerHTML = "El correo no cumple con el formato deseado.";
                    return false;
                }
            }
            function validarCheckbox() {
                var checkbox = document.getElementById('check_terminos');
                var mensajeError = document.getElementById('mensajeError_checkbox');
                if (checkbox.checked) {
                    mensajeError.innerHTML = "";
                    console.log("El checkbox está marcado.");
                    return true;
                } else {
                    mensajeError.style.color = "red";
                    mensajeError.innerHTML = "Debe marcar la casilla.";
                    console.log("El checkbox no está marcado.");
                    return false;
                }
            }
            window.onload = function () {
                // Configurar la selección inicial y ejecutar la validación al cargar la página
                var selector = document.getElementById('tipo_doc');
                selector.value = "Dni"; // Establecer la opción "DNI" como seleccionada
                cambiarPlaceholder(); // Ejecutar la función de validación
            }
            ;
        </script>
    </head>
    <body>
        <?php include_once './../template/Navegacion.php'; ?>
        <br />  <br />  <br />    <br />  <br />  <br />
        <form method="post" id="Registro-cliente" onsubmit="return validarFormulario()">
            <fieldset id="Registro-cliente" style="width:500px; margin: auto ; background-color: #f0f0f0 ; box-shadow: 2px 2px 5px #888 ; font-family: Arial, sans-serif;
                      font-size: 16px" >
                <legend>Registro de cliente</legend>

                <div class="form-group">
                    <input type="text" id="input_nombre" name="input_nombre" placeholder="" oninput="validarNombre()"  />
                    <label for="input_nombre">Nombre</label>
                    <span id="mensajeError_Nombre"></span>
                </div>

                <div class="form-group">
                    <input type="text" id="input_apellidos" name="input_apellidos" placeholder="" oninput="validarApellidos()" />
                    <label for="input_apellidos">Apellidos</label>
                    <span id="mensajeError_apellido"></span>
                </div>

                <div class="form-group">
                    <label for="select_tipodoc" >Tipo de documento:</label><br><br>
                    <select id="tipo_doc" name="tipo_doc" onchange="validarDocumento();
                            cambiarPlaceholder()">
                        <option value="Dni">Dni</option>
                        <option value="Carnet de Extranjeria">Carnet de Extranjeria</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="text" id="input_documento" name="input_documento" oninput="validarDocumento()" />
                    <label for="input_documento">N° de documento</label>
                    <span id="mensajeError_Documento"></span>
                </div>

                <div class="form-group">
                    <input type="text" id="input_celular" name="input_celular" placeholder="" oninput="validarCelular()" "/>
                    <label for="input_celular" >Celular</label>
                    <span id="mensajeError_Celular"></span>
                </div>

                <div class="form-group">
                    <input type="text" id="input_email" name="input_email" placeholder="" oninput="validarCorreo()" />
                    <label for="input_email">Correo electrónico</label>
                    <span id="mensajeError_Email"></span>
                </div>

                <div class="form-group">
                    <input type="password" id="input_contraseña" name="input_contraseña" placeholder="" required=""/>
                    <label for="input_contraseña">Contraseña</label>
                    <span id="mensajeError_Contraseña"></span>
                </div>
                <br />
                <div style=" 
                margin-right:20px;
                position: relative;
                margin: 20px;">
                    <input type="radio" id="input_genero" name="input_genero"required="" value="Masculino" checked=""/> Masculino
                     <input type="radio" id="input_genero" name="input_genero"required="" value="Femenino"/> Femenino
                     <label for="input_genero" style="margin-top: -35px;">Genero</label>
                    <span id="mensajeError_genero"></span>
                </div>

                <div class="form-group">
                    <label for="cine_favorito" >Cine Favorito:</label><br><br>
                    <select id="cine_favorito" name="cine_favorito" >
                        <option value="Aviacion">Aviacion</option>
                        <option value="Benavides">Benavides</option>
                        <option value="Breña">Breña</option>
                        <option value="Chorrillos">Chorrillos</option>
                        <option value="Comas">Comas</option>
                        <option value="SanJuan">SanJuan</option>
                        <option value="Sur">Sur</option>
                        <option value="Uni">Uni</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="checkbox" id="check_terminos" value="1" onchange="validarCheckbox()" />Acepto los términos y condiciones de "nombre.com" y autorizo la política de privacidad.<br> 
                    <span id="mensajeError_checkbox"></span>
                </div>

                <br>
                <div class="boton_registro">
                    <input type="submit" id="boton_registro" value="Enviar" name="registrar">
                </div>

            </fieldset>
        </form>

        <?php
        include_once '../dao/ClienteDAO.php';
        if (isset($_REQUEST["registrar"])) {
            $obj = new ClienteDAO();
            $nombres = $_REQUEST["input_nombre"];
            $apellidos = $_REQUEST["input_apellidos"];
            $tipoDoc = $_REQUEST["tipo_doc"];
            $nroDoc = $_REQUEST["input_documento"];
            $celular = $_REQUEST["input_celular"];
            $correo = $_REQUEST["input_email"];
            $contrasennia = $_REQUEST["input_contraseña"];
            $cine_favorito = $_REQUEST["cine_favorito"];
            $input_genero= $_REQUEST["input_genero"];
            
            
            $res = $obj->registrar($nombres, $apellidos, $tipoDoc, $nroDoc, $celular, $correo, $contrasennia, $cine_favorito,$input_genero);

            if ($res) {
                $msg = "Cliente registrado!";
            } else {
                $msg = "No se ha podido registrar cliente!";
            }
            echo "<script>alert('$msg');</script>";
        }
        ?>
    </body>

</html>