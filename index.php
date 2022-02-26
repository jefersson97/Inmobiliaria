<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- https://bootswatch.com/ PARA css SON LIBRERIAS -->
        <link href="CSS/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/prism-okaidia.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/MICSS.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/custom.min.css" rel="stylesheet" type="text/css"/>
        <!-- otra cosa -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <!-- https://bootswatch.com/ PARA JS SON LIBRERIAS -->
        <script src="JS/js.js" type="text/javascript"></script>
        <script src="JS/jquery.min.js" type="text/javascript"></script>
        <script src="JS/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="JS/prism.js" type="text/javascript"></script>
        <script src="JS/custom.js" type="text/javascript"></script>
        <script src="JS/Milibreria.js" type="text/javascript"></script>
    </head>
    <body>
        <!-- contariner -->
        <div class="container">
            <!-- encabezado -->
            <header>





                <div class="figure" id="IMG1">
                    <img src="IMG/Vacacional/Cabana.png"
                         alt="Se vende casa de 2 pisos;
                         tiene 4 cuatos, 2 baños, 2 comedores, 2 coninas, 1 patio"
                         width="1298PX"
                         height="341">


                </div>


                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Imaginaciones Inmobiliaria</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarColor01">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="http://localhost/IMAGINACIONESINMOBILIARIAS/index.php" >Home
                                        <span class="visually-hidden">(current)</span>
                                    </a>
                                </li>

                                <button type="button" class="btn btn-primary" onclick="Empresa()"> Nuestra empresa</button>
                                <button type="button" class="btn btn-primary" onclick="Arriendo()"> Arriendo</button>
                                <button type="button" class="btn btn-primary" onclick="Vacacional()"> Vacaciones</button>
                                <button type="button" class="btn btn-primary" onclick="Venta()"> Venta</button>


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ingresar</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" onclick="Ingresar()">Ingresar</a>
                                        <a class="dropdown-item" href="#" onclick="Registrarse()">Registrarse</a>
                                    </div>
                                </li>


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Otros servicios</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Servicio al cliente</a>
                                        <a class="dropdown-item" href="#">Informacion</a>
                                        <a class="dropdown-item" href="#">Contactenos</a>
                                        <div class="dropdown-divider">Trabaje con nosotros</div>
                                        <a class="dropdown-item" href="#">Quejas y reclamos</a>
                                    </div>
                                </li>




                            </ul>

                        </div>
                    </div>
                </nav>    




                <form class="d-flex"id="buscador">
                    <input class="form-control me-sm-2" type="text" placeholder="Buscar">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
                </form>  



            </header>



            <!-- contenido -->



            <div id="contenido">


                <!--Lado derecho --> 

                <aside id="Lado_izquierdo">

                    <div class="form-group">
                        <label for="exampleSelect1" class="form-label mt-4">Servicio</label>
                        <select class="form-select" id="Lugar"> 
                            <option>Venta</option>
                            <option>Arriendo</option>
                            <option>Vacacional</option>

                        </select>
                    </div> 



                    <div class="form-group">
                        <label for="exampleSelect1" class="form-label mt-4">Departamento</label>
                        <select class="form-select" id="Lugar">
                            <option>Cundinamarca</option>
                            <option>Antioquia</option>
                            <option>Valle del cauca</option>
                            <option>Atlantica</option>
                            <option>Bolivar</option>
                        </select>
                    </div> 





                    <div class="form-group">
                        <label for="exampleSelect1" class="form-label mt-4">Ciudad</label>
                        <select class="form-select" id="Lugar"> 
                            <option>Bogota</option>
                            <option>Medellin</option>
                            <option>Cali</option>
                            <option>Barranquilla</option>
                            <option>Cartagena</option>
                        </select>
                    </div>  




                    <div class="form-group">
                        <label for="exampleSelect1" class="form-label mt-4">Localidad</label>
                        <select class="form-select" id="Lugar"> 
                            <option>Fontibon</option>
                            <option>Ciudad bolivar</option>
                            <option>Bosa</option>
                            <option>Teusaquillo</option>
                            <option>Tunal</option>
                        </select>
                    </div> 

                    <div class="form-group">
                        <label for="exampleSelect1" class="form-label mt-4">Barrio</label>
                        <select class="form-select" id="Lugar"> 
                            <option>Bogota</option>
                            <option>Medellin</option>
                            <option>Cali</option>
                            <option>Barranquilla</option>
                            <option>Cartagena</option>
                        </select>
                    </div> 





                    <div class="form-group"id="Precios">
                        <label class="form-label mt-4">Precio min</label>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">.00</span>
                            </div>

                        </div>
                    </div>

                    <div class="form-group"id="Precios">
                        <label class="form-label mt-4">Precio max</label>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">.00</span>
                            </div>
                            <button class="btn btn-primary" type="button" id="button-addon2">Buscar</button>
                        </div>
                    </div>
            </div>           

      </aside>
        <!-- lado derecho -->
 <div>
        <article>
            <h2>ventas</h2>
            <img src="IMG/Venta/casa.jpg"

                 width="300PX"
                 height="200"
                 position=relative ;
                 >

            <img src="IMG/Venta/casa1.jpg"
                 alt="Se vende casa de 2 pisos;
                 tiene 4 cuatos, 2 baños, 2 comedores, 2 coninas, 1 patio"
                 width="300PX"
                 height="200">

            <img src="IMG/Venta/Casa2.jpg"
                 alt="Se vende casa de 2 pisos;
                 tiene 4 cuatos, 2 baños, 2 comedores, 2 coninas, 1 patio"
                 width="300PX"
                 height="200">

        </article>



        <aside id="Lado_derecho">

        </aside>


-->










    </div> 

</body>

<!-- flooter o pie de pagina-->
<footer> 



</footer>


</div>
</html> 