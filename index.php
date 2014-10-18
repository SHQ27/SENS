<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
        <title>SENS-Asesores de Seguros-</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/general.css">
        <link rel="stylesheet" href="css/index.css">
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/slider/nivo-slider.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery.nivo.slider.pack.js"></script>
    </head>
    <body>
    <script src="js/index.js"></script>
    <header>
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
                <li class="menu menu--sinister"><a class="sinisterlink" href="#!"><span class="sue-sinister">DENUNCIÁ</span><br/>TU SINIESTRO</a></li>
                <li class='menu grow'><a onClick="goToByScroll('page5'); return false;" href="#">PAGINA 5</a></li>
                <li class='menu grow'><a onClick="goToByScroll('page4'); return false;" href="#">PAGINA 4</a></li>
                <li class='menu grow'><a onClick="goToByScroll('page3'); return false;" href="#">PAGINA 3</a></li>
                <li class='menu grow'><a onClick="goToByScroll('page2'); return false;" href="#">PAGINA 2</a></li>
                <li class='menu grow'><a onClick="goToByScroll('page1'); return false;" href="#">PAGINA 1</a></li>
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
        <div id="formselector">
            <h1>CONTRATÁ TU SEGURO AHORA!</h1>
            <form name='formulario' id='formulario' method='post' action='enviar_mail.php' enctype="multipart/form-data">
                <div class="contratar">
                    <div id="sele">
                        <label for="vehiculo"></label>
                            <select name="vehiculo" size="1" id="vehiculo">
                                <option value="Auto">Vehiculo</option>
                                <option value="Camioneta">Auto</option>
                            </select>
                        <label for="marca"></label>
                            <select name="marca" size="1" id="marca">
                                <option value="Ford">Marca</option>
                                <option value="Ford">Ford</option>
                            </select>
                        <label for="version"></label>
                            <select name="version" size="1" id="version">
                                <option value="3 puertas">Versión</option>
                                <option value="4 puertas">4 puertas</option>
                            </select>
                        <label for="modelo"></label>
                            <select name="modelo" size="1" id="modelo">
                                <option value="Ford">Modelo</option>
                                <option value="2014">fiesta 1.4</option>
                            </select>
                        <label for="año"></label>
                            <select name="año" size="1" id="año">
                                <option value="Ford">Año</option>
                                <option value="2014">2014</option>
                            </select>
                    </div>
                    <input type='submit' id="botcon" value='Contratar seguro'>
                </div>
            </form>
        </div>
    </div>
 </body>
</html>

