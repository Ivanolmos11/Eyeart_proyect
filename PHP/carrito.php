<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>E_E Art/Carrito</title>
        <link rel ="stylesheet" href="carrito.css">
        <link rel="icon" href="Imagenes/logo1.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script>
            function cerrar(){
                document.getElementById('card').style.display = "none";
            }

            function cerrar2(){
                document.getElementById('card2').style.display = "none";
            }

            function cerrar3(){
                document.getElementById('card3').style.display = "none";
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


        <div class = "recorrido">
            <a href="E_E.html">Home</a> > <a href="Catalogo.html"> Categoria</a>  >    <h4>Producto</h4> 
         </div>
         <div class = "recorrido2">
            <h1>Carrito de Compras (3)</h1>
         </div>
         <div class="contenedor">
         <div class="contenedor-producto">
            <div class="producto" id="card">
            <div class = "cerrar">
                <button class="btn-cerrar" onclick="cerrar()">
                    X
                </button>
            </div>
            <div class="producto-card">
                <div class="imagen">
                 <img src="Imagenes/producto1.jpg" alt="">
                </div>
                <div class="card">
                    <h5>JABONES</h5>
                    <h1>JABON DE GLICERINA NARANJA</h1>
                    <div class="mod">
                        <h2>$67.000</h2>
                        <label for="">Cantidad:</label>
                        <input type="number" placeholder="1">
                    <div class="total">    
                        <h4>SubTotal:</h4> 
                        <h4>$67.000</h4>
                    </div>
                    </div>
                </div>
             </div>
            </div>
            <div class="producto" id="card2">
                <div class = "cerrar">
                    <button class="btn-cerrar2" onclick="cerrar2()">
                        X
                    </button>
                </div>
                <div class="producto-card">
                    <div class="imagen">
                     <img src="Imagenes/velas.png" alt="">
                    </div>
                    <div class="card">
                        <h5>VELAS</h5>
                        <h1>VELA DE MANZANILLA</h1>
                        <div class="mod">
                            <h2>$8.500</h2>
                            <label for="">Cantidad:</label>
                            <input type="number" placeholder="1">
                        <div class="total">    
                            <h4>SubTotal:</h4> 
                            <h4>$8.500</h4>
                        </div>
                        </div>
                    </div>
                 </div>
                </div>
                <div class="producto" id="card3">
                    <div class = "cerrar">
                        <button class="btn-cerrar3" onclick="cerrar3()">
                            X
                        </button>
                    </div>
                    <div class="producto-card">
                        <div class="imagen">
                         <img src="Imagenes/producto2.jpg" alt="">
                        </div>
                        <div class="card">
                            <h5>CREMAS</h5>
                            <h1>CREMA FACIAL </h1>
                            <div class="mod">
                                <h2>$16.500</h2>
                                <label for="">Cantidad:</label>
                                <input type="number" placeholder="1">
                            <div class="total">    
                                <h4>SubTotal:</h4> 
                                <h4>$16.500</h4>
                            </div>
                            </div>
                        </div>
                     </div>
                    </div>
        </div>
        <div class="detalle">
            <a href="Catalogo.html">
            <button class="btn-continuar">
                CONTINUAR COMPRANDO
            </button>
            </a>
            <div class = "suma-pro">
               <h4>Total: $16.500</h4> 
               <h4>Descuento: 0</h4> 
               <h4>Cargos por Entrega: $0.00</h4> 
            </div>
            <h3>TOTAL: $16.500</h3>
            <button class="btn-pedido">
                HACER PEDIDO
            </button>
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
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>_copy; 2023 <b>E_E Art</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    </body>
</html>
        
