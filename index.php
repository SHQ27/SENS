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
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/slider/nivo-slider.css">
        <link rel="stylesheet" href="css/infoseguros.css">
        <link rel="stylesheet" href="css/modal1.css">
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/jquery.nivo.slider.pack.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/index.js"></script>
        <script src="js/seguros.js"></script>
    </head>
    <body>
    <header>
    <div id='global-container'>
    <div class="top-blue">
        <p class="info-sensgroup">info@sensgroup.com.ar</p>
        <p class="phone-number">(02320)479-460</p>
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
                <li class='menu grow'><a onClick="goToByScroll('contact'); return false;" href="#">INFORMACIÓN</a></li>
                <li class='menu grow'><a onClick="goToByScroll('seguros-section'); return false;" href="#">SEGUROS</a></li>
                <li class='menu grow'><a onClick="goToByScroll('contact-form-section'); return false;" href="#">COTIZAR SEGURO</a></li>
                <li class='menu grow'><a onClick="goToByScroll('page1'); return false;" href="#">INICIO</a></li>
            </ul>
            <div class='clear-both'></div>
        </div>
    </div>
    </header>
    <!-- PAGE 1 -->
    <div id="page1" class="content">
        <!-- SLIDESHOW -->
        <div id="slider" class="nivoSlider">
            <a href="#"><img src="img/slider/img_1.jpg" alt="slide 1" /></a>
            <a href="#"><img src="img/slider/img_2.jpg" alt="slide 2" /></a>
            <a href="#"><img src="img/slider/img_3.jpg" alt="slide 3" /></a>
        </div>
        <!-- HIRE -->
        <div class='section-division'></div>
        <div id="hire-container" class='text-center'>
        </div>
    </div>
    <div id='contact-form-section'></div>
    <!-- PAGE 2 -->
    <div id='contact-form'>
        <div class='section-division'></div>
        <div class='content blue-content'>
            <form class='form-cotizar'>
                <p>Ingresá tus datos</p>
                <input type='text' class='form-control' placeholder='Nombre y apellido'/>
                <input type='text' class='form-control' placeholder='Teléfono'/>
                <input type='text' class='form-control' placeholder='Celular'/>
                <input type='text' class='form-control' placeholder='E-mail'/>
                <input type='text' class='form-control' placeholder='Horario de contacto'/>
                <input type='submit'class='btn btn-success cotizar-submit' value='COTIZAR SEGURO' />
            </form>
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
        <div class='col-md-4 left-nav'>
            <div class='row'>
                <a href='#!' id='personas-link' class='col-md-6 section-title-container selected'>
                    <p class='section-title'> PERSONAS </p>
                </a>
                <a href='#!' id='empresas-link' class='col-md-6 section-title-container unselected'>
                    <p class='section-title'> EMPRESAS </p>
                </a>
            </div>
            <div class='row sublinks'>
            <?php include('./includes/people_nav.php') ?>
            <?php include('./includes/enterprise_nav.php') ?>
            </div>
        </div>
        <div class='col-md-8'>
            <?php include('./includes/info_containers.php') ?>
        </div>
    </div>    

                                                        <!-- QUIÉNES SOMOS -->
    <div class="p-our-beliefs">
        <h3>SEGUIMOS PROYECTANDO. SEGUIMOS CRECIENDO.</h3>
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
    <div class="blue-images row">
        <div class='col-md-3'></div>
		<div id='del-viso' class="blu-images__container col-md-3">
            <div class="blue-images__delviso">
                <div class="wrapper">
    				<div class="text">
        			<p class="address-title">DIRECCIÓN</p>
        			<p>Av. Constitución 546</p>
        			<p>Del Viso</p>
   					 </div>
				    <img class='sucur-img' src="img/DelViso.png">
				</div>

				<h3>DEL VISO</h3>
			</div>
		</div>
		<div id='derqui' class="blu-images__container col-md-3">
			<div class="blue-images__derqui">
				<div class="wrapper">
    				<div class="text">
        			<p class="address-title">DIRECCIÓN</p>
        			<p>Av. Juan D. Perón 2200</p>
        			<p>Derqui</p>
   					 </div>
    				<img class='sucur-img' src="img/Derqui.png">
				</div>
				<h3>DERQUI</h3>
			</div>
		</div>
        <div class='col-md-3'></div>
	</div>
                                                        <!-- MAPS -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13160.977251457956!2d-58.78535017431141!3d-34.445945619523776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bc993fb6f5b121%3A0x3946b374735be9b3!2sDel+Viso%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1412342785615" width="100%" height="350" frameborder="0" style="border:0"></iframe>
    </div>

                                                    <!-- CONTACTO -->

    <div id="contact">
        <h3>INFORMACIÓN</h3>
            <div class="contact__phone">
                <p class="ion-ios7-telephone"></p>
            </div>
            <p class="phone-number">+54 11 3571-7166</p>
            <div class="contact__mail-icon">
                <p class="ion-android-mail"></p>
            </div>  
            <p class="contact__mail-text">INFO@SENSGROUP.COM.AR</p>
    </div>

                                                    <!-- FOOTER -->
    <footer>
            <p>©2014 Sens Group All rights Reserved.</p>
            <ul>
                <li><a onClick="goToByScroll('contact'); return false;" href="#">Información</a></li>
                <li><a onClick="goToByScroll('contact-form-section'); return false;" href="#">Cotizar seguro</a></li>
                <li><a onClick="goToByScroll('seguros-section'); return false;" href="#">Seguros</a></li>
                <li><a onClick="goToByScroll('page1'); return false;" href="#">Inicio</a></li>
            </ul>
    </footer>   
    <?php include('includes/modal.php') ?>
    <script>seguros();</script>
    </div>
 </body>
</html>

