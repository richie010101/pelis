<?php
//Obtener datos
include("conexion2.php");  
$peli = null ; 
$ano = null;
$peli = $_POST['peli'];
//echo($peli);
$coment = $_POST['coment'];
$ano = $_POST['ano'];

if($peli==null)
{
    $peli=" 1";
}
if($ano==null)
{
    $ano=" 1";
}



$conn =  new mysqli($servidor, $user, $password, $bd , $port);

if ($conn->connect_error){
    die("Error al conectar a la base de datos");
}

//Observe que se pueden pasar las variables directamente sin concatenar al utilizar comillas dobles en la cadena
$sql="INSERT INTO  recom  (nombre, ano, coment)" .
" VALUES( '$peli', $ano, '$coment')";
//echo($sql);

//Verificamos que se haya ejecutado la consulta con éxito
if($conn->query($sql)===TRUE){
    ?>
    <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>!Gracias!</title> 
            <?php
   // <link href="diseño"  rel="stylesheet" type="text/css">
    // <link href="diseño2"  rel="stylesheet" type="text/css">
    ?>
    <link href="diseño3"  rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
         
    body {
      background-color: #142539 !important; /* Aquí puedes definir el color de fondo deseado */
    }
    </style>
        </head>
        <body>
            <header>
            <div class="mb-5">
                    <a href="index.php">
                        <img src="logo2.png" class="position-absolute top-0 start-50 translate-middle-x mt-2" style="z-index: 1" alt="imagen del logo" width="16%"> 
                    </a>
            </div>

            <div style="margin-bottom: 100px;">
            </div>
            </header>

            <div class="text-center text-light ">
            <h1>Gracias por tu comentario</h1>
            <p>Regresar a la página de <a href="index.php" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"> inicio</a></p>
            </div>

            <footer>
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
            </footer>
        </body>
        </html>

        <?php

   
}else{
   echo("Error al crear la pelicula:". $conn->connect_error); 
}