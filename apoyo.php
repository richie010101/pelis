<!DOCTYPE html>
<html>
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
    <header id="titulo">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <div class="mb-5">
                <a href="index.php">
                    <img src="logo2.png" class="position-absolute top-0 start-50 translate-middle-x mt-2" style="z-index: 1" alt="imagen del logo" width="16%"> 
                </a>
    </div>

    <div style="margin-bottom: 100px;">
    </div>

    </header>


    <div class="container-sm mb-3 text-center">
            <form action="apoyoR.php" method="POST" enctype="multipart/form-data" class="form">
        <div class="mb-3 text-center">
            <label for="exampleInputEmail1" class="form-label text-light text-center"> Comentario</label>
            <input  name="coment" type="text" class="form-control" id="coment" aria-describedby="emailHelp">
            <div id="text" class="form-text text-light  ">Guardaremos tu anonimato</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label text-light ">Pelicula que desees que agreguemos</label>
            <input id="peli" name="peli" type="text" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label text-light ">¿de que año es?</label>
            <input type="text" class="form-control" id="ano" name="ano">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
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