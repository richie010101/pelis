<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
      
      background-color: #142539 !important; /* Aquí puedes definir el color de fondo deseado */
    }
    </style>
    <title>Pelis1234</title>
    
    <?php
   // <link href="diseño"  rel="stylesheet" type="text/css">
    // <link href="diseño2"  rel="stylesheet" type="text/css">
    ?>
    <link href="diseño3"  rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <div class="mb-5">
                <a href="index.php">
                    <img src="logo2.png" class="position-absolute top-0 start-50 translate-middle-x mt-2" style="z-index: 1" alt="imagen del logo" width="16%"> 
                </a>
    </div>
    <main>
        
    <div style="margin-bottom: 10px;">
    </div>
        <div class="">
            <div id="carouselExampleIndicators" class="carousel slide"> 
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="Shrek.php">
                        <img src="https://gonewiththetwins.com/new/wp-content/uploads/2015/08/shrek.jpg" class="d-block"> 
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="3_metros_sobre_el_cielo.php">
                        <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/0DA3B8DB7F9D53C2C74E433900BD99641F7C986AF651C0AA18E693E2D5ED6BCF/scale?width=1200&aspectRatio=1.78&format=jpeg" class="d-block " > 
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="High_School_Musical.php">
                        <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/BD69B26A0A1FFCC829922264F602E58E4A7E02FACE7215DFC9DA5AF0A84EA7DA/scale?width=1200&aspectRatio=1.78&format=jpeg" class="d-block"> 
                    </div>
                    <div class="carousel-item">
                        <a href="barbie.php">
                        <img src="https://i.ytimg.com/vi/2Z2efmn0p4w/maxresdefault.jpg" class="d-block"> 
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="Sonic_2.php">
                        <img src="https://images.squarespace-cdn.com/content/5a7c9c91b1ffb60e3b44347e/1658838588193-H2042PAK7JCSG54AIFZP/Sonic+2+Banner.jpg?format=1500w&content-type=image%2Fjpeg" class="d-block" width = "300px" > 
                        </a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        <div class="mb-5 mt-1 me-5 ms-5 p-3 text-center px-2 fw-semibold" style="background-color: #133440 ; color:#D7E9E0 ; font-family: light;" >  <h4>Ultimas peliculas agregadas </h4></div>
        


        
        <span class="placeholder col-12 mb-3" style="color:#201B6B">
        </span>
        
            <h2 lang = "es-mx"  style="text-align:center ; color:#D0DDE8 ; font-family: light;" class="mb-3">TODAS LAS PELICULAS</h2>
            <div class="container-sm">
                <div class="d-flex  flex-wrap justify-content-center text-center">
                <?php
                            include("conexion2.php"); 
                            $conn =  new mysqli($servidor, $user, $password, $bd , $port);
                            if ($conn->connect_error){
                                die("Error al conectar a la base de datos");
                                }
                                $sql="Select * from peliculas";
                                $result=$conn->query($sql);
                                if ($result->num_rows > 0) {
                                    $cuenta=0;
                                    while($row =$result->fetch_assoc()) {
                                        ?>  
                                        <div class="col-md-2 justify-content-center mt-2">
                                        <a href= <?php echo $row['linkPagina'] ;?> >
                                                <?php $nombre = $row['Titulo'] ;?>
                                                    <img src="data:image/jpg;base64,<?php echo base64_encode($row['poster']); ?>" class="border border-black justify-content-center" width = "98%"    alt="Poster de la pelicula <?php echo $nombre?>">
                                        </a> 
                                        </div>
                                            <?php
                                            }
                                        }
                                        
                                    $conn->close();
                ?>
                </div>
            </div>


            <span class=" mt-5 placeholder col-12 mb-3" style="color:#201B6B"></span>
            <div class="lastPEL">
                <h2 lang = "es-mx"  style="text-align:center ; color:#D0DDE8 ; font-family: light;" class="mb-3" > PELICULAS AUDIODESCRIPTIVAS</h2>
                <h1 lang = "es-mx"  style="text-align:center"> </h1>
            </div>

            <div class="container-sm">
                <div class="d-flex  flex-wrap justify-content-center text-center">
                    <div class="col-md-2 justify-content-center mt-2">
                        <a href="elHoyo.php">
                            <img src="https://monterreyrock.com/wp-content/uploads/2020/03/el-hoyo-poster-netflix-scaled.jpg" class="border border-black justify-content-center" width = "98%"    alt="Poster de la pelicula">
                        </a> 
                    </div>
                    <div class="col-md-2 justify-content-center mt-2">
                        <a href="estacion.php">
                            <img src="https://mx.web.img2.acsta.net/pictures/17/10/17/08/41/2012134.jpg" class="border border-black justify-content-center" width = "98%"    alt="Poster de la pelicula">
                        </a> 
                    </div>
                    <div class="col-md-2 justify-content-center mt-2">
                        <a href="chica.php">
                            <img src="https://www.lavanguardia.com/peliculas-series/images/movie/poster/2016/10/w1280/mGtyNQ7Ioyv1AZ5aSOpL0Jlqwxx.jpg" class="border border-black justify-content-center" width = "98%"    alt="Poster de la pelicula">
                        </a> 
                    </div>
                    <div class="col-md-2 justify-content-center mt-2">
                        <a href="coco.php">
                            <img src="https://es.web.img2.acsta.net/pictures/17/09/14/10/49/2019727.jpg" class="border border-black justify-content-center" width = "98%"    alt="Poster de la pelicula">
                        </a> 
                    </div>
                </div>
            </div>

                

        </div> 
    </main>

    <div class="mb-5">
    </div>
    <div class="">
            <div class="card text-center"  style="background-color: #004766">
                <div class="card-header">
                <img src="logo.png" width = "6%"  alt="imagen del logo"> 
            </div>
            <div class="card-body" style="background-color: #111c30">
                <h5 class="card-title text-light ">Copyright ©2023 Pelis1234 Todos los derechos reservados.</h5>
                <p class="card-text text-light " >Tu portal cinematográfico: Descubre, disfruta.</p>
                <a href="apoyo.php" class="btn btn-info">¡Deja tus recomendaciones para la pagina!</a>
            </div>
    </div>

</body>
</html>