<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Turismo | Productos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styleProductos.css')}}">
    <link rel="stylesheet" href="css/style-login-registro.css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Oswald:500|Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/67f61afa3e.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-12 p-0 m-0">
  
    <!-- titulo pagina -->
    <div class="fondo_productos">
        
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="titEncabeza">
                        <h2>¡ ENCONTRÁ TU DESTINO ...!</h2> 
                    </div>
                </div>
            </div>  
        </div>     
    
        <!-- carousel -->
        <div class="container">
            <div class="row">
                <div class="col-12 carrusel">
                    <section class="carrusel m-3">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            
                            <!-- imagenes carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active imgCarrusel">
                                    <img class = "imgCarruseltamano" src="{{asset('images/Destinos/barilocheEsquiando.jpg')}}" class="d-block w-100 img-fluid" alt="Bariloche"> 
                                    <div class="tit-Destino-carru" >
                                        <a href="detalleProducto.php">
                                            <h3>BARILOCHE SKI</h3>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="carousel-item imgCarrusel">
                                    <img class = "imgCarruseltamano" src="images/Destinos/Cataratas/cataratas-iguazu-panoramica.jpg" class="d-block w-100 img-fluid" alt="...">
                                    <div class="tit-Destino-carru" >
                                        <a href="detalleProducto.php">
                                            <h3>CATARATAS Extrem</h3>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="carousel-item imgCarrusel">
                                    <img class = "imgCarruseltamano" src="images/Destinos/Mendoza/mendozaUvasMontañas.jpg" class="d-block w-100 img-fluid" alt="...">
                                    <div class="tit-Destino-carru" >
                                        <a href="detalleProducto.php">
                                            <h3>MENDOZA CITY TOUR</h3>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="carousel-item imgCarrusel" >
                                    <img class = "imgCarruseltamano" src="images/Destinos/Salta/saltaMontañaColores.jpg" class="d-block w-100 img-fluid" alt="...">
                                    <div class="tit-Destino-carru" >
                                        <a href="detalleProducto.php">
                                            <h3>SALTA "LA LINDA"</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- control carousel -->
                            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            
                        </div>
                    </section>
                </div> 
            </div>
        </div>
        
        
        <!-- Todos los destinos  -->
       
            <div class="container">
                <div class="row">

                    @foreach ($destinos as $destino)
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                    
                            <article class="borderBox m-3 destino-individual">
                                
                                <div class="photo-container">
                                    <img class="photo" src="{{asset('images/Destinos/barilocheEsquiando.jpg')}}" alt="Bari Esquiando">
                                    <button class="favorito"><i class="fas fa-heart"></i></button>
                                    <a href="detalleProducto.php" title="Mas Informacion">
                                        <div class="tit-Destino" >
                                            <h3 class="texto-card-titulo">{{$destino->nombre_destino}}</h3>
                                            <h3 class="texto-card-titulo">${{$destino->precio}}</h3>
                                        </div>
                                    </a>
                                </div>
                                
                            </article>                                
                        </div>
                    @endforeach
                </div>
            </div> 
    </div>
</div>
</div>
</div> 
</body>
</html>