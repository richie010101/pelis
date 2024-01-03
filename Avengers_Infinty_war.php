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
    <title>Avengers Infinty war</title> 
    <?php
   // <link href="diseño"  rel="stylesheet" type="text/css">
    // <link href="diseño2"  rel="stylesheet" type="text/css">
    ?>
    <link href="diseño3"  rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head> 
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <div>
      <a href="index.php">
        <img src="logo2.png" class="position-absolute top-0 start-50 translate-middle-x mt-2" style="z-index: 1" alt="imagen del logo" width="16%"> 
      </a>
    </div>
    
    <div style="margin-bottom: 8%;">
    </div>
    <div class="container-sm">
            <div class="media d-flex align-items-center mb-5">
                 <?php
                     include("conexion2.php"); 
                     $conn =  new mysqli($servidor, $user, $password, $bd , $port);
                     if ($conn->connect_error){
                           die("Error al conectar a la base de datos");
                                        }
                           $sql="Select * from peliculas where linkPagina='Avengers_Infinty_war.php'";
                           $result=$conn->query($sql);
                           if ($result->num_rows > 0) {
                            while($row =$result->fetch_assoc()) {
                                  ?>  
                                       <img src="data:image/jpg;base64,<?php echo base64_encode($row['poster']); ?>"class="mr-3 border border-black justify-content-center" alt="Imagen" width = "18%" height = "9%">
                                      <?php
                                    }
                                   }
                            $conn->close();
                  ?>
                      <div class="media-body ms-3">
                        <h5 style="color: #D0DDE8">Avengers Infinty war</h5>
                        <p style="color: #D0DDE8"> <span style="color: #E7E739"> Año: </span> 2018 </p>
                        <p style="color: #D0DDE8"> <span style="color: #E7E739"> Dirección: </span> Anthony & Joe Russo</p>
                        <p style="color: #D0DDE8"> <span style="color: #E7E739"> Duración: </span>  149 minutos</p>
                        <p style="color: #D0DDE8"> <span style="color: #E7E739"> Productora: </span> Marvel Studios</p>
                        <p style="color: #D0DDE8"> <span style="color: #E7E739">Sinopsis: </span> los vengadores pelean contra thanos</p>
                    </div>
                 </div>
            </div>
                 
            <span class=" mt-5 placeholder col-12 mb-3" style="color:#201B6B"></span>
        <div class="justify-content-center text-center mt-5  ">

                 <iframe src="https://slmaxed.com/e/XAQ9qzxM6Jjl4mME" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="75%" height="450px" allowfullscreen></iframe>

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
