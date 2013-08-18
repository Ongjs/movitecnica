<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Movitécnica</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

        <link rel="shortcut icon" href="../images/favicon_movi.ico">
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
        <link rel='stylesheet'  href='../css/mystyles.css' type='text/css' media='all' />
        <link rel='stylesheet' id='reset-css'  href='../css/reset9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='responsive'  href='../css/responsive.css' type='text/css' media='all' />
        <link rel='stylesheet' id='font-awesome.min-css'  href='../css/font-awesome.min9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='flexslider-css'  href='../css/flexslider9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='superfish-css'  href='../css/superfish9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='mediaelement-css'  href='../js/mediaelement/build/mediaelementplayer.min9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='style-css'  href='../style9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='fancybox-css'  href='../js/fancybox/jQuery.fancybox-1.3.49d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='skin'  href='../css/skin3.css' type='text/css' media='all' />
        <script type='text/javascript' src='../js/jquery.js'></script>
        <script type='text/javascript' src='../js/custom.js'></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
    <style>
        #post_p
        {
            width: 320px;
        }
        .uni_response
        {
            margin-left: 20px;
        }
        @media only screen and (max-width: 1048px )
        {
            #post_grids
            {
                margin-left: 25px;
            }
            #post_p
            {
                width: 70%;
            } 
            .uni_response
            {
                margin-left: 0px;
            }
        }

        .accordion_title
        {
            font-size: 15px;
        }
        .addthis_toolbox
        {
            float: right;
        }
    </style>
    <body>  <?php  include '../class/Connection.class.php'; include '../class/Fuctions.php'; ?>
        <div class="top_wrapper">
            <div id="header">
                <div class="container">
                    <div class="row">
                        <div style="text-align: right; margin-right: 3%; color: #FFF; font-weight: bold; font-size: 10px;">
                            <span style="margin-left: 15px; margin-right: 15px;"><a href="Contactenos.php">Contáctenos</a></span> <span>|</span> <span style="margin-left: 15px; margin-right: 12px;">Siguenos</span> <img class="movirs" src="../images/facebook.png">
                            <img class="movirs" src="../images/flickr.png">
                        </div>
                        <div class="twelve columns">
                            <div class="header_left">
                                <h1 id="logo"><a href="../index.php" title=""><img src="../images/logo_skin3.png" alt="" id="header_logo" style="width: 270px"/></a></h1>


                            </div>

                            <div class="header_right">
                                <div id="top_menu" class="menu-navigation-container"><ul id="mainmenu" class="sf-menu">
                                <!--<li id="menu-item-861"  class="current-menu-item"><a href="../index.php">Homepage</a></li>-->
                                <li id="menu-item-1126"  ><a href="../conocenos/conocenos.php"><?php echo mo_get_data(1, 2); ?></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../conocenos/mensaje_del_gerente.php"><?php echo mo_get_data(1, 3); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../conocenos/mision_y_vision.php"><?php echo mo_get_data(1, 4); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../Conocenos/Valores.php"><?php echo mo_get_data(1, 5); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../conocenos/equipo_de_trabajo.php"><?php echo mo_get_data(1, 6); ?></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-1126"  ><a href="../que_hacemos/que_hacemos.php"><?php echo mo_get_data(1, 7); ?></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 205px"><a href="../que_hacemos/unidad_gruas_y_proyectos.php"><?php echo mo_get_data(1, 8); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 205px"><a href="../que_hacemos/unidad_fajas_transportadoras.php"><?php echo mo_get_data(1, 9); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 205px"><a href="../que_hacemos/unidad_servicio_tecnico.php"><?php echo mo_get_data(1, 11); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 205px"><a href="../que_hacemos/unidad_comercial.php"><?php echo mo_get_data(1, 12); ?></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-1126"  ><a href="../productos/productos.php"><?php echo mo_get_data(1, 25); ?></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../productos/productos.php"><?php echo mo_get_data(1, 26); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../productos/productos.php"><?php echo mo_get_data(1, 27); ?></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-1126"  ><a href="../SIG/sig.php"><?php echo mo_get_data(1, 13); ?></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../SIG/politica.php"><?php echo mo_get_data(1, 14); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../SIG/garantia.php"><?php echo mo_get_data(1, 15); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../SIG/reclamos.php"><?php echo mo_get_data(1, 16); ?></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-1126"  ><a href="../trabaje_con_nosotros/trabaje_con_nosotros.php"><?php echo mo_get_data(1, 17); ?></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../trabaje_con_nosotros/porque_movitecnica.php"><?php echo mo_get_data(1, 18); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../trabaje_con_nosotros/testimonios.php"><?php echo mo_get_data(1, 21); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../trabaje_con_nosotros/oferta_de_trabajo.php"><?php echo mo_get_data(1, 19); ?></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-1126"  ><a href="../media/media.php"><?php echo mo_get_data(1, 28); ?></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../media/media.php?media=noticia"><?php echo mo_get_data(1, 29); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../media/media.php?media=nota"><?php echo mo_get_data(1, 30); ?></a></li>
                                    </ul>
                                </li>
                                <!--<li id="menu-item-1125" ><a href="single-ele.html">HTML Elements</a></li>-->
                                <!--<li id="menu-item-1114" ><a href="single-full-widgets.html">Sidebars</a></li>-->

                            </ul>

                            <div class="header_search"><div class="search_zoom search_btn"></div>
                                <div class="search_box">
                                    <form method="get" id="searchform" action="#"><input id="s" name="s"   type="text" placeholder="Escribir y dar enter para buscar" class="search_input" /></form></div></div>	
                        </div>						

                            </div>
                        </div>	
                    </div>	
                </div><!-- .container -->
            </div><!-- #header -->
        </div> <!--.top_wrapper -->	
        <div class="container">	
            <div id="post_grids" class="row" style=" margin-top: -20px;">
                <div style="margin-left: 20px;">
                    <span> <a href="index.php">Inicio</a> > <a href="productos/productos.php"> Productos </a> > Productos </span>
                    <br />
                    <br />
                    <div class="image_box2"><img src="../userfiles/_gruas_y_proyectos.png" style=""></div>
                    <br />
                    <br />
                    <div id="post_p" style="display: inline-block; vertical-align: top; width: 230px; text-align: left;">
                        <div class="categorias">
                            <ul class="accordion">
                                <li>
                                    <div class="accordion_head accordion_title" style="font-size: 16px; font-weight: bold;">Seleccionar por Categorias</div>
                                    <div class="accordion_content">
                                        <ul>
                                            <li>
                                                <div class="accordion_head accordion_title">Izaje</div>
                                                <div class="accordion_content">
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Polipastos Manuales</div>
                                                            <div class="accordion_content">
                                                                <span>Cadena</span><br/>
                                                                <span>Palanca</span><br/>
                                                                <span>cable</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Polipastos Eléctricos</div>
                                                            <div class="accordion_content">
                                                                <span>Cadena</span><br/>
                                                                <span>Cable</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Polipastos Neumáticos</div>
                                                            <div class="accordion_content">

                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Trolleys</div>
                                                            <div class="accordion_content">
                                                                <ul>
                                                                    <li>
                                                                        <div class="accordion_head accordion_title">Manuales</div>
                                                                        <div class="accordion_content">
                                                                            <span>Cadena</span><br/>
                                                                            <span>Empuje</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <span>Eléctricos</span><br/>
                                                                <span>Neumaticos</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Accesorios de Izaje</div>
                                                            <div class="accordion_content">
                                                                <span>Accesorios Varios</span><br/>
                                                                <span>Eslingas</span><br/>
                                                                <span>Estrobos</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Sistemas Hidráulicos</div>
                                                            <div class="accordion_content">

                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Componentes para Gruas</div>
                                                            <div class="accordion_content">
                                                                <span>Componentes para Equipos de Izaje</span><br/>
                                                                <span>Mecanismos y Accesorios</span><br/>
                                                                <span>Sistemas de Control</span><br/>
                                                                <span>Rieles y Accesorios</span><br/>
                                                                <span>Componentes y Repuestos Mecanicos</span><br/>
                                                                <span>Componentes y Repuestos Electricos</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Servicios, Inpecciones, Modernizaciones</div>
                                                            <div class="accordion_content">

                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="accordion_head accordion_title">Fajas Transportadoras</div>
                                                <div class="accordion_content">
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Fajas Transportadoras</div>
                                                            <div class="accordion_content">
                                                                <ul>
                                                                    <li>
                                                                        <div class="accordion_head accordion_title">Fajas de Lona</div>
                                                                        <div class="accordion_content">
                                                                            <span>Antiabrazivas</span><br/>
                                                                            <span>Alta Temperatura</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <span>Fajas de Acero</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Accesorios de Fajas Transportadoras</div>
                                                            <div class="accordion_content">
                                                                <span>Alineadores</span><br/>
                                                                <span>Limpiadores</span><br/>
                                                                <span>Camas de Impacto</span><br/>
                                                                <span>Polines</span><br/>
                                                                <span>Grapas</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Servicio de Empalme de Fajas</div>
                                                            <div class="accordion_content">

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="accordion_head accordion_title">Sistema de Electrificación</div>
                                                <div class="accordion_content">
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Sistema Festoon</div>
                                                            <div class="accordion_content">
                                                                <span>Barra Cuadrada</span><br/>
                                                                <span>C. Track</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Sistema Barra Dura</div>
                                                            <div class="accordion_content">
                                                                <span>Safelec</span><br/>
                                                                <span>Bar 8</span><br/>
                                                                <span>Heavy Bar</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Enrollador de Cable</div>
                                                            <div class="accordion_content">
                                                                <span>Accesorios Varios</span><br/>
                                                                <span>Eslingas</span><br/>
                                                                <span>Estrobos</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Controles de Mando</div>
                                                            <div class="accordion_content">
                                                                <span>Con Resorte</span><br/>
                                                                <span>Motorizados</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Cables de Eléctricos</div>
                                                            <div class="accordion_content">
                                                                <span>Radio Control</span><br/>
                                                                <span>Botoneras</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Cables de Eléctricos</div>
                                                            <div class="accordion_content">
                                                                <span>Planos para Sistema Festoon</span><br/>
                                                                <span>Autoportante para botoneras</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="accordion_head accordion_title">Carretillas</div>
                                                <div class="accordion_content">
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Carretilla Hidráulica Quicklift</div>
                                                            <div class="accordion_content">

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="accordion_head accordion_title">Chutes</div>
                                                <div class="accordion_content">
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Chute de Llenado (Antipollución)</div>
                                                            <div class="accordion_content">

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion_head accordion_title" style="font-size: 16px; font-weight: bold;">Seleccionar por Marcas</div>
                                    <div class="accordion_content">
                                        <ul>
                                            <li>
                                                <div class="accordion_head accordion_title">Yale</div>
                                                <div class="accordion_content">
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Polipastos Manuales</div>
                                                            <div class="accordion_content">
                                                                <span>Cadena</span><br/>
                                                                <span>Palanca</span><br/>
                                                                <span>cable</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Polipastos Eléctricos</div>
                                                            <div class="accordion_content">
                                                                <span>Cadena</span><br/>
                                                                <span>Cable</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Trolleys</div>
                                                            <div class="accordion_content">
                                                                <ul>
                                                                    <li>
                                                                        <div class="accordion_head accordion_title">Manuales</div>
                                                                        <div class="accordion_content">
                                                                            <span>Cadena</span><br/>
                                                                            <span>Empuje</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <span>Eléctricos</span><br/>
                                                                <span>Neumaticos</span><br/>
                                                                <span>Carro Tractor</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Accesorios de Izaje</div>
                                                            <div class="accordion_content">
                                                                <span>Accesorios Varios</span><br/>
                                                                <span>Eslingas</span><br/>
                                                                <span>Estrobos</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Sistemas Hidráulicos</div>
                                                            <div class="accordion_content">

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="accordion_head accordion_title">Fenner Dunlop</div>
                                                <div class="accordion_content">
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Fajas Transportadoras</div>
                                                            <div class="accordion_content">
                                                                <ul>
                                                                    <li>
                                                                        <div class="accordion_head accordion_title">Fajas de Lona</div>
                                                                        <div class="accordion_content">
                                                                            <span>Antiabrazivas</span><br/>
                                                                            <span>Alta Temperatura</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <span>Fajas de Acero</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="accordion_head accordion_title">ASGCO</div>
                                                <div class="accordion_content">
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Accesorios de Fajas Transportadoras</div>
                                                            <div class="accordion_content">
                                                                <span>Alineadores</span><br/>
                                                                <span>Limpiadores</span><br/>
                                                                <span>Camas de Impacto</span><br/>
                                                                <span>Polines</span><br/>
                                                                <span>Grapas</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="accordion_head accordion_title">Conductix</div>
                                                <div class="accordion_content">
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Sistema Festoon</div>
                                                            <div class="accordion_content">
                                                                <span>Barra Cuadrada</span><br/>
                                                                <span>C. Track</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Sistema Barra Dura</div>
                                                            <div class="accordion_content">
                                                                <span>Safelec</span><br/>
                                                                <span>Bar 8</span><br/>
                                                                <span>Heavy Bar</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Enrollador de Cable</div>
                                                            <div class="accordion_content">
                                                                <span>Accesorios Varios</span><br/>
                                                                <span>Eslingas</span><br/>
                                                                <span>Estrobos</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Controles de Mando</div>
                                                            <div class="accordion_content">
                                                                <span>Con Resorte</span><br/>
                                                                <span>Motorizados</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Cables de Eléctricos</div>
                                                            <div class="accordion_content">
                                                                <span>Radio Control</span><br/>
                                                                <span>Botoneras</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Cables de Eléctricos</div>
                                                            <div class="accordion_content">
                                                                <span>Planos para Sistema Festoon</span><br/>
                                                                <span>Autoportante para botoneras</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="accordion_head accordion_title">Street</div>
                                                <div class="accordion_content">
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Polipastos Eléctricos</div>
                                                            <div class="accordion_content">
                                                                <span>Cable</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="accordion_head accordion_title">Movitech</div>
                                                <div class="accordion_content">
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Carretilla Hidráulica Quicklift</div>
                                                            <div class="accordion_content">

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="accordion_head accordion_title">Vetter</div>
                                                <div class="accordion_content">
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Grúas Pescantes</div>
                                                            <div class="accordion_content">

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>   
                                            <li>
                                                <div class="accordion_head accordion_title">Cimbria</div>
                                                <div class="accordion_content">
                                                    <ul>
                                                        <li>
                                                            <div class="accordion_head accordion_title">Chute de Llenado (Antipollución)</div>
                                                            <div class="accordion_content">

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <?php
                    /*
                     * seleccionar
                     * marcas
                     * subcate
                     * 
                     * descripcion
                     */

                    $mostrar = "descripcion";
                    if ($mostrar != "descripcion") {
                        ?>
                        <div style="display: inline-block; width: 48%; min-width: 220px; " class="uni_response">
                            <?php
                        } else {
                            ?>
                            <div style="display: inline-block; width: 75%; min-width: 220px; " class="uni_response">
                                <?php
                            }
                            ?>
                            <div style="width: 98%;">
                                <h1><b>Catálogo de Productos</b></h1>
                                <br />  
                                <?php
                                if ($mostrar == "seleccionar") {
                                    ?>
                                    <div style="">
                                        <div class="six columns post_col masonry-brick">
                                            <div class="post-973 post type-post status-publish format-standard hentry category-uncategorized post_item white_box">
                                                <div class="large_thumb thumb_hover" >
                                                    <a href="../images/_demo/1.jpg" class="thumb_icon marcas fancybox" style="-webkit-transition:none; -moz-transition: none; margin-top: 28px;"><span></span></a>
                                                    <div class="mask post_top_element"></div> 
                                                    <div class="img_wrapper"><a href="#" rel="bookmark" title="This is a image"><img src="../images/foto_pro_marcas.png" width="710" height="454" alt="This is a image" class="post_top_element thumb" /></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="six columns post_col masonry-brick">
                                            <div class="post-973 post type-post status-publish format-standard hentry category-uncategorized post_item white_box">
                                                <div class="large_thumb thumb_hover">
                                                    <a href="../images/_demo/1.jpg" class="thumb_icon productos fancybox" style="-webkit-transition:none; -moz-transition: none; margin-top: 28px;"><span></span></a>
                                                    <div class="mask post_top_element"></div> 
                                                    <div class="img_wrapper"><a href="#" rel="bookmark" title="This is a image"><img src="../images/foto_pro_categoria.png" width="710" height="454" alt="This is a image" class="post_top_element thumb" /></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                if ($mostrar == "marcas") {
                                    ?>
                                    <div class="lista_marcas" style="">
                                        <div style="width: 240px; float: left; text-align: center; height: 150px">
                                            <div class='marca'>
                                                <div>
                                                    <a href="#"><img src="../images/yale.png"></a>
                                                </div>
                                            </div>
                                            <div style="">Yale</div>
                                        </div>
                                        <div style="width: 240px; float: left; text-align: center; height: 150px">
                                            <div class='marca'>
                                                <div>
                                                    <a href="#"><img src="../images/fenner_dunlop.png"></a>
                                                </div>
                                            </div>
                                            <span>Fenner Dunlop</span>
                                        </div>
                                        <div style="width: 240px; float: left; text-align: center; height: 150px">
                                            <div class='marca'>
                                                <div>
                                                    <a href="#"><img src="../images/asgco.png"></a>
                                                </div>
                                            </div>
                                            <span>ASGCO</span>
                                        </div>
                                        <div style="width: 240px; float: left; text-align: center; height: 150px">
                                            <div class='marca'>
                                                <div>
                                                    <a href="#"><img src="../images/conductix.png"></a>
                                                </div>
                                            </div>
                                            <span>conductix</span>
                                        </div>
                                        <div style="width: 240px; float: left; text-align: center; height: 150px">
                                            <div class='marca'>
                                                <div>
                                                    <a href="#"><img src="../images/street.png"></a>
                                                </div>
                                            </div>
                                            <span>Street</span>
                                        </div>
                                        <div style="width: 240px; float: left; text-align: center; height: 150px">
                                            <div class='marca'>
                                                <div>
                                                    <a href="#"><img src="../images/movitech.png"></a>
                                                </div>
                                            </div>
                                            <span>Movitech</span>
                                        </div>
                                        <div style="width: 240px; float: left; text-align: center; height: 150px">
                                            <div class='marca'>
                                                <div>
                                                    <a href="#"><img src="../images/vetter.png"></a>
                                                </div>
                                            </div>
                                            <span>Vetter</span>
                                        </div>
                                        <div style="width: 240px; float: left; text-align: center; height: 150px">
                                            <div class='marca'>
                                                <div>
                                                    <a href="#"><img src="../images/cimbria.png"></a>
                                                </div>
                                            </div>
                                            <span>Cimbria</span>
                                        </div>

                                    </div>
                                    <?php
                                }
                                if ($mostrar == "subcate") {
                                    ?>
                                    <div style="">
                                        <div>
                                            <h4>Yale</h4>
                                            <div class='marca' style="margin-left: -7px; float: none">
                                                <div>
                                                    <a href="#"><img src="../images/yale.png"></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div style="float: left; width: 100%; margin-top: 20px; ">
                                            <h4>Polipastos Manuales</h4>
                                            <div style="margin-top: 7px; margin-bottom: 7px;">
                                                <div style="width: 35%; float: left;"><img src="../images/poli-ejem.png" style=""></div>
                                                <div style="" class="sub_cate_content">
                                                    <h4>Fijas</h4>
                                                    <ul>
                                                        <li>Chancandoras Fijas: trituradoras de mandíbulas</li>
                                                    </ul>
                                                    <h4>Fijas</h4>
                                                    <ul>
                                                        <li>Chancandoras Fijas: trituradoras de mandíbulas</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div style="float: left; width: 100%; margin-top: 20px;">
                                            <h4>Polipastos Eléctricos</h4>
                                            <div style="margin-top: 3px; margin-bottom: 3px;">
                                                <div style="width: 35%; float: left;"><img src="../images/poli-ejem.png" style=""></div>
                                                <div style="" class="sub_cate_content">
                                                    <h4>Fijas</h4>
                                                    <ul>
                                                        <li>Chancandoras Fijas: trituradoras de mandíbulas</li>
                                                        <li>Chancandoras Fijas: trituradoras de mandíbulas</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div style="margin-top: 3px; margin-bottom: 3px; float: left; width: 100%;">
                                                <div style="width: 35%; float: left;"><img src="../images/poli-ejem.png" style=""></div>
                                                <div style="" class="sub_cate_content">
                                                    <h4>Fijas</h4>
                                                    <ul>
                                                        <li>Chancandoras Fijas: trituradoras de mandíbulas</li>
                                                        <li>Chancandoras Fijas: trituradoras de mandíbulas</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                if ($mostrar == "descripcion") {
                                    ?>
                                    <div class="desc_productos" style="">
                                        <div class="prod_des" style="">
                                            <div class="prod_image " style="margin-bottom: 20px; margin-right: 30px;">
                                                <a href="../images/polipasto.jpg" class="fancybox"><img src="../images/polipasto.jpg"></a>
                                            </div>
                                            <div class="scrollbar1" style="">
                                                <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
                                                <div class="viewport">
                                                    <div class="overview" style="">
                                                        <div class="title_share">
                                                            <h3 style="width: 80%; float: left">Magnis Magnis </h3>
                                                            <div class="addthis_toolbox addthis_default_style" style="width: 9%; float: right; height: 30px;">
                                                                <a class="addthis_button_preferred_1"></a>
                                                                <a class="addthis_button_preferred_3"></a>
                                                            </div>
                                                        </div>
                                                        <ul>
                                                            <li>Capacidades de 750 – 6000 kg.</li>
                                                            <li>Los ganchos superior e inferior se fabrican en acero especial, forjado y bonificado. En caso de sobrecarga se abren sin rotura.</li>
                                                            <li>Las cadenas de eslabones se fabrican en acero bonificado con superficie galvanizada. Cumplen las normas nacionales e internacionales actualmente en vigor.</li>
                                                            <li>Guía de cadena integrada en la carcasa para el recorrido preciso de la cadena sobre la nuez.</li>
                                                            <li>Tope robusto</li>
                                                            <li>Dispositivo de punto neutro para posicionar y pretensar rápidamente la cadena en ambas direcciones.</li>
                                                            <li>Palanca corta con empuñadura de goma.</li>
                                                            <li>Rueda de mano protegida contra la corrosión con cromado duro</li>
                                                            <li>Freno de carga resistente a la corrosión y discos de fricción sin asbesto.</li>
                                                            <li>Gancho de carga con pasteca robusta gracias a sus ejes encapsulados.</li>
                                                            <li>Accionamiento fácil y sin esfuerzo de la palanca.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ficha_tecnica" style="">
                                                <img src="../images/pdf.png">
                                            </div>
                                        </div>
                                        <div class="prod_des" style="">
                                            <div class="prod_image " style="margin-bottom: 20px; margin-right: 30px;">
                                                <a href="../images/polipasto.jpg" class="fancybox"><img src="../images/polipasto.jpg"></a>
                                            </div>
                                            <div class="scrollbar1" style="">
                                                <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
                                                <div class="viewport">
                                                    <div class="overview" style="">
                                                        <div class="title_share">
                                                            <h3 style="width: 80%; float: left">Magnis Magnis </h3>
                                                            <div class="addthis_toolbox addthis_default_style" style="width: 9%; float: right; height: 30px;">
                                                                <a class="addthis_button_preferred_1"></a>
                                                                <a class="addthis_button_preferred_3"></a>
                                                            </div>
                                                        </div>
                                                        <ul>
                                                            <li>Capacidades de 750 – 6000 kg.</li>
                                                            <li>Los ganchos superior e inferior se fabrican en acero especial, forjado y bonificado. En caso de sobrecarga se abren sin rotura.</li>
                                                            <li>Las cadenas de eslabones se fabrican en acero bonificado con superficie galvanizada. Cumplen las normas nacionales e internacionales actualmente en vigor.</li>
                                                            <li>Guía de cadena integrada en la carcasa para el recorrido preciso de la cadena sobre la nuez.</li>
                                                            <li>Tope robusto</li>
                                                            <li>Dispositivo de punto neutro para posicionar y pretensar rápidamente la cadena en ambas direcciones.</li>
                                                            <li>Palanca corta con empuñadura de goma.</li>
                                                            <li>Rueda de mano protegida contra la corrosión con cromado duro</li>
                                                            <li>Freno de carga resistente a la corrosión y discos de fricción sin asbesto.</li>
                                                            <li>Gancho de carga con pasteca robusta gracias a sus ejes encapsulados.</li>
                                                            <li>Accionamiento fácil y sin esfuerzo de la palanca.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ficha_tecnica" style="">
                                                <img src="../images/pdf.png">
                                            </div>
                                        </div>

                                    </div>
                                    <?php
                                }
                                ?>

                                <br />
                            </div>
                        </div>
                            <?php 
                            if($mostrar != "descripcion"){
                            ?>
                        <div id="post_p" style="width: 262px; display: inline-block; margin-left: 20px;vertical-align: top;">
                            <div class="widget tab_wrapper white_box" id="tab_wrapper_tab_widget-2">
                                <div class="clear"></div>
                                <div class="tabs_container">
                                    <div id="post_tab" class="tab_content recent_posts">
                                        <ul>
                                            <li> 
                                                <div style="border-top: 1px solid #D7D7D7; padding-top: 10px;">
                                                    <div style="width: 100%; margin-bottom: 10px;"> <h3 style="display: inline-block; vertical-align: top; margin-top: 10px;"> <b><a href="../Contactenos.php">Contáctenos</a></b> </h3><div style="display: inline-block; margin-left: 8px;"><img src="../images/logo_solo.png" style="width: 38px"></div></div>
                                                    <span>Póngase en contacto con nuestro expertos, para averiguar cómo podemos ayudarle a usted y a su empresa con su proyecto</span>
                                                </div><br />
                                                <div style="border-top: 1px solid #D7D7D7">
                                                    <br />
                                                    <h3><b>Noticias Recientes</b></h3>   
                                                    <span>
                                                    <?php
                                                    foreach (mo_get_desc() as $array) {
                                                        ?>
                                                        <a href="../media/noticia.php?cod=<?php echo $array[0]; ?>">
                                                            <?php echo substr($array[1], 0, 150) . "...."; ?>
                                                        </a><br /><br />
                                                        <?php
                                                    }
                                                    ?>
                                                </span>
                                                <br />
                                                <a class="button normal small" href="../media/media.php">Ver más</a><br /><br />
                                                <a href="../media/media.php">Ver Todas ></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                            <?php 
                            }
                            ?>
                    </div>
                    <br />
                    <br />
                    <footer class="footer">
                        <br />
                        <section>
                            <span class="footer-menu"> <span style="font-size: 17px"><b>Ocultar Menú</b></span> <img src="../images/flecha_abajo.png" style="margin-bottom: -2px;"></span>
                        </section>
                        <div class='footer-trog'>
                        <section>
                            <article style="width: 170px;">
                                <span style="font-size: 16px;"><b><a href="../conocenos/conocenos.php"><?php echo mo_get_data(1, 2); ?></a></b></span><br/>
                                <span>
                                    <a href="../conocenos/mensaje_del_gerente.php"><?php echo mo_get_data(1, 3); ?></a><br />
                                    <a href="../conocenos/mision_y_vision.php"><?php echo mo_get_data(1, 4); ?></a><br />
                                    <a href="../conocenos/valores.php"><?php echo mo_get_data(1, 5); ?></a><br />
                                    <a href="../conocenos/equipo_de_trabajo.php"><?php echo mo_get_data(1, 6); ?></a><br />
                                </span>
                            </article>
                            <article style="width: 235px">
                                <span style="font-size: 16px;"><b><a href="../que_hacemos/que_hacemos.php"><?php echo mo_get_data(1, 7); ?></a></b></span><br/>
                                <span>
                                    <a href="../que_hacemos/unidad_gruas_y_proyectos.php"><?php echo mo_get_data(1, 8); ?></a><br/>
                                    <a href="../que_hacemos/unidad_fajas_transportadoras.php"><?php echo mo_get_data(1, 9); ?></a><br/>
                                    <a href="../que_hacemos/unidad_servicio_tecnico.php"><?php echo mo_get_data(1, 11); ?></a><br/>
                                    <a href="../que_hacemos/unidad_comercial.php"><?php echo mo_get_data(1, 12); ?></a><br/>
                                </span>
                            </article>
                            <article style="width: 120px">
                                <span style="font-size: 16px;"><b><a href="../productos/productos.php"><?php echo mo_get_data(1, 25); ?></a></b></span><br/>
                                <span>
                                    <a href="../productos/productos.php"><?php echo mo_get_data(1, 26); ?></a><br/>
                                    <a href="../productos/productos.php"><?php echo mo_get_data(1, 27); ?></a><br/>
                                </span>
                            </article>
                            <article style="width: 120px">
                                <span style="font-size: 16px;"><b><a href="../SIG/sig.php"><?php echo mo_get_data(1, 13); ?></a></b></span><br/>
                                <span>
                                    <a href="../SIG/politica.php"><?php echo mo_get_data(1, 14); ?></a><br/>
                                    <a href="../SIG/garantia.php"><?php echo mo_get_data(1, 15); ?></a><br/>
                                    <a href="../SIG/reclamos.php"><?php echo mo_get_data(1, 16); ?></a><br/>
                                </span>
                            </article>
                            <article style="width: 210px">
                                <span style="font-size: 16px;"><b><a href="../trabaje_con_nosotros/trabaje_con_nosotros.php"><?php echo mo_get_data(1, 17); ?></a></b></span><br/>
                                <span>
                                    <a href="../trabaje_con_nosotros/porque_movitecnica.php"><?php echo mo_get_data(1, 18); ?></a><br/>
                                    <a href="../trabaje_con_nosotros/testimonios.php"><?php echo mo_get_data(1, 21); ?></a><br/>
                                    <a href="../trabaje_con_nosotros/oferta_de_trabajo.php"><?php echo mo_get_data(1, 19); ?></a><br/>
                                </span>
                            </article>
                            <article style="width: 140px">
                                <span style="font-size: 16px;"><b><a href="../media/media.php"><?php echo mo_get_data(1, 28); ?></a></b></span><br/>
                                <span>
                                    <a href="../media/media.php"><?php echo mo_get_data(1, 29); ?></a><br/>
                                    <a href="../media/media.php"><?php echo mo_get_data(1, 30); ?></a><br/>
                                </span>
                            </article>

                        </section>
                        <section style='margin-top: 15px;'>
                            <div class="footer-op">
                                <span><img src="../images/sitemap.png">Sitemap</span>
                                <span><a href="../contactenos.php"><img src="../images/contactenos.png"><?php echo mo_get_data(1, 31); ?></a></span>
                                <span><a href="../index.php"><img src="../images/home.png"><?php echo mo_get_data(1, 1); ?></a></span>
                            </div>
                        </section>
                    </div>
                    </footer>
                </div>
                <br />
                <div style="display:none">
                    <div id="inline1">
                        <iframe src="http://player.vimeo.com/video/52560308" width="800" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                    </div>
                </div>
                <div class="load_more">	
                    <nav id="page-nav">
                        <a href="#"></a>	</nav>
                </div>
                <!-- end infinite scroll -->
            </div>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="twelve columns wrapper">
                            <div class="ft_left"><img src="../images/logo_solo.png" width="30"><div style="margin-top: 8px; display: inline-block; vertical-align: top; margin-left: 5px;">Copyright © Movitécnica 2013. Todos los derechos reservados</div></div>
                            <div class="ft_right"></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div><!-- .container -->	
            </div>
            <!-- #footer -->

            <link rel='stylesheet' id='demo-style'  href='_switcher/style.css' type='text/css' media='all' />
            <link rel='stylesheet' id='demo-minicolor'  href='_switcher/miniColors/jQuery.miniColors.css' type='text/css' media='all' />

            <script type="text/javascript">
                var template = 'index.php';
            </script>
            <div id="pl_control_panel" style="display: none;">
                <div id="panel_control" class="control-open"></div>
                <div class="padd">

                    <div class="input" id="predefined_skins">
                        <h4>Color Schemes</h4>
                        <a href="#" id="skin1" data-primary_color="e74c3c" data-color="fafafa" data-pattern="noise_pattern_with_crosslines"></a>
                        <a href="#" id="skin2" data-primary_color="2ecc71" data-color="fafafa" data-pattern="bg0"></a>
                        <a href="#" id="skin3" data-primary_color="3498db" data-color="fafafa" data-pattern="bg1"></a>
                        <a href="#" id="skin4" data-primary_color="9b59b6" data-color="fafafa" data-pattern="bg2"></a>
                        <a href="#" id="skin5" data-primary_color="f39c12" data-color="fafafa" data-pattern="bg3"></a>
                        <a href="#" id="skin6" data-primary_color="d35400" data-color="fafafa" data-pattern="retina_wood"></a>
                        <a href="#" id="skin7" data-primary_color="1abc9c" data-color="fafafa" data-pattern="purty_wood"></a>
                        <div class="clear"></div>
                    </div>

                    <div class='input'>
                        <h4>Background</h4>
                        <input type='text' value='#fafafa' name='custom_bg_color' id='custom_bg_color'/>

                    </div>

                    <div class='input'>
                        <h4>Example Patterns</h4>
                        <div id='custom_bg_image' class="custom_bg_image">
                            <img src='_switcher/../images/_blank.png' data-img="bg0" alt="demo" />
                            <img src='_switcher/../images/_blank.png' data-img="bg1" alt="demo" />
                            <img src='_switcher/../images/_blank.png' data-img="bg2" alt="demo" />
                            <img src='_switcher/../images/_blank.png' data-img="bg3" alt="demo" />
                            <img src='_switcher/../images/_blank.png' data-img="retina_wood" alt="demo" />
                            <img src='_switcher/../images/_blank.png' data-img="bg4" alt="demo" />
                            <img src='_switcher/../images/_blank.png' data-img="bg5" alt="demo" />
                            <img src='_switcher/../images/_blank.png' data-img="white_brick_wall" alt="demo" />
                            <img src='_switcher/../images/_blank.png' data-img="rip_jobs" alt="demo" />
                            <img src='_switcher/../images/_blank.png' data-img="purty_wood" alt="demo" />
                            <div class="clear"></div>
                        </div>
                    </div>
                    <br />
                    <input type="button" id="reset_style" value="Reset" />

                    <!--- end -->
                </div>	
            </div>	

            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51cd9546674927d0"></script>
            <script src="_switcher/miniColors/jQuery.miniColors.min.js"></script>
            <script src="_switcher/script.js"></script>
            <div id="toTop"><a href="#">Subir</a></div>
            <script src="../js/bootstrap.min.js"></script>
            <script type='text/javascript' src='../js/tinyscrollbar.js'></script>
            <script type='text/javascript' src='../js/jQuery.easing-1.35152.js?ver=1.0'></script>
            <script type='text/javascript' src='../js/jQuery.masonry.min5152.js?ver=1.0'></script>
            <script type='text/javascript' src='../js/jQuery.imagesloaded.min5152.js?ver=1.0'></script>
            <script type='text/javascript' src='../js/jQuery.infinitescroll.min5152.js?ver=1.0'></script>
            <script type='text/javascript' src='../js/superfish5152.js?ver=1.0'></script>
            <script type='text/javascript' src='../js/mediaelement/build/mediaelement-and-player.min5152.js?ver=1.0'></script>
            <script type='text/javascript' src='../js/fancybox/jQuery.fancybox-1.3.4.pack5152.js?ver=1.0'></script>
            <script type='text/javascript' src='../js/jQuery.mobilemenu5152.js?ver=1.0'></script>
            <script type='text/javascript' src='../js/jQuery.fitvids5152.js?ver=1.0'></script>
            <script type='text/javascript' src='../js/jQuery.flexslider-min5152.js?ver=1.0'></script>
            <script type='text/javascript' src='../js/jQuery.placeholder.min5152.js?ver=1.0'></script>
            <script type='text/javascript' src='../js/jflickrfeed.min5152.js?ver=1.0'></script>

    </body>
    <script type="text/javascript">
        $j(document).ready(function() {
            var menu = true, $height;
            $height = parseInt($j(".title_share:first-child")[0].firstChild.nextSibling.offsetHeight) + 5;
            $j(".title_share").css("height", $height + "px");
            //            $j(".selec_img_hover").on("mouseenter",function(){
//                $j(this).fadeOut(0);
//               $j(this).attr("src","../images/foto_pro_marcas_hover.png"); 
//               $j(this).fadeIn(5);
//            }).on("mouseleave",function(){
//               $j(this).attr("src","../images/foto_pro_marcas.png"); 
//            });
            var oScroll6 = $j('.scrollbar1');
            oScroll6.tinyscrollbar();

//add a click event to a button
            $j('#scrollbar6-anchor').click(function() {
                oScroll6.tinyscrollbar_update(50);
                return false;
            });
            $j(".footer-menu").click(function() {
                $j('.footer-trog').animate({
                    height: 'toggle',
                    opacity: 'toggle'
                }, 900);
                if (menu) {
                    menu = false;
                    $j(".footer-menu span b").text("Mostrar Menu");
                    $j(".footer-menu img").attr("src", "../images/flecha_arriba.png");
                } else {
                    $j('html, body').animate({
                        scrollTop: $j(document).height()
                    },
                    1500);
                    menu = true;
                    $j(".footer-menu span b").text("Ocultar Menu");
                    $j(".footer-menu img").attr("src", "../images/flecha_abajo.png");
                }
            });
        });
    </script>
</html>