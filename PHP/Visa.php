<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imagenes/logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="Visa.css">

</head>
<body>

<div class="container">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">Dirección De Envío</h3>

                <div class="inputBox">
                    <span>Nombre Completo :</span>
                    <input type="text" placeholder="Brayam Cerquera">
                </div>
                <div class="inputBox">
                    <span>Correo Electronico :</span>
                    <input type="email" placeholder="ejemplo@ejemplo.com">
                </div>
                <div class="inputBox">
                    <span>Dirección :</span>
                    <input type="text" placeholder="habitación - calle - localidad">
                </div>
                <div class="inputBox">
                    <span>Ciudad :</span>
                    <input type="text" placeholder="Bogotá">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Estado :</span>
                        <input type="text" placeholder="Bogotá">
                    </div>
                    <div class="inputBox">
                        <span>Código Postal :</span>
                        <input type="text" placeholder="123 456">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">Pago</h3>

                <div class="inputBox">
                    <span>Tarjetas Aceptadas :</span>
                    <img src="Imagenes/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Nombre En La Tarjeta :</span>
                    <input type="text" placeholder="señor. Brayam Cerquera">
                </div>
                <div class="inputBox">
                    <span>Número De Tarjeta :</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>Mes De Caducidad :</span>
                    <input type="text" placeholder="Enero">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Año De Exp :</span>
                        <input type="number" placeholder="2023">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234">
                    </div>
                </div>
            </div>
        </div>
        
        <a href="Catalogo.html">
            <input onclick="CompraRealizada()" ="submit" value="Adquirir" class="submit-btn">
        </a>
    </form>
</div>    

<script>
function CompraRealizada() {
    alert("Gracias Por Su Compra")
}
</script>



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
            <li><a href="file:///C:/Users/user/Documents/E_E/E_E.html">Inicio</a></li>
            <li><a href="file:///C:/Users/user/Documents/E_E/Catalogo.html">Catalogo</a></li>
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
























<style>
    .pie-pagina{
    width: 100%;
    background-color: white;
}
.pie-pagina .grupo-1 {
    width: 100%;
    max-width: 100%;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 100px;
    padding: 45px 0px;
}

.pie-pagina .grupo-1 a{
  
    text-decoration: none;
    color: #07570eb0;
    transition: all .3s;
}

.pie-pagina .grupo-1 a:hover{
  
    text-decoration: none;
    color: rgb(189, 189, 4) ;
    transition: all .3s;
}
.pie-pagina .grupo-1 .box figure{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.pie-pagina .grupo-1 .box figure img{
    width: 250px;
}
.pie-pagina .grupo-1 .box h2{
    color: black;
    margin-bottom: 25px;
    font-size: 20px;
}
.pie-pagina .grupo-1 .box p{
    color: black;
    margin-bottom: 10px;
}
.pie-pagina .grupo-1 .red-social a{
    display: inline-block;
    text-decoration: none;
    width: 45px;
    height: 45px;
    line-height: 45px;
    color: black;
    margin-right: 10px;
    background-color: #07570eb0;
    text-align: center;
    transition: all 300ms ease;
}
.pie-pagina .grupo-1 .red-social a:hover{
    color: #07570eb0;
    background: rgb(189, 189, 4);
    
}
.pie-pagina .grupo-2{
    background: #07570eb0;
    padding: 15px 10px;
    text-align: center;
    color: black;
}
.pie-pagina .grupo-2 small{
    font-size: 15px;
}
</style>