<html>
    <!DOCTYPE = "html">
    <head>
        <link rel="stylesheet" href="cuenta.css">
        <title>E_E Art</title>
        <link rel="icon" href="Imagenes/logo1.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script>
            function cerrar() {
                alert("Se ha cerrado la sesion Correctamente");
            }

            function editar(){
                document.getElementById('vista').style.display = "none";
                document.getElementById('editar-perfil').style.display = "block";
                document.getElementById('cambiar-contra').style.display = "none";
            }

            function general(){
                document.getElementById('vista').style.display = "block";
                document.getElementById('editar-perfil').style.display = "none";
                document.getElementById('cambiar-contra').style.display = "none";
            }

            function cambiar(){
                document.getElementById('cambiar-contra').style.display = "block";
                document.getElementById('editar-perfil').style.display = "none";
                document.getElementById('vista').style.display = "none";
            }

            function guardar(){
                alert("Se ha guardado tus cambios");
            }

            function cambiar2(){
                alert("Se ha cambiado tus contraseña correctamente");
                document.getElementById('vista').style.display = "block";
                document.getElementById('editar-perfil').style.display = "none";
                document.getElementById('cambiar-contra').style.display = "none";
            }

        </script>
    </head>
    <body>
        <nav>
        <ul class="menu">
            <li><a href="E_E.html">Inicio</a></li>
            <li><a href="Catalogo.html">Productos</a>
                <ul class = "submenu">
                    <li><a href="Catalogo.html">Jabones</a></li>
                    <li><a href="Catalogo.html">Antibacterial</a></li>
                    <li><a href="Catalogo.html">Velas</a></li>
                    <li><a href="Catalogo.html">Cremas</a></li>
                    <li><a href="Catalogo.html">Belleza</a></li>
                </ul>
            <li><a href="">Servicios</a></li>
            <li><a href="">Acerca De</a></li>
            <li><a href="">Contacto</a></li>
            
        </ul>
    </li>
    </nav>
    <div class="contenedor-cuenta">
        <div class="contenedor">
        <div class="menu2">
            <div class="imagen">
                <div class="imagen-perfil">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
            <div class="general" onclick="general()">Vista General de la cuenta</div>
            <div class="editar" onclick="editar()">Editar Perfil</div>
            <div class="cambiar" onclick="cambiar()">Cambiar Contraseña</div>
            <div class="tarjetas">Tarjetas de Pago Guardadas</div>
            <div class="recibos">Recibos</div>
        </div>
        <div class="vista" id="vista">
            <h1>Vista general de la cuenta</h1>
            <h3>Perfil</h3>
        <div class="contenido">
            <div class="contenido-datos">
                <div class="nombre">
                    Nombre de usuario
                </div>
                <div class="datos">
                    Camillo11
                </div>
            </div>
            <div class="contenido-datos">
                <div class="correo">
                    Correo electronico
                </div>
                    <div class="datos">
                        Camillo2112@gmail.com
                    </div>
            </div>
            <div class="contenido-datos">
                <div class="id">
                    Tarjeta de identidad
                </div>
                <div class="datos">
                        Camillo11
                </div>
          </div>
        </div>
            <button class="btn-editar" onclick="editar()">
                Editar Perfil
            </button>
        <div class="cerrar-sesion">
            <h1>Cierra sesión</h1>
                 <h4>De esta manera, puedes cerrar tu sesión de tu cuenta en E_E Art en esta plataforma. </h4>
            <a href="E_E.html">
            <button class="btn-cerrar" onclick="cerrar()">
                Cerrar Sesion
            </button>
             </a>
        </div>
        </div>
        <div class="editar-perfil" id = "editar-perfil">
            <h1>Editar Perfil</h1>
            <h3>Perfil</h3>
        <div class="contenido">
            <div class="contenido-editar">
                <h4>Correo electronico</h4>
                <input type="email" placeholder="Camilo2112@gmail.com">
                <h4>Contraseña</h4>
                <input type="password">
                <div class="doc">
                    <h4>Documento de Identidad</h4>
                    <select name="select" class="tipoDoc">
                        <option value="value1">Cedula de Ciudadania</option>
                        <option value="value2" >Cedula Extranjera</option>
                        <option value="value3">Visa</option>
                        <option value="value4">Pasaporte</option>
                      </select>
                    <input type="text" class="numDoc" placeholder="1034779066">
                  </div>
                <h4>Sexo</h4>
                <select name="select">
                    <option value="value1">Masculino</option>
                    <option value="value2" >Femenino</option>
                    <option value="value3">Prefiero no decirlo</option>
                    <option value="value3">no binario</option>
                    <option value="value3">Otro</option>
                  </select>
                  <div class="fecha">
                    <h4>Fecha de Nacimiento</h4>
                    <input type="text" placeholder="11" class="dia">
                    <select name="select" class="mes">
                        <option value="value1">Enero</option>
                        <option value="value2" >Febrero</option>
                        <option value="value3">Marzo</option>
                        <option value="value4">Abril</option>
                        <option value="value5">Mayo</option>
                        <option value="value5">Junio</option>
                        <option value="value5">Julio</option>
                        <option value="value5">Agosto</option>
                        <option value="value5">Septiembre</option>
                        <option value="value5">Octubre</option>
                        <option value="value5">Noviembre</option>
                        <option value="value5">Diciembre</option>
                      </select>
                    <input type="text" placeholder="1990" class="ano">
                  </div>
                  <h4>Ciudad</h4>
                  <select name="select">
                    <option value="value1">Ciudad</option>
                    <option value="value2" >Bogota</option>
                    <option value="value3">Medellin</option>
                    <option value="value4">Barranquilla</option>
                    <option value="value5">Cali</option>
                    <option value="value6">Cartagena</option>
                  </select>
        </div>
        <div class="checkon">
            <input type="checkbox" class = "check"/>
            <label for="">Compartir mis datos de registro con los proveedores de E_E Art</label><br>
        </div>
            <button class="btn-cerrar" onclick="general()">
                Cancelar
            </button>
             <button class="btn-editar" onclick="guardar()">
                Guardar Perfil
            </button>
        
        </div>
      </div>
      <div class="cambiar-contra" id = "cambiar-contra">
        <h1>Editar Perfil</h1>
        <h3>Perfil</h3>
    <div class="contenido">
        <div class="contenido-editar">
            <h4>Contraseña Actual</h4>
            <input type="password">
            <h4>Contraseña</h4>
            <input type="password">
            <h4>Confirmar Contraseña</h4>
            <input type="password">
    </div>
        <button class="btn-cerrar" onclick="general()">
            Cancelar
        </button>
         <button class="btn-cambiar" onclick="cambiar2()">
            Cambiar Contraseña
        </button>
    
    </div>
  </div>
    </div>
    </div>


    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="Imagenes/logo1.png" alt="Logo de la PapeleriaLaUniversidad">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <li><a href="E_E.html">Inicio</a></li>
                <li><a href="Catalogo.html">Catalogo</a></li>
                <li><a href="">Servicios</a></li>
                <li><a href=""> Acerca de</a></li>
                <li><a href=""> Contacto</a></li>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Descubre la mejor calidad</p>
                <p>Suscribete a nuestras redes sociales</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://www.instagram.com/creacioneseeart/"> <i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="https://twitter.com/EEArt1"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>_copy; 2023 <b>E_E Art</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    </body>
</html>