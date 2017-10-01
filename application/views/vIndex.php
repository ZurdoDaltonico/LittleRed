<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<html>
    <head>
        <link rel="icon" href="">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="js\jquery.min.js"></script>
        <script type="text/javascript" src="js\bootstrap.min.js"></script>
        <link href="css\font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css\bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css\style.css" rel="stylesheet" type="text/css">
        <title>Eventos Little Red</title>
        <link rel="icon" href="">
    </head><body>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"><img height="20" alt="Brand" src="images\Little-Red.png" class="img-rounded"></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="http://localhost:80/index.php/evento/cEvento">Eventos</a>
                        </li>
                        <li>
                            <a href="http://localhost:80/index.php/login/clogin">Ingresar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Carousel ---------------------------------------------------------------------->
        <div class="carousel slide" id="carousel-example" data-interval="5000" data-ride="carousel">
            <div class="carousel-inner">
                <div class="active item">
                    <img src="images\carousel\darius_battletorn.jpg">
                    <div class="carousel-caption">
                        <h2>Darius</h2>
                        <p>To Broken</p>
                    </div>
                </div>
                <div class="item">
                    <img src="images\carousel\MF_Splash_1920x1080.jpg">
                    <div class="carousel-caption">
                        <h2>Miss Fortune</h2>
                        <p>To Broken X2</p>
                    </div>
                </div>
                <div class="item">
                    <img src="images\carousel\thumb-1920-588914.jpg">
                    <div class="carousel-caption">
                        <h2>Vayne</h2>
                        <p>To Broken x3</p>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example" data-slide="prev"><i class="icon-prev  fa fa-angle-left"></i></a>
            <a class="right carousel-control" href="#carousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
        </div>
        <!-- Fin Carousel ---------------------------------------------------------------------->

        <!-- Reviews ---------------------------------------------------------------------->
        <div class="Todo">
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sectionT">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center">Opiniones de nuestros clientes</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Reviews">
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <img id="imgR" src="images\reviews\iDubbbz.jpg" class="center-block img-circle img-responsive">
                                <h2 class="text-center">Idubbbz</h2>
                                <p class="lead text-center">"Hey ... that's pretty good"</p>
                            </div>
                            <div class="col-md-3">
                                <img id="imgR" src="images\reviews\PinkGuy.jpg" class="center-block img-circle img-responsive">
                                <h2 class="text-center">Pink Guy</h2>
                                <p class="lead text-center">"Hey b0ss, kan i hab a pussy plis?
                                    <br>Hey b0ss, i hab a cancer."</p>
                            </div>
                            <div class="col-md-3">
                                <img id="imgR" src="images\reviews\Chinchin.jpeg" class="center-block img-circle img-responsive">
                                <h2 class="text-center">Chin-Chin</h2>
                                <p class="lead text-center">"Ore Wa Ochinchin Ga Daisuki Nandayo"</p>
                            </div>
                            <div class="col-md-3">
                                <img id="imgR" src="images\reviews\LemonGuy.jpg" class="center-block img-circle img-responsive">
                                <h2 class="text-center">Lemon Guy</h2>
                                <p class="lead text-center">"I'M A LEMON, CAN I GIVE U LEMON? PLIS, I GROW THEM MYSELF"</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <img id="imgR" src="images\reviews\SalamanderGuy.jpg" class="center-block img-circle img-responsive">
                                <h2 class="text-center">Salamander Guy</h2>
                                <p class="lead text-center">"SMELL MY FINGER, FRANK.
                                    <br>NYEEEEEEEE"</p>
                            </div>
                            <div class="col-md-3">
                                <img id="imgR" src="images\reviews\SafariMan.jpg" class="center-block img-circle img-responsive">
                                <h2 class="text-center">Safari Man</h2>
                                <p class="lead text-center">"Ora manko ga daisuki nanda hahahaha"</p>
                            </div>
                            <div class="col-md-3">
                                <img id="imgR" src="images\reviews\Dade.jpeg" class="center-block img-circle img-responsive">
                                <h2 class="text-center">Dade</h2>
                                <p class="lead text-center">"FRUIT SNAAAAAAAACK"</p>
                            </div>
                            <div class="col-md-3">
                                <img id="imgR" src="images\reviews\Chad.png" class="center-block img-circle img-responsive">
                                <h2 class="text-center">Anything4views</h2>
                                <p class="lead text-center">"I got a Pewdiepie's Brofist tatoo in &nbsp;my ass"</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <img id="imgR" src="images\reviews\FilthyFrank.jpeg" class="center-block img-circle img-responsive">
                                <h2 class="text-center">Filthy Frank</h2>
                                <p class="lead text-center">"Ravioli Ravioli.
                                    <br>What's in the pocketoli?"</p>
                            </div>
                            <div class="col-md-3">
                                <img id="imgR" src="images\reviews\FakeFrank.jpeg" class="center-block img-circle img-responsive">
                                <h2 class="text-center">Fake Frank</h2>
                                <p class="lead text-center">"I HATE VEGANS"</p>
                            </div>
                            <div class="col-md-3">
                                <img id="imgR" src="images\reviews\E.T..jpeg" class="center-block img-circle img-responsive" id="foto">
                                <h2 class="text-center">E.T.</h2>
                                <p class="lead text-center">“ Slurp slurp skeet skeet ”</p>
                            </div>
                            <div class="col-md-3">
                                <img id="imgR" src="images\reviews\Frank.jpeg" class="center-block img-circle img-responsive" id="foto">
                                <h2 class="text-center">George Miller 'Joji'</h2>
                                <p class="lead text-center">“I wanna kill myself”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Reviews ---------------------------------------------------------------------->


        <!-- Foot ---------------------------------------------------------------------->
        <footer class="section section-danger">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Little Red</h1>
                        <p>Primera empresa multi nacional de Argentina, futura dominadora del universo,
                            bendecida por los dioses del olimpo, protegida por nuestros hermanos y
                            camaradas yihadistas y stalinistas, con maestria 7 con Bardo.
                            <br>
                            <br>&nbsp; "¿Ves ese rayo de esperanza? Soy yo"</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-info text-right">
                            <br>
                        </p>
                        <p class="text-center">© All rights reserved</p>
                        <br>
                        <div class="row">
                            <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 hidden-xs text-center">
                                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Fin Foot ---------------------------------------------------------------------->

    </body>
</html>