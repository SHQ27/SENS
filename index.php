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
                <li class='menu grow'><a onClick="goToByScroll('page6'); return false;" href="#">CONTACTO</a></li>
                <li class='menu grow'><a onClick="goToByScroll('page2'); return false;" href="#">COTIZAR SEGURO</a></li>
                <li class='menu grow'><a onClick="goToByScroll('page4'); return false;" href="#">SEGUROS</a></li>
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
    <div class='section-division'></div>
    <!-- PAGE 2 -->
    <div id='page2'>
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
    <div id="page3" class="content ventajas-content">
        <div class="separador-top">
            <div class='section-division'></div>
            <div class='section-division'></div>
            <img src="img/barra.png">
        </div>
        <div id="ventajas">
            <div id="ventajasin1"><img src="img/ventaja1.png"></div>
            <div id="ventajasin2"><img src="img/ventaja2.png"></div>
            <div id="ventajasin3"><img src="img/ventaja3.png"></div>
            <div id="ventajasin4"><img src="img/ventaja4.png"></div>
        </div>
        <div class="separador-bot">
            <img src="img/barra2.png">
        </div>
    </div>
    <div id='page4' >
        <div class='tab-container blue-content'>
            <div class='section-division white'></div>
            <div class='section-division white'></div>
            <div class='section-division white'></div>
            <div class='col-md-3 row tab selected'>
                <a class='tab-link col-md-10'>PERSONAS</a>
                <a class='col-md-2 dropdown-carrot '><i class='glyphicon glyphicon-chevron-down'></i></a>
            </div>
            <div class='col-md-3 tab unselected'><a class='tab-link'>AUTOMOTORES</a></div>
            <div class='col-md-3 tab unselected'><a class='tab-link'>COMBINADO FAMILIAR</a></div>
            <div class='col-md-3 tab unselected'><a class='tab-link'>ACCIDENTES PERSONALES</a></div>
        </div>

        <div class='tab-info'>
            <p class='info-title'>NUESTROS<br>SEGUROS</p>
            <hr>
            <p class='info-subtitle'> COMBINADO FAMILIAR </p> 
            <p class='info-text'>
                    Encuentre para su casa un seguro a su medida. Marcamos la<br> diferencia por medio de sugerencias y consejos de seguros a<br> través de un servicio personalizado.
            </p>
        <button class='btn btn-success cotizar-submit'> COTIZAR SEGURO </button>
        </div>
    </div>    

    <div class='section-division white'></div>
    <div id="page5" class="belief-container">
        <div id="titulocreemos">CREEMOS EN LA SEGURIDAD. CREEMOS EN LOS DESAFIOS.<hr>
        </div>
        <div id="textocreemos">
        Creemos en los desafíos y nos obligamos a superar continuamente nuestro horizonte en busca de la completa satisfacción y tranquilidad del cliente. Nuestros resultados son fruto del compromiso y la dedicación permanente.</br>
        En SENS serás atendido por personas compresivas/serviciales que te escucharán, entenderán y valorarán: asesores que asumen la responsabilidad de dedicarles profunda atención a tus pedidos para hallar soluciones de manera rápida y precisa, y en definitiva poder llevar la gestión más eficiente.  
        </div>
    </div>
    <div class='section-division white'></div>
    <div id="page6" class="content blue-content">
        <div id="titulocontacto">Contactanos</div>
        <div id="texto_contacto"><img src="img/telefono.png" >&nbsp; (02320) 479-860</div>
        <div id="texto_contacto"><img src="img/ma-01.png" >&nbsp; info@sensgroup.com.ar</div>
        <div id="texto_contacto0"><img id="face" src="img/logoface.png" >SENS GROUP</div>
        <div id="texto_contacto1"><img id="twi" src="img/logotwi.png" >@NSTEGMANN</div>
    </div>    
     <div id="page7">
        <div id="texto_contacto3">Av. Constitución 546 (Ruta 26) - Local 14 - Del Viso</br>
        Av. Juan Domingo Perón 2200 - Local 112 - Pte. Derqui</div></br>
    </div>



 </body>
</html>

