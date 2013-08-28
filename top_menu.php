<?php
include 'class/Connection.class.php';
include 'class/Fuctions.php';
?>
<meta charset="UTF-8" />
<link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
<link rel='stylesheet'  href='css/mystyles.css' type='text/css' media='all' />
<link rel='stylesheet' id='reset-css'  href='css/reset9d52.css?ver=3.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='responsive'  href='css/responsive.css' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome.min-css'  href='css/font-awesome.min9d52.css?ver=3.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='flexslider-css'  href='css/flexslider9d52.css?ver=3.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='superfish-css'  href='css/superfish9d52.css?ver=3.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='style9d52.css?ver=3.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='skin'  href='css/skin3.css' type='text/css' media='all' />
<div class="top_wrapper">
    <div id="header">
        <div class="container">
            <div class="row">
                <div style="text-align: right; margin-right: 3%; color: #FFF; font-weight: bold; font-size: 10px;">
                    <span style="margin-left: 15px; margin-right: 15px;"><a href="../Contactenos.php">Contáctenos</a></span> <span>|</span> <span style="margin-left: 15px; margin-right: 12px;">Siguenos</span> <img class="movirs" src="../images/facebook.png">
                    <img class="movirs" src="../images/flickr.png">
                </div>
                <div class="twelve columns">
                    <div class="header_left">
                        <h1 id="logo"><a href="../index.php" title=""><img src="../images/logo_skin3.png" alt="" id="header_logo" style="width: 270px"/></a></h1>


                    </div>

                    <div class="header_right">
                        <div id="top_menu" class="menu-navigation-container"><ul id="mainmenu" class="sf-menu">
                                <!--<li id="menu-item-861"  class="current-menu-item"><a href="../index.php">Homepage</a></li>-->
                                <li id="menu-item-1126"  ><a href="conocenos/conocenos.php"><?php echo mo_get_data(1, 2); ?></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="conocenos/mensaje_del_gerente.php"><?php echo mo_get_data(1, 3); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="conocenos/mision_y_vision.php"><?php echo mo_get_data(1, 4); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="Conocenos/Valores.php"><?php echo mo_get_data(1, 5); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="conocenos/equipo_de_trabajo.php"><?php echo mo_get_data(1, 6); ?></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-1126"  ><a href="que_hacemos/que_hacemos.php"><?php echo mo_get_data(1, 7); ?></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 205px"><a href="que_hacemos/unidad_gruas_y_proyectos.php"><?php echo mo_get_data(1, 8); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 205px"><a href="que_hacemos/unidad_fajas_transportadoras.php"><?php echo mo_get_data(1, 9); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 205px"><a href="que_hacemos/unidad_servicio_tecnico.php"><?php echo mo_get_data(1, 11); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 205px"><a href="que_hacemos/unidad_comercial.php"><?php echo mo_get_data(1, 12); ?></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-1126"  ><a href="productos/productos.php"><?php echo mo_get_data(1, 25); ?></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="productos/productos.php?filtro=categorias"><?php echo mo_get_data(1, 26); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="productos/productos.php?filtro=marcas"><?php echo mo_get_data(1, 27); ?></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-1126"  ><a href="SIG/sig.php"><?php echo mo_get_data(1, 13); ?></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="SIG/politica.php"><?php echo mo_get_data(1, 14); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="SIG/garantia.php"><?php echo mo_get_data(1, 15); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="SIG/reclamos.php"><?php echo mo_get_data(1, 16); ?></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-1126"  ><a href="../trabaje_con_nosotros/trabaje_con_nosotros.php"><?php echo mo_get_data(1, 17); ?></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="trabaje_con_nosotros/porque_movitecnica.php"><?php echo mo_get_data(1, 18); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="trabaje_con_nosotros/testimonios.php"><?php echo mo_get_data(1, 21); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="trabaje_con_nosotros/oferta_de_trabajo.php"><?php echo mo_get_data(1, 19); ?></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-1126"  ><a href="media/media.php"><?php echo mo_get_data(1, 28); ?></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="media/media.php?media=noticia"><?php echo mo_get_data(1, 29); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="media/media.php?media=nota"><?php echo mo_get_data(1, 30); ?></a></li>
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
</div>



<div class='footer-trog'>
    <section>
        <article style="width: 170px;">
            <span style="font-size: 16px;"><b><a href="conocenos/conocenos.php"><?php echo mo_get_data(1, 2); ?></a></b></span><br/>
            <span>
                <a href="conocenos/mensaje_del_gerente.php"><?php echo mo_get_data(1, 3); ?></a><br />
                <a href="conocenos/mision_y_vision.php"><?php echo mo_get_data(1, 4); ?></a><br />
                <a href="conocenos/valores.php"><?php echo mo_get_data(1, 5); ?></a><br />
                <a href="conocenos/equipo_de_trabajo.php"><?php echo mo_get_data(1, 6); ?></a><br />
            </span>
        </article>
        <article style="width: 235px">
            <span style="font-size: 16px;"><b><a href="que_hacemos/que_hacemos.php"><?php echo mo_get_data(1, 7); ?></a></b></span><br/>
            <span>
                <a href="que_hacemos/unidad_gruas_y_proyectos.php"><?php echo mo_get_data(1, 8); ?></a><br/>
                <a href="que_hacemos/unidad_fajas_transportadoras.php"><?php echo mo_get_data(1, 9); ?></a><br/>
                <a href="que_hacemos/unidad_servicio_tecnico.php"><?php echo mo_get_data(1, 11); ?></a><br/>
                <a href="que_hacemos/unidad_comercial.php"><?php echo mo_get_data(1, 12); ?></a><br/>
            </span>
        </article>
        <article style="width: 120px">
            <span style="font-size: 16px;"><b><a href="productos/productos.php"><?php echo mo_get_data(1, 25); ?></a></b></span><br/>
            <span>
                <a href="productos/productos.php?filtro=categorias"><?php echo mo_get_data(1, 26); ?></a><br/>
                <a href="productos/productos.php?filtro=marcas"><?php echo mo_get_data(1, 27); ?></a><br/>
            </span>
        </article>
        <article style="width: 120px">
            <span style="font-size: 16px;"><b><a href="SIG/sig.php"><?php echo mo_get_data(1, 13); ?></a></b></span><br/>
            <span>
                <a href="SIG/politica.php"><?php echo mo_get_data(1, 14); ?></a><br/>
                <a href="SIG/garantia.php"><?php echo mo_get_data(1, 15); ?></a><br/>
                <a href="SIG/reclamos.php"><?php echo mo_get_data(1, 16); ?></a><br/>
            </span>
        </article>
        <article style="width: 210px">
            <span style="font-size: 16px;"><b><a href="trabaje_con_nosotros/trabaje_con_nosotros.php"><?php echo mo_get_data(1, 17); ?></a></b></span><br/>
            <span>
                <a href="trabaje_con_nosotros/porque_movitecnica.php"><?php echo mo_get_data(1, 18); ?></a><br/>
                <a href="trabaje_con_nosotros/testimonios.php"><?php echo mo_get_data(1, 21); ?></a><br/>
                <a href="trabaje_con_nosotros/oferta_de_trabajo.php"><?php echo mo_get_data(1, 19); ?></a><br/>
            </span>
        </article>
        <article style="width: 140px">
            <span style="font-size: 16px;"><b><a href="media/media.php"><?php echo mo_get_data(1, 28); ?></a></b></span><br/>
            <span>
                <a href="media/media.php"><?php echo mo_get_data(1, 29); ?></a><br/>
                <a href="media/media.php"><?php echo mo_get_data(1, 30); ?></a><br/>
            </span>
        </article>

    </section>
    <section style='margin-top: 15px;'>
        <div class="footer-op">
            <span><img src="images/sitemap.png">Sitemap</span>
            <span><a href="contactenos.php"><img src="images/contactenos.png"><?php echo mo_get_data(1, 31); ?></a></span>
            <span><a href="index.php"><img src="images/home.png"><?php echo mo_get_data(1, 1); ?></a></span>
        </div>
    </section>
</div>

