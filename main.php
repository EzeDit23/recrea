
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--ICONOS P0ARA INPUT--><link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <!--ICON AWESOME--><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--BOOTSTRAP--><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/query.css">

    <title>BackOffice - Medife</title>
</head>
<body>
<?php
include("components/menu.php");
?>
    <div class="container-fluid main sinNada">
        <div class="row sinNada main-login">
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">   
                        <div class="carousel-item active">
                            <img src="img/main/main-degrade.png" class="main-degrade" alt="">
                            <img src="img/main/1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-md-block">
                                <div class="main-categ"><p>Comida</p></div>
                                <p class="main-tit">VENI A DISFRUTAR!</p>
                                <a href="https://goo.gl/maps/RDpMB1BCVu12" target="_blank"><p class="main-geo"><i class="fas fa-map-marker-alt"></i> Villa Bosch</p></a>
                                <p class="main-copy">Veni a pasar la noche, cerveza artesanal, comida, buena musica y promos</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="col-md-12 sinNada cont-gral">
                <h1 class="main-bien">BIENVENIDO A CUPONZ</h1>
                <p class="main-bien-copy">Empieza ahora y ganate un cupon de los locales aderidos</p>
            </div>

            <div class="col-md-12 sinNada cont-btn-gral">
                <div class="btn-gral">
                    <a href="">GENERAR CUPON</a>
                </div>
                <a class="link-gral" href="" id="btn-miscupones">MIS CUPONES</a>
            </div>

        </div>


    </div>


</body>
</html>