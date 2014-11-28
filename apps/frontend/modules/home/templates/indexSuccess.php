<!DOCTYPE html>
<html lang="es">
        <head>
                <meta charset="utf-8">
        <title>Sens Group - Broker</title>
        <link rel="stylesheet" href="css/ionicons.css">
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/general.css">
        <link rel="stylesheet" href="css/index.css">
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,800,700,400,300|Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/slider/nivo-slider.css">
        <link rel="stylesheet" href="css/infoseguros.css">
        <link rel="stylesheet" href="css/modal1.css">
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/jquery.nivo.slider.pack.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/index.js"></script>
        <script src="js/seguros.js"></script>
        <script src="js/maps.js"></script>
        <script src="js/siniestro.js"></script>
        <script type="text/javascript" src="js/contacto.js"></script>
       
        <script>
        function initializeDerqui(latitud, longitud) {
            var latlng = new google.maps.LatLng(latitud, longitud);
            var settings = {
                zoom: 13,
                center: latlng,
                mapTypeControl: true,
                mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                navigationControl: true,
                navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel:false
            };
            var map = new google.maps.Map(document.getElementById("map_canvas_derqui"), settings);
            var companyPos = new google.maps.LatLng(latitud, longitud);
            var companyMarker = new google.maps.Marker({   
                position: companyPos,
                map: map,
                title: "Derqui"
            });
        };
        </script>
        <script>
        function initializeViso(latitud, longitud) {
            var latlng = new google.maps.LatLng(latitud, longitud);
            var settings = {
                zoom: 13,
                center: latlng,
                mapTypeControl: true,
                mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                navigationControl: true,
                navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel:false
            };
            var map = new google.maps.Map(document.getElementById("map_canvas_viso"), settings);
            var companyPos = new google.maps.LatLng(latitud, longitud);
            var companyMarker = new google.maps.Marker({
                position: companyPos,
                map: map,
                title: "Del Viso"
            });
        };
        </script>
        <script type="text/javascript">
var $_Tawk_API={},$_Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/53848db9e33ac3a8210000ad/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
    </head>
    <body onload='initializeDerqui(-34.4617896, -58.8594284); initializeViso( -34.4439678,-58.7864617)'>
    <header>

                                                <!-- BLUE BAR TOP -->
    <div id='global-container'>
        <div class="top-blue">
            <p class="info-sensgroup">info@sensgroup.com.ar</p>
            <p class="phone-number-top">+54 11 5218-3028</p>
            <ul id="phone_list">
                <li class="ion-ios7-telephone"></li>
            </ul>
            <ul id="mail_list">
                <li class="ion-android-mail"></li>
            </ul>
    </div>

    <!-- NAVBAR -->

    <div class="pos-fixed">
        <div class="nav-bar">
            <a href="index.php"><img id="logo_sens" src="img/logosens1.png"></a>
            <ul class="menu_buttons">
                <li class="menu menu--sinister"><a data-toggle='modal' data-target='#sinisterModal' id='sinister-link' class="sinisterlink" href="#!"><span class="sue-sinister">DENUNCIÁ</span><br/>TU SINIESTRO</a></li>
                <li class='menu grow'><a onClick="goToByScroll('contact'); return false;" href="#">CONTACTO</a></li>
                <li class='menu grow'><a onClick="goToByScroll('seguros-section'); return false;" href="#">SEGUROS</a></li>
                <li class='menu grow'><a onClick="goToByScroll('contact-form-section'); return false;" href="#">COTIZAR SEGURO</a></li>
                <li class='menu grow'><a onClick="goToByScroll('page1'); return false;" href="#">INICIO</a></li>
            </ul>
            <div class='clear-both'></div>
        </div>
    </div>

    </header>
    <!-- PAGE 1 -->
    <div id="page1" class="text-center">
        <!-- SLIDESHOW -->
        <div id="myCarousel" class="carousel slide">
             <!-- Carousel indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>   
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="item">
                    <img class='img-responsive' src="/img/slider/img_1.jpg" alt="Third slide">
                </div>
                <div class="item active">
                    <img class='img-responsive' src="/img/slider/img_3.jpg" alt="First slide">
                </div>
                <div class="item">
                    <img class='img-responsive' src="/img/slider/img_2.jpg" alt="Second slide">
                </div>
                <div class="item">
                    <img class='img-responsive' src="/img/slider/img_4.jpg" alt="Third slide">
                </div>
                <div class="item">
                    <img class='img-responsive' src="/img/slider/img_5.jpg" alt="Third slide">
                </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>


                                                    <!--SELECTS -->

    <div class="select">
        <h1>COTIZÁ TU SEGURO ONLINE AHORA!</h1>
        <div class="select-seguros">
            <img class="select-car pull-left"src="img/car.png">
            <ul>
                <li>
                    <select id="select-brand" class="select-inputs">
                        <option class="select-options" value=''>Marca</option>
                        <?php foreach ($brands as $brand) { ?>
                        <option value="<?php echo $brand->getBrand() ?>"><?php echo $brand->getBrand() ?></option>
                        <?php }?>
                    </select>
                </li>
                <li>
                    <select  id="select-model" class="select-inputs">
                        <option class="select-options">Modelo</option>
                    </select>
                </li>
                <li>
                    <select  id="select-submodel" class="select-inputs">
                        <option class="select-options">Submodelo</option>
                    </select>
                </li>
                <li>
                    <input type='text' id="hire-year" class="year-input" placeholder='Año'>
                </li>
                <li>            
                    <p class="select-cotizar">COTIZAR SEGURO</p>
                </li>
            </ul>
        </div>
    </div>
        </div> 

        <!-- HIRE -->

    <div class='section-division'></div>
    </div>
    <div id='contact-form-section'></div>
    <!-- PAGE 2 -->
    <div id='contact-form'>
        <div class='section-division'></div>
        <div class='content blue-content'>
            <div class='form-cotizar'>
                <p id="jq-contactanos">Contactanos</p>
                <input type='text' class='form-control' id="hire-name" placeholder='Nombre y apellido'/>
                <input type='text' class='form-control' id="hire-mail" placeholder='E-mail (Ej: info@sensgroup.com.ar)'/>
                <input type='text' class='form-control' id="hire-phone" placeholder='Teléfono (Ej: +54 11 5218-3028)'/>
                <input type='text' class='form-control' id="hire-cell" placeholder='Celular (Ej: 15 5045 9192)'/>
                <textarea class='form-control' id="hire-motive" placeholder='Redacte la razón de su consulta'/></textarea>
                <button id='hire-submit' class='btn btn-success cotizar-submit' value='COTIZAR SEGURO' /> COTIZAR SEGURO</button>
            </div>
            <p class='cotizar-msg'>Uno de nuestros agentes se comunicará contigo a la brevedad.</p>
        </div>
    </div>


                                                    <!-- BUTTONS -->

    <div class="buttons">
        <div class="buttons_container">
            <ul>
                <li>
                    <img class="buttons_img" src="img/1k.png">
                    <p>+1000 Clientes Satisfechos</p>
                </li>
                <li>
                    <img class="buttons_img" src="img/asistencia.png">
                    <p>Asistencia Jurídica</p>
                </li>
                <li>
                    <img class="buttons_img" src="img/gestion.png">
                    <p>Gestión Personalizada</p>
                </li>
                <li>
                    <img class="buttons_img" src="img/aseguradoras.png">
                    <p>Aseguradoras Solventes</p>
                </li>
                <li>
                    <img class="buttons_img" src="img/inmediata.png">
                    <p>Atención Inmediata</p>
                </li>
            </ul>
        </div>
    </div>


    <div id='seguros-section'></div>
    <div id='seguros' class='row'>
        <div class='col-md-4 col-sm-4 col-xs-4 left-nav'>
            <div class='row'>
                <a href='#!' id='personas-link' class='col-md-6 col-sm-6 col-xs-6 section-title-container selected'>
                    <p class='section-title'> PERSONAS </p>
                </a>
                <a href='#!' id='empresas-link' class='col-md-6 col-sm-6 col-xs-6 section-title-container unselected'>
                    <p class='section-title'> EMPRESAS </p>
                </a>
            </div>
            <div class='row sublinks'>
            <?php include_partial('home/people_nav') ?>
            <?php include_partial('home/enterprise_nav') ?>
            </div>
        </div>
        <div class='col-md-8 col-sm-8 col-xs-8'>
            <?php include_partial('home/info_containers') ?>
        </div>
    </div>

                                                        <!-- QUIÉNES SOMOS -->
    <div class="p-our-beliefs">
        <h3>TU TRANQUILIDAD, NUESTRO COMPROMISO.</h3>
        <div class="security-line"></div>
        <p>Creemos en los desafíos y nos obligamos a superar continuamente nuestro horizonte en busca de la completa satisfacción y tranquilidad del cliente. Nuestros resultados son fruto del compromiso y la dedicación permanente.
        En Sens serás atendido por personas comprensivas/serviciales que te escucharán, entenderán y valorarán; asesores que asumen la responsabilidad de dedicarle profunda atención a tus pedidos para hallar soluciones de manera rápida y precisa, y en definitiva poder llevar la gestión más eficiente.</p>
    </div>

                                                        <!-- SUCURSALES -->

    <div class="sucursales">
        <hr>
        <h1>SUCURSALES</h1>
        <hr class="sucursales__line">
    </div>
    <div class="text-sucursales">
        <h2>SEGUIMOS PROYECTANDO. SEGUIMOS CRECIENDO.</h2>
        <hr>
        <p>Creemos en los desafíos y nos obligamos a superar continuamente nuestro horizonte en busca de la completa satisfacción y tranquilidad del cliente. Nuestros resultados son fruto del compromiso y la dedicación permanente.
        En Sens serás atendido por personas comprensivas y serviciales que te escucharán, entenderán y valorarán; asesores que asumen la responsabilidad de dedicarle profunda atención a tus pedidos para hallar soluciones de manera rápida y precisa, y en definitiva poder llevar la gestión más eficiente.</p>
    </div>
    <div class='sedes'>
    <div class="blue-images row">
        <div class='col-md-3 col-sm-3 col-xs-3'></div>
        <div id='del-viso' class="blu-images__container col-md-3 col-sm-3 col-xs-3">
            <div class="blue-images__delviso">
                <div class="wrapper">
                    <div class="text">
                        <p class="address-title">DIRECCIÓN</p>
                        <p>Av. Constitución 546</p>
                        <p>Del Viso</p>
                        <p>02320-666502</p>
                    </div>
                    <img class='sucur-img' src="img/DelViso.png">
               </div>
                <h3 id='viso-title' class='sucursal-title selected-sucursal'>DEL VISO</h3>
            </div>
        </div>
        <div id='derqui' class="blu-images__container col-md-3 col-sm-3 col-xs-3">
            <div class="blue-images__derqui">
                <div class="wrapper">
                    <div class="text">
                        <p class="address-title">DIRECCIÓN</p>
                        <p>Av. Juan D. Perón 2200</p>
                        <p>Derqui</p>
                        <p>0230-4315404</p>
                    </div>
                    <img class='sucur-img' src="img/Derqui.png">
                </div>
                <h3 id='derqui-title' class='sucursal-title'>DERQUI</h3>
            </div>
        </div>
        <div class='col-md-3 col-sm-3 col-xs-3'></div>
    </div>
    </div>
                                                    <!-- MAPS -->

    <div id='map_canvas_derqui_container' style='position:relative'><div id="map_canvas_derqui" class='map'></div></div>
    <div id='map_canvas_viso_container'style='position:relative'><div id="map_canvas_viso" class='map'></div></div>

                                                    <!-- CONTACTO -->

    <div id="contact">
        <div class="contact-icon-container">
            <p class="contact-icons ion-flag"></p>
            <p class="contact-icons ion-android-call"></p>
            <p class="contact-icons ion-email"></p>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3"></div>
            <div class="contact-container col-xs-6 col-sm-6 col-md-6">
<!--                 <h3>CONTACTANOS</h3> -->
                <p class="contact-address">Av. Juan D. Perón 940 2° Piso <br><span>CABA (1038), Buenos Aires</span></p>
                <p class="contact-phone">+54 11 5218-3028</p>
                <p class="contact-mail">INFO@SENSGROUP.COM.AR</p>
            </div>
        <div class="col-xs-3 col-sm-3 col-md-3"></div>
    </div>

                                                      <!-- PIE DE PÁGINA -->

    <div id="pie-pagina">
        <div class="pie-img-container col-xs-6 col-sm-6 col-md-6">
            <a href="http://www.ssn.gov.ar/" target="_blank"><img class="pie-ssn" src="img/ssn.png"></a>
        </div>
        <div class="pie-data-fiscal col-xs-6 col-sm-6 col-md-6">
            <a href="#!"><img class="data-fiscal-img" src="img/dataFiscalBig.jpg"></a>
        </div>
    </div>


                                                    <!-- FOOTER -->
    <footer>
        <div class="footer-rights">
            <p>©2014 Sens Group All rights Reserved.</p>
        </div>
        <div>
            <ul class="footer-nav">
                <li><a onClick="goToByScroll('page1'); return false;" href="#">Inicio</a></li>
                <li><a onClick="goToByScroll('contact-form-section'); return false;" href="#">Cotizar Seguro</a></li>
                <li><a onClick="goToByScroll('seguros-section'); return false;" href="#">Seguros</a></li>
                <li><a onClick="goToByScroll('contact'); return false;" href="#">Contacto</a></li>
            </ul>
        </div>
    </footer>
    <?php include_partial('home/modal') ?>
    <script>seguros();</script>
    <script>contacto();</script>
    <script>siniestro();</script>
    <script>maps();</script>
    </div>
    </div>

 </body>
</html>





