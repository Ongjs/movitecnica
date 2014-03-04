<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Movitécnica</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

        <link rel="shortcut icon" href="../images/favicon_movi.ico">

        <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
        <link rel='stylesheet'  href='../css/mystyles.css' type='text/css' media='all' />
        <link rel='stylesheet' id='reset-css'  href='../css/reset9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='responsive'  href='../css/responsive.css' type='text/css' media='all' />
        <link rel='stylesheet' id='font-awesome.min-css'  href='../css/font-awesome.min9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='flexslider-css'  href='../css/flexslider9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='superfish-css'  href='../css/superfish9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='mediaelement-css'  href='../js/mediaelement/build/mediaelementplayer.min9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='style-css'  href='../style9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='fancybox-css'  href='../js/fancybox/jquery.fancybox-1.3.49d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='skin'  href='../css/skin3.css' type='text/css' media='all' />
        <script type='text/javascript' src='../js/jquery.js'></script>
        <script type='text/javascript' src='../js/custom.js'></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
    <body>  <?php  include '../class/Connection.class.php'; include '../class/Fuctions.php'; ?>
        <div class="top_wrapper">
            <div id="header">
                <div class="container">
                    <div class="row">
                        <div style="text-align: right; margin-right: 3%; color: #FFF; font-weight: bold; font-size: 10px;">
                            <span style="margin-left: 15px; margin-right: 15px;"><a href="../contactenos.php"><?php echo mo_get_data(1, 31); ?></a></span> <span>|</span> <span style="margin-left: 15px; margin-right: 12px;">Síguenos</span> <img class="movirs" src="../images/facebook.png">
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
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../conocenos/valores.php"><?php echo mo_get_data(1, 5); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../conocenos/equipo_de_trabajo.php"><?php echo mo_get_data(1, 6); ?></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-1126"  ><a href="../que_hacemos/que_hacemos.php"><?php echo mo_get_data(1, 7); ?></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 237px"><a href="../que_hacemos/unidad_gruas_y_proyectos.php"><?php echo mo_get_data(1, 8); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 237px"><a href="../que_hacemos/unidad_fajas_transportadoras.php"><?php echo mo_get_data(1, 9); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 237px"><a href="../que_hacemos/unidad_servicio_tecnico.php"><?php echo mo_get_data(1, 11); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 237px"><a href="../que_hacemos/unidad_comercial.php"><?php echo mo_get_data(1, 12); ?></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-1126"  ><a href="../productos/productos.php"><?php echo mo_get_data(1, 25); ?></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../productos/productos.php?filtro=categorias">Por <?php echo mo_get_data(1, 26); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../productos/productos.php?filtro=marcas">Por <?php echo mo_get_data(1, 27); ?></a></li>
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
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../media/media.php?media=noticias"><?php echo mo_get_data(1, 29); ?></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../media/media.php?media=identidad-de-marca"><?php echo mo_get_data(1, 30); ?></a></li>
                                    </ul>
                                </li>
                                <!--<li id="menu-item-1125" ><a href="single-ele.html">HTML Elements</a></li>-->
                                <!--<li id="menu-item-1114" ><a href="single-full-widgets.html">Sidebars</a></li>-->

                            </ul>

                            <div class="header_search"> 
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
            <div id="post_grids" class="row" style=" margin-top: -20px; max-width: none;">
                <div style="margin-left: 20px;">
                <div style="margin-left: 15px; margin-bottom: -5px"> <a href="../index.php"><?php echo mo_get_data(1, 1); ?></a> > <a href="trabaje_con_nosotros.php"><?php echo mo_get_data(1, 17); ?> </a> > <?php echo mo_get_data(1, 21); ?> </div>
                <br />
                <br />
                <h1 style="margin-left: 8px;"><b><?php echo mo_get_data(1, 21); ?></b></h1>
                <div style="display: inline-block;" class="uni_response">
                    <div style="width: 98%; height: auto;">
                        <?php echo mo_get_data(3, 21); ?>
                        <br />
                        <?php
                            $pag = isset($_REQUEST['pag']) ? $_REQUEST['pag'] : '1';
                            $ele = mo_get_ar(4, $pag);
                            $pagination = mo_get_pag(4, $pag);
                            $fin = $pagination[0];
                            $cont = 1;
                            foreach ($ele as $el){
                            ?>
                        <div class="testimoneo">
                            <div class="image_test"><a href="testimonio.php?cod=<?php echo $el[0]; ?>"><img src="../userfiles/<?php echo $el[2]; ?>"></a><br /><div class="test_nomb"><h4 style="margin-bottom: 0px; margin-top: 10px;"><a href="testimonio.php?cod=<?php echo $el[0]; ?>"><?php echo $el[1]; ?></a></h4><?php echo $el[6]; ?></div><div class="logo_test"><img src="../images/test_logo.png"></div></div>
                            <div class="text_test oculto"><div style="height: 195px"><?php echo $el[4]; ?><h5><?php echo $el[1]; ?></h5></div><br /><a href="testimonio.php?cod=<?php echo $el[0]; ?>" class="ir_test">Leer el Testimoneo ></a></div>
                        </div>
                        <?php
                        if($cont%3 == 0){
                            echo "<br /><br />";
                        }
                        $cont++;
                            }
                        ?>
                        <ul class="pagination">
                                <?php
                                if($pag > 1){
                                ?>
                                <li><a href="?pag=<?php echo $pag-1; ?>">&laquo;</a></li>
                                <?php
                                }
                                $ini = (($pag - 2) < 1) ? 1 : ($pag - 2);
                                for($x = $ini; $x<= $fin ; $x++){
                                    if($pag == $x){
                                        ?>
                                        <li style="font-weight: bold;"><?php echo $x; ?></li>
                                        <?php 
                                    }else{
                                ?>
                                        <li><a href="?pag=<?php echo $x; ?>"><?php echo $x; ?></a></li>
                                <?php
                                    }
                                }
                                if($pag < $fin){
                                ?>
                                <li><a href="?pag=<?php echo $pag+1; ?>">&raquo;</a></li>
                                <?php
                                }
                                ?>
                            </ul><br /><br />
                    </div>
                </div>
                <div id="post_p" style="width: 320px; display: inline-block; margin-left: 20px; margin-top: 10px; vertical-align: top;">
                    <div class="widget tab_wrapper white_box" id="tab_wrapper_tab_widget-2">
                        <div class="clear"></div>
                        <div class="tabs_container">
                            <div id="post_tab" class="tab_content recent_posts">
                                <ul>
                                    <li> 
                                        <div style="border-top: 1px solid #D7D7D7; padding-top: 10px;">
                                        <div style="width: 100%; margin-bottom: 10px;"> <h3 style="display: inline-block; vertical-align: top; margin-top: 10px;"> <b><a href="../contactenos.php"><?php echo mo_get_data(1, 31); ?></a></b> </h3><div style="display: inline-block; margin-left: 8px;"><img src="../images/logo_solo.png" style="width: 38px"></div></div>
                                        <span>Póngase en contacto con nuestros expertos y saber cómo podemos ayudarle a usted y a su empresa con su proyecto.</span>
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

            </div>
            <footer class="footer">
                    <br />
                    <section>
                        <span class="footer-menu"> <span style="font-size: 17px"><b>Ocultar Menú</b></span> <img src="../images/flecha_abajo.png" style="margin-bottom: -2px;"></span>
                    </section>
                    <div class='footer-trog'>
                        <section>
                            <article style="width: 160px;">
                                <span style="font-size: 16px;"><b><a href="../conocenos/conocenos.php"><?php echo mo_get_data(1, 2); ?></a></b></span><br/>
                                <span>
                                    <a href="../conocenos/mensaje_del_gerente.php"><?php echo mo_get_data(1, 3); ?></a><br />
                                    <a href="../conocenos/mision_y_vision.php"><?php echo mo_get_data(1, 4); ?></a><br />
                                    <a href="../conocenos/valores.php"><?php echo mo_get_data(1, 5); ?></a><br />
                                    <a href="../conocenos/equipo_de_trabajo.php"><?php echo mo_get_data(1, 6); ?></a><br />
                                </span>
                            </article>
                            <article style="width: 225px">
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
                                    <a href="../productos/productos.php?filtro=categorias">Por <?php echo mo_get_data(1, 26); ?></a><br/>
                                    <a href="../productos/productos.php?filtro=marcas">Por <?php echo mo_get_data(1, 27); ?></a><br/>
                                </span>
                            </article>
                            <article style="width: 150px">
                                <span style="font-size: 16px;"><b><a href="../SIG/sig.php"><?php echo mo_get_data(1, 13); ?></a></b></span><br/>
                                <span>
                                    <a href="../SIG/politica.php"><?php echo mo_get_data(1, 14); ?></a><br/>
                                    <a href="../SIG/garantia.php"><?php echo mo_get_data(1, 15); ?></a><br/>
                                    <a href="../SIG/reclamos.php"><?php echo mo_get_data(1, 16); ?></a><br/>
                                </span>
                            </article>
                            <article style="width: 200px">
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
                                    <a href="../media/media.php?media=noticias"><?php echo mo_get_data(1, 29); ?></a><br/>
                                    <a href="../media/media.php?media=identidad-de-marca"><?php echo mo_get_data(1, 30); ?></a><br/>
                                </span>
                            </article>

                        </section>
                        <section style='margin-top: 15px;'>
                            <div class="footer-op">
                                <span><img src="../images/sitemap.png"><a href="../sitemap.php">Sitemap</a></span>
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
    <link rel='stylesheet' id='demo-minicolor'  href='_switcher/miniColors/jquery.miniColors.css' type='text/css' media='all' />

    <script type="text/javascript">
        var template = '../index.php';
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

    <script src="_switcher/miniColors/jquery.miniColors.min.js"></script>
    <script src="_switcher/script.js"></script>

    <div id="toTop"><a href="#">Subir</a></div>
    <script type='text/javascript' src='../js/jquery.easing-1.35152.js?ver=1.0'></script>
    <script type='text/javascript' src='../js/jquery.masonry.min5152.js?ver=1.0'></script>
    <script type='text/javascript' src='../js/jquery.imagesloaded.min5152.js?ver=1.0'></script>
    <script type='text/javascript' src='../js/jquery.infinitescroll.min5152.js?ver=1.0'></script>
    <script type='text/javascript' src='../js/superfish5152.js?ver=1.0'></script>
    <script type='text/javascript' src='../js/mediaelement/build/mediaelement-and-player.min5152.js?ver=1.0'></script>
    <script type='text/javascript' src='../js/fancybox/jquery.fancybox-1.3.4.pack5152.js?ver=1.0'></script>
    <script type='text/javascript' src='../js/jquery.mobilemenu5152.js?ver=1.0'></script>
    <script type='text/javascript' src='../js/jquery.fitvids5152.js?ver=1.0'></script>
    <script type='text/javascript' src='../js/jquery.flexslider-min5152.js?ver=1.0'></script>
    <script type='text/javascript' src='../js/jquery.placeholder.min5152.js?ver=1.0'></script>
    <script type='text/javascript' src='../js/jflickrfeed.min5152.js?ver=1.0'></script>

</body>
<script type="text/javascript">
    $j(document).ready(function() {

//                        menu
        $j("#skin3").trigger("click");
        var menu = true;
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
        var testi_content;
        $j(".testimoneo").mouseenter(function(){
            $j(this).css("background-color","#F3F3F3");
           $j(".text_test",$j(this)).removeClass("oculto");
           $j(".image_test",$j(this)).addClass("oculto");
        }).mouseleave(function(){
            $j(this).css("background-color","#FFF");
            $j(".text_test",$j(this)).addClass("oculto");
           $j(".image_test",$j(this)).removeClass("oculto");
        });
    });
</script>
</html>
