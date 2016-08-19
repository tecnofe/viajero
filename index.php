<!DOCTYPE html>
<html lang="en" ng-app="Viajero">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Viajero</title>
        <!--    <meta name="description" content="Spirit8 is a Digital agency one page template built based on bootstrap framework. This template is design by Robert Berki and coded by Jenn Pereira. It is simple, mobile responsive, perfect for portfolio and agency websites. Get this for free exclusively at ThemeForces.com">
            <meta name="keywords" content="bootstrap theme, portfolio template, digital agency, onepage, mobile responsive, spirit8, free website, free theme, themeforces themes, themeforces wordpress themes, themeforces bootstrap theme">
            <meta name="author" content="ThemeForces.com">-->

        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

        <!-- Angular -->
        <script src="js/angular-1.5.8/angular.min.js" type="text/javascript"></script>
        <script src="js/app.js" type="text/javascript"></script>
        <script src="js/controllerProv.js" type="text/javascript"></script>
        <script src="js/angular-1.5.8/angular-animate.min.js" type="text/javascript"></script>

        <!-- Slider
        <script src="js/bootstrap.js" type="text/javascript"></script>
        ================================================== -->
        <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
        <link href="css/owl.theme.css" rel="stylesheet" media="screen">

        <!-- Stylesheet
        ================================================== -->
        <link rel="stylesheet" type="text/css"  href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <!-- Angular CSS -->


        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

        <script type="text/javascript" src="js/modernizr.custom.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body ng-app="MyApp">
        <script>
            var animacionesjs = angular.module('Viajero', [ngAnimate]);
        </script>

        <!-- Navigation
        ==========================================-->
        <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Viajero</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#tf-home" class="page-scroll">Inicio</a></li>
                        <li><a href="#tf-about" class="page-scroll">Nosotros</a></li>
                        <li><a href="#tf-team" class="page-scroll">Equipo</a></li>
                        <li><a href="#tf-services" class="page-scroll">Servicios</a></li>
                        <li><a href="#tf-works" class="page-scroll">Portafolio</a></li>
                        <li><a href="#tf-testimonials" class="page-scroll">Testimonios</a></li>
                        <li><a href="#tf-contact" class="page-scroll">Contactos</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!-- Home Page
        ==========================================-->
        <div id="tf-home" class="text-center">
            <div class="overlay">
                <div class="content" ng-controller="controllerProvincias" >

                   <!--  <select class="form-group-sm" ng-controller="controllerProvincias"  ng-model="Provincias">
                            <option value="0">Pinar del Río</option>
                            <option value="1">Artemisa</option>
                            <option value="2"selected="selected">La Habana</option>
                            <option value="3">Mayabeque</option>
                            <option value="4">Matanzas</option>
                            <option value="5">Cienfuegos</option>
                            <option value="6">Villa Clara</option>
                            <option value="7">Sancti Spíritus</option>
                            <option value="8">Ciego de Ávila</option>
                    
                        </select>
                    <input type="datetime"  placeholder="dd/mm/aaaa" ng-model="Desde"/>
                    <input type="datetime"  placeholder="dd/mm/aaaa" ng-model="Hasta" style="background-image: url(img/s_lang.png)"/>
                    <select name="Adultos">
                       <option selected="selected" value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                    <label>"Niños"
                        <br>
                        
                        <select class="" >
                        <option selected="selected" value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                       
                    </select>
                    </label>
                    <input type="number"    placeholder="Adultos"min="0" max="6"  ng-model="Adultos"/>
                    <input type="number"    placeholder="Niños "min="0" max="3" ng-model="Niños"/>-->

                    <h1>Bienvenido a <strong><span class="color">Viajero</span></strong></h1>
                    <p class="lead">Somos una agencia de viajes digital <strong>con años de experiencia</strong> y con <strong>personas extraordinarias</strong></p>
                    <div ng-controller="User">
                        <div id="intro">
                        <form ng-submit="submit()" class="form-horizontal" novalidate> 
                            <select class="algo" name="country" ng-model="user.country">
                                <option value="0">Pinar del Río</option>
                                <option value="1">Artemisa</option>
                                <option value="2"selected="selected">La Habana</option>
                                <option value="3">Mayabeque</option>
                                <option value="4">Matanzas</option>
                                <option value="5">Cienfuegos</option>
                                <option value="6">Villa Clara</option>
                                <option value="7">Sancti Spíritus</option>
                                <option value="8">Ciego de Ávila</option>
                            </select>
                            <input type="date" name="date1" id="date1" placeholder="ENTRADA">
                            <input type="date" name="date2" id="date2" placeholder="SALIDA">
<!--                            <label>Firstname</label> -->
<!--                            <label>Lastname</label>-->
<!--                            <input type="text" class="form-control" placeholder="Enter your date">-->
                            
<!--                            <label>Age</label>-->
                            <select class="num_sel" name="adultos">
                                <option value="">Adultos</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                            <select class="num_sel" name="ninnos">
                                <option value="">Niños</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                            <button class="btn tf-btn btn-default" ng-click="Reservar()">RESERVAR</button>
                        </form></div>
                        <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
<!--                            <form method="post" action="http://www.viajeroreserva.com/disponibilidad/">-->
                                
                   
<!--                                <fieldset>
                                    <div class="inputs input-daterange" id="datepicker">
                                        <label>Entrada <br>
                                            <input class="check_in form-control" name="check_in" placeholder="dd/mm/aaaa" type="date">
                                            <i class="fa fa-calendar fa-lg" aria-hidden="true"></i>
                                        </label>
                                        <label class="lastinput">Salida <br>
                                            <input class="check_out form-control" name="check_out" placeholder="dd/mm/aaaa" type="date">
                                            <i class="fa fa-calendar fa-lg" aria-hidden="true">

                                            </i></label>
                                    </div>

                            <div class="selects">
                                <label class="habi">Destinos <br>
                                    <select  class="form-group-sm" ng-controller="controllerProvincias"  ng-model="Provincias">
                                        <option value="0">Pinar del Río</option>
                                        <option value="1">Artemisa</option>
                                        <option value="2"selected="selected">La Habana</option>
                                        <option value="3">Mayabeque</option>
                                        <option value="4">Matanzas</option>
                                        <option value="5">Cienfuegos</option>
                                        <option value="6">Villa Clara</option>
                                        <option value="7">Sancti Spíritus</option>
                                        <option value="8">Ciego de Ávila</option>

                                    </select>
                                </label>

                                <label class="habi">Habitaciones <br><select name="rooms">
                                        <option selected="selected">1</option>
                                        <option>2</option>
                                    </select>
                                </label>
                                <label>Adultos<br><select name="adults">
                                        <option selected="selected" value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>                
                                    </select></label>

                                <label class="lastselect">Niños<br>
                                    <select name="children">
                                        <option selected="selected" value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>                

                                    </select></label>
                            </div>
                                    <button type="submit"   ng-click="Reservar()" class="btn tf-btn btn-default" >¡Reserve Ya! </button>

                        </fieldset>
                    </form>-->

                    </div>

                </div>
            </div>
        </div>

        <!-- About Us Page
        ==========================================-->
        <div id="tf-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/02.png" class="img-responsive">
                    </div>
                    <div class="col-md-6">
                        <div class="about-text">
                            <div class="section-title">
                                <h4>Acerca de nosotros</h4>
                                <h3>¿Quiénes Somos? <strong>¿Qué Hacemos?</strong></h3>
                                <hr>
                                <div class="clearfix"></div>
                            </div>
                            <p class="intro">We love building and rebuilding brands through our  specific skills. Using colour, fonts, and illustration, we brand companies in a way they will never forget.</p>
                            <ul class="about-list">
                                <li>
                                    <span class="fa fa-dot-circle-o"></span>
                                    <strong>Mission</strong> - <em>We deliver uniqueness and quality</em>
                                </li>
                                <li>
                                    <span class="fa fa-dot-circle-o"></span>
                                    <strong>Skills</strong> - <em>Delivering fast and excellent results</em>
                                </li>
                                <li>
                                    <span class="fa fa-dot-circle-o"></span>
                                    <strong>Clients</strong> - <em>Satisfied clients thanks to our experience</em>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Page
        ==========================================-->
        <div id="tf-team" class="text-center">
            <div class="overlay">
                <div class="container">
                    <div class="section-title center">
                        <h2>Conoce Nuestro<strong> Equipo</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                    </div>

                    <div id="team" class="owl-carousel owl-theme row">
                        <div class="item">
                            <div class="thumbnail">
                                <img src="img/team/01.jpg" alt="..." class="img-circle team-img">
                                <div class="caption">
                                    <h3>Jenn Gwapa</h3>
                                    <p>CEO / Founder</p>
                                    <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="thumbnail">
                                <img src="img/team/02.jpg" alt="..." class="img-circle team-img">
                                <div class="caption">
                                    <h3>Jenn Gwapa</h3>
                                    <p>CEO / Founder</p>
                                    <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="thumbnail">
                                <img src="img/team/03.jpg" alt="..." class="img-circle team-img">
                                <div class="caption">
                                    <h3>Jenn Gwapa</h3>
                                    <p>CEO / Founder</p>
                                    <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="thumbnail">
                                <img src="img/team/04.jpg" alt="..." class="img-circle team-img">
                                <div class="caption">
                                    <h3>Jenn Gwapa</h3>
                                    <p>CEO / Founder</p>
                                    <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="thumbnail">
                                <img src="img/team/04.jpg" alt="..." class="img-circle team-img">
                                <div class="caption">
                                    <h3>Jenn Gwapa</h3>
                                    <p>CEO / Founder</p>
                                    <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="thumbnail">
                                <img src="img/team/01.jpg" alt="..." class="img-circle team-img">
                                <div class="caption">
                                    <h3>Jenn Gwapa</h3>
                                    <p>CEO / Founder</p>
                                    <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="thumbnail">
                                <img src="img/team/02.jpg" alt="..." class="img-circle team-img">
                                <div class="caption">
                                    <h3>Jenn Gwapa</h3>
                                    <p>CEO / Founder</p>
                                    <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="thumbnail">
                                <img src="img/team/03.jpg" alt="..." class="img-circle team-img">
                                <div class="caption">
                                    <h3>Jenn Gwapa</h3>
                                    <p>CEO / Founder</p>
                                    <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Services Section
        ==========================================-->
        <div id="tf-services" class="text-center">
            <div class="container">
                <div class="section-title center">
                    <h2>Dale un vistazo a <strong>nuestros servicios</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>
                </div>
                <div class="space"></div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 service">
                        <i class="fa fa-desktop"></i>
                        <h4><strong>Web design</strong></h4>
                        <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                    </div>

                    <div class="col-md-3 col-sm-6 service">
                        <i class="fa fa-mobile"></i>
                        <h4><strong>Mobile Apps</strong></h4>
                        <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                    </div>

                    <div class="col-md-3 col-sm-6 service">
                        <i class="fa fa-camera"></i>
                        <h4><strong>Photography</strong></h4>
                        <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                    </div>

                    <div class="col-md-3 col-sm-6 service">
                        <i class="fa fa-bullhorn"></i>
                        <h4><strong>Marketing</strong></h4>
                        <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Clients Section
        ==========================================-->
        <div id="tf-clients" class="text-center">
            <div class="overlay">
                <div class="container">

                    <div class="section-title center">
                        <h2>Algunos de <strong>nuestros Clientes</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                    </div>
                    <div id="clients" class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="img/client/01.png">
                        </div>
                        <div class="item">
                            <img src="img/client/02.png">
                        </div>
                        <div class="item">
                            <img src="img/client/03.png">
                        </div>
                        <div class="item">
                            <img src="img/client/04.png">
                        </div>
                        <div class="item">
                            <img src="img/client/05.png">
                        </div>
                        <div class="item">
                            <img src="img/client/06.png">
                        </div>
                        <div class="item">
                            <img src="img/client/07.png">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Portfolio Section
        ==========================================-->
        <div id="tf-works">
            <div class="container"> <!-- Container -->
                <div class="section-title text-center center">
                    <h2>Dale un vistazo a <strong>nuestros servicios</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>
                </div>
                <div class="space"></div>

                <div class="categories">

                    <ul class="cat">
                        <li class="pull-left"><h4>Filtrados por tipo:</h4></li>
                        <li class="pull-right">
                            <ol class="type">
                                <li><a href="#" data-filter="*" class="active">All</a></li>
                                <li><a href="#" data-filter=".web">Web Design</a></li>
                                <li><a href="#" data-filter=".photography">Photography</a></li>
                                <li><a href="#" data-filter=".app" >Mobile App</a></li>
                                <li><a href="#" data-filter=".branding" >Branding</a></li>
                            </ol>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div id="lightbox" class="row">

                    <div class="col-sm-6 col-md-3 col-lg-3 branding">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="#">
                                    <div class="hover-text">
                                        <h4>Logo Design</h4>
                                        <small>Branding</small>
                                        <div class="clearfix"></div>
                                        <i class="fa fa-plus"></i>
                                    </div>
                                    <img src="img/portfolio/01.jpg" class="img-responsive" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 photography app">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="#">
                                    <div class="hover-text">
                                        <h4>Logo Design</h4>
                                        <small>Branding</small>
                                        <div class="clearfix"></div>
                                        <i class="fa fa-plus"></i>
                                    </div>
                                    <img src="img/portfolio/02.jpg" class="img-responsive" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 branding">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="#">
                                    <div class="hover-text">
                                        <h4>Logo Design</h4>
                                        <small>Branding</small>
                                        <div class="clearfix"></div>
                                        <i class="fa fa-plus"></i>
                                    </div>
                                    <img src="img/portfolio/03.jpg" class="img-responsive" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 branding">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="#">
                                    <div class="hover-text">
                                        <h4>Logo Design</h4>
                                        <small>Branding</small>
                                        <div class="clearfix"></div>
                                        <i class="fa fa-plus"></i>
                                    </div>
                                    <img src="img/portfolio/04.jpg" class="img-responsive" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 web">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="#">
                                    <div class="hover-text">
                                        <h4>Logo Design</h4>
                                        <small>Branding</small>
                                        <div class="clearfix"></div>
                                        <i class="fa fa-plus"></i>
                                    </div>
                                    <img src="img/portfolio/05.jpg" class="img-responsive" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 app">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="#">
                                    <div class="hover-text">
                                        <h4>Logo Design</h4>
                                        <small>Branding</small>
                                        <div class="clearfix"></div>
                                        <i class="fa fa-plus"></i>
                                    </div>
                                    <img src="img/portfolio/06.jpg" class="img-responsive" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 photography web">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="#">
                                    <div class="hover-text">
                                        <h4>Logo Design</h4>
                                        <small>Branding</small>
                                        <div class="clearfix"></div>
                                        <i class="fa fa-plus"></i>
                                    </div>
                                    <img src="img/portfolio/07.jpg" class="img-responsive" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 web">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="#">
                                    <div class="hover-text">
                                        <h4>Logo Design</h4>
                                        <small>Branding</small>
                                        <div class="clearfix"></div>
                                        <i class="fa fa-plus"></i>
                                    </div>
                                    <img src="img/portfolio/08.jpg" class="img-responsive" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Testimonials Section
        ==========================================-->
        <div id="tf-testimonials" class="text-center">
            <div class="overlay">
                <div class="container">
                    <div class="section-title center">
                        <h2> Testimonios de <strong>Nuestros Clientes</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div id="testimonial" class="owl-carousel owl-theme">
                                <div class="item">
                                    <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                                    <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                                </div>

                                <div class="item">
                                    <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                                    <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                                </div>

                                <div class="item">
                                    <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                                    <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section
        ==========================================-->
        <div id="tf-contact" class="text-center">
            <div class="container">

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">

                        <div class="section-title center">
                            <h2>Si lo desea <strong>contáctenos</strong></h2>
                            <div class="line">
                                <hr>
                            </div>
                            <div class="clearfix"></div>
    <!--                        <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>            -->
                        </div>

                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Dirección de correo</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Introduzca la dirección de correo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Contraseña</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mensaje</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn tf-btn btn-default">Enviar</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>

        <nav id="footer">
            <div class="container">
                <div class="pull-left fnav">
                    <p>TODOS LOS DERECHOS RESERVADOS. COPYRIGHT © 2016.</p>
                </div>
                <div class="pull-right fnav">
                    <ul class="footer-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/SmoothScroll.js"></script>
        <script type="text/javascript" src="js/jquery.isotope.js"></script>

        <script src="js/owl.carousel.js"></script>

        <!-- Javascripts
        ================================================== -->
        <script type="text/javascript" src="js/main.js"></script>

    </body>
</html>