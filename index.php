
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Movitécnica</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

        <link rel="shortcut icon" href="images/favicon_movi.ico">

        <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
        <link rel='stylesheet'  href='css/mystyles.css' type='text/css' media='all' />
        <link rel='stylesheet' id='reset-css'  href='css/reset9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='responsive'  href='css/responsive.css' type='text/css' media='all' />
        <link rel='stylesheet' id='font-awesome.min-css'  href='css/font-awesome.min9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='flexslider-css'  href='css/flexslider9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='superfish-css'  href='css/superfish9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='mediaelement-css'  href='js/mediaelement/build/mediaelementplayer.min9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='style-css'  href='style9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='fancybox-css'  href='js/fancybox/jQuery.fancybox-1.3.49d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='skin'  href='css/skin1.css' type='text/css' media='all' />

        <script type='text/javascript' src='js/jQuery.js'></script>
        <script type='text/javascript' src='js/custom.js'></script>
        <style>
            h1{
                letter-spacing: -2px;
            }
        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
    <body> <?php include 'class/Connection.class.php';
include 'class/Fuctions.php'; ?>
        <div class="top_wrapper">
            <div id="header">
                <div class="container">
                    <div class="row">
                        <div style="text-align: right; margin-right: 3%; color: #FFF; font-weight: bold; font-size: 10px;">
                            <span style="margin-left: 15px; margin-right: 15px;"><a href="Contactenos.php">Contáctenos</a></span> <span>|</span> <span style="margin-left: 15px; margin-right: 12px;">Siguenos</span> <img class="movirs" src="images/facebook.png">
                            <img class="movirs" src="images/flickr.png">
                        </div>
                        <div class="twelve columns">
                            <div class="header_left">
                                <h1 id="logo"><a href="index.php" title=""><img src="images/logo_skin3.png" alt="" id="header_logo" style="width: 270px"/></a></h1>


                            </div>

                            <div class="header_right" style="text-align: left">
                                <div id="top_menu" class="menu-navigation-container"><ul id="mainmenu" class="sf-menu">
                                        <!--<li id="menu-item-861"  class="current-menu-item"><a href="../index.php">Homepage</a></li>-->
                                        <li id="menu-item-1126"  ><a href="conocenos/conocenos.php"><?php echo mo_get_data(1, 2); ?></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="conocenos/mensaje_del_gerente.php"><?php echo mo_get_data(1, 3); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="conocenos/valores.php"><?php echo mo_get_data(1, 4); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="Conocenos/Valores.php"><?php echo mo_get_data(1, 5); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="conocenos/equipo_de_trabajo.php"><?php echo mo_get_data(1, 20); ?></a></li>
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
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="productos/productos.php"><?php echo mo_get_data(1, 26); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="productos/productos.php"><?php echo mo_get_data(1, 27); ?></a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1126"  ><a href="SIG/sig.php"><?php echo mo_get_data(1, 13); ?></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="SIG/politica.php"><?php echo mo_get_data(1, 14); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="SIG/garantia.php"><?php echo mo_get_data(1, 15); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="SIG/reclamos.php"><?php echo mo_get_data(1, 16); ?></a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1126"  ><a href="Trabaje_Con_Nosotros.php"><?php echo mo_get_data(1, 17); ?></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="trabaje_con_nosotros/porque_movitecnica.php"><?php echo mo_get_data(1, 18); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="trabaje_con_nosotros/Testimonios.php"><?php echo mo_get_data(1, 21); ?></a></li>
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

            <div class="slider" style="overflow:hidden;">
                <div id="homeslider" class="fullwidth flexslider">
                    <ul class="slides" style="width: 100%; background-repeat: no-repeat; background: fixed;">

                        <li data-height="500" style="position:relative; background: url(images/_slider/1.jpg) 50% 0;" >
                            <div class="caption_wrapper" >
                                <div class="caption">
                                    <h1><a href="conocenos/conocenos.php" style="color: #FFF">30 AÑOS DE EXPERIENCIA</a></h1>
                                    <span style="display: block; color: #FFF">Nuestras mayores fortalezas son nuestro personal altamente calificado y el respaldo de nuestros proveedores... </span>
                                    <a class="button normal small" href="conocenos/conocenos.php" style="float: right; margin-top: 7px;">Ver más</a>
                                </div>
                            </div>
                        </li>

                        <li data-height="500" style="position:relative; background: url(images/_slider/2.jpg) 50% 0">
                            <div class="caption_wrapper">
                                <div class="caption">
                                    <h1><a href="productos/productos.php?filt=marcas">LAS MEJORES MARCAS REPRESENTADAS</a></h1>
                                    <span style="display: block">Representamos a marcas de prestigio mundial como: <br />  YALE, STREET, DUNLOP, CONDUCTIX, ASGCO, CIMBRIA, MOVITECH, VETTER... </span>
                                    <a class="button normal small" href="productos/productos.php?filt=marcas" style="float: right; margin-top: 7px;">Ver más</a>
                                </div>
                            </div>
                        </li>

                        <li data-height="500" style="position:relative; background: url(images/_slider/3.jpg) 50% 0">
                            <div class="caption_wrapper">
                                <div class="caption">
                                    <h1><a href="conocenos/valores.php">LA PASIÓN ES NUESTRO PRINCIPAL MOTOR</a></h1>
                                    <span style="display: block">Es nuestro entusiasmo y la satisfacción por la tarea Que se realiza Que nos impulsa a desarrollar nuestro máximo potencial... </span>
                                    <a class="button normal small" href="conocenos/valores.php" style="float: right; margin-top: 7px;">Ver más</a>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
                <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $('#tab_wrapper_tab_widget-2').each(function() {
                            $(this).find(".tab_content").hide();
                            $(this).find("ul.tab_menu li:first").addClass("active").show();
                            $(this).find(".tab_content:first").show();
                        });

                        $("ul.tab_menu li").click(function(e) {
                            $(this).parents('#tab_wrapper_tab_widget-2').find("ul.tab_menu li").removeClass("active");
                            $(this).addClass("active");
                            $(this).parents('#tab_wrapper_tab_widget-2').find(".tab_content").hide();

                            var activeTab = $(this).find("a").attr("href");
                            $(this).parents('#tab_wrapper_tab_widget-2').find(activeTab).fadeIn();

                            e.preventDefault();
                        });

                        $("ul.tab_menu li a").click(function(e) {
                            e.preventDefault();
                        })
                    });
                </script>
                <script type="text/javascript">
                    $j(document).ready(function() {

                        $j("#skin3").trigger("click");
                        var menu = true;
                        $j(".footer-menu").click(function() {
                            $j('.footer-trog').stop().animate({
                                height: 'toggle',
                                opacity: 'toggle'
                            }, 900);
                            if (menu) {

                                menu = false;
                                $j(".footer-menu span b").text("Mostrar Menú");
                                $j(".footer-menu img").attr("src", "images/flecha_arriba.png");
                            } else {
                                $j('html, body').animate({
                                    scrollTop: $j(document).height()
                                },
                                1500);
                                menu = true;
                                $j(".footer-menu span b").text("Ocultar Menú");
                                $j(".footer-menu img").attr("src", "images/flecha_abajo.png");
                            }
                        });

                        $j('.flexslider').flexslider({
                            autoPlay: true,
                            pauseOnAction: false,
                            animation: "fade",
                            start: function(slider) {
                                $j('.caption_wrapper').animate({"bottom": '28%', 'opacity': 1}, 500);
                            },
                            before: function(slider) {
                                $j('.caption_wrapper').animate({"bottom": '0px', 'opacity': 0}, 500);
                            },
                            after: function(slider) {
                                $j('.caption_wrapper').animate({"bottom": '28%', 'opacity': 1}, 500);
                            }
                        });

                        set_slider_height();
                        $j(window).resize(function() {
                            set_slider_height();
                        });

                        function set_slider_height() {
                            var default_height = parseInt($j('#homeslider ul.slides').find('li').attr('data-height'));
                            var new_height;

                            if ($j(window).width() < 1030) {
                                new_height = (default_height * $j(window).width()) / 1030;
                            } else {
                                new_height = default_height;
                            }
                            $j('#homeslider ul.slides').find('li').height(new_height);
                        }

                    });
                </script>

            </div>



        </div> <!--.top_wrapper -->	

        <div class="container">	
            <div id="post_grids" class="row">
                <div style="width: 640px" class="uni_response">
                    <div class="six columns post_col masonry-brick">

                        <div class="post-973 post type-post status-publish format-standard hentry category-uncategorized post_item white_box">

                            <div class="large_thumb thumb_hover">

                                <a href="que_hacemos/unidad_gruas_y_proyectos.php" class="thumb_icon gruas"><span></span></a>

                                <div class="mask post_top_element"></div> 
                                <div class="img_wrapper"><a href="que_hacemos/unidad_gruas_y_proyectos.php" rel="bookmark" title="This is a image"><img src="images/uni1.jpg" width="710" height="454" alt="This is a image" class="post_top_element thumb" /></a></div>

                            </div>
                            <h3 class="post_item_title"><a href="que_hacemos/unidad_gruas_y_proyectos.php" rel="bookmark" title="This is a image"><?php echo mo_get_data(1, 8); ?></a></h3>

                        </div>

                    </div><!-- // post col -->

                    <div class="six columns post_col masonry-brick">

                        <div class="post-973 post type-post status-publish format-standard hentry category-uncategorized post_item white_box">

                            <div class="large_thumb thumb_hover">

                                <a href="que_hacemos/unidad_fajas_transportadoras.php" class="thumb_icon  fajas"><span></span></a>

                                <div class="mask post_top_element"></div> 
                                <div class="img_wrapper"><a href="que_hacemos/unidad_fajas_transportadoras.php" rel="bookmark" title="This is a image"><img src="images/uni2.jpg" width="710" height="454" alt="This is a image" class="post_top_element thumb" /></a></div>
                            </div>
                            <h3 class="post_item_title"><a href="que_hacemos/unidad_fajas_transportadoras.php" rel="bookmark" title="This is a image"><?php echo mo_get_data(1, 9); ?></a></h3>

                        </div>

                    </div><!-- // post col -->

                    <div class="six columns post_col masonry-brick">

                        <div class="post-973 post type-post status-publish format-standard hentry category-uncategorized post_item white_box">

                            <div class="large_thumb thumb_hover">

                                <a href="que_hacemos/unidad_servicio_tecnico.php" class="thumb_icon servicio"><span></span></a>

                                <div class="mask post_top_element"></div> 
                                <div class="img_wrapper"><a href="que_hacemos/unidad_servicio_tecnico.php" rel="bookmark" title="This is a image"><img src="images/uni3.jpg" width="710" height="454" alt="This is a image" class="post_top_element thumb" /></a></div>

                            </div>


                            <h3 class="post_item_title"><a href="que_hacemos/unidad_servicio_tecnico.php" rel="bookmark" title="This is a image"><br /><?php echo mo_get_data(1, 11); ?> </a></h3>

                        </div>

                    </div><!-- // post col -->

                    <div class="six columns post_col masonry-brick">

                        <div class="post-973 post type-post status-publish format-standard hentry category-uncategorized post_item white_box">

                            <div class="large_thumb thumb_hover">

                                <a href="que_hacemos/unidad_comercial.php" class="thumb_icon comercial"><span></span></a>

                                <div class="mask post_top_element"></div> 
                                <div class="img_wrapper"><a href="que_hacemos/unidad_comercial.php" rel="bookmark" title="This is a image"><img src="images/uni4.jpg" width="710" height="454" alt="This is a image" class="post_top_element thumb" /></a></div>

                            </div>


                            <h3 class="post_item_title"><a href="que_hacemos/unidad_comercial.php" rel="bookmark" title="This is a image"><br /><?php echo mo_get_data(1, 12); ?></a></h3>

                        </div>

                    </div><!-- // post col -->
                    <!--<div class="clear"></div>-->	
                </div>
                <div id="post_p">
                    <div class="widget tab_wrapper white_box" id="tab_wrapper_tab_widget-2">

                        <ul class="tab_menu" style="line-height: 22px;">
                            <li class="tab_post"><a href="#post_tab1"> Últimos <br /> Proyectos</a></li>
                            <li  class="tab_comment"><a href="#post_tab2"><br />Noticias </a></li>
                            <li class="tab_tag"><a href="#post_tab3">Trabaje con <br /> Nosotros</a></li>
                        </ul>
                        <div class="clear"></div>
                        <div class="tabs_container">
                            <div id="post_tab1" class="tab_content recent_posts">
                                <ul>
                                    <?php
                                    foreach (mo_get_proy(2) as $array) {
                                        ?>
                                        <li> <a href="que_hacemos/ultimos_proyectos.php?cod=<?php echo $array[0]; ?>" title="Praesent Et Urna Turpis Sadips" class="small_thumb"><img src="userfiles/<?php echo $array[3]; ?>" width="100" height="100" alt="Praesent Et Urna Turpis Sadips"></a>
                                            <a href="que_hacemos/ultimos_proyectos.php?cod=<?php echo $array[0]; ?>" title="Praesent Et Urna Turpis Sadips" class="title"><?php echo $array[1]; ?></a>
                                            <?php echo $array[2] ?>
                                            <div class="clear"></div>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div id="post_tab2" class="tab_content recent_posts">
                                <ul>
                                    <?php
                                    foreach (mo_get_proy(5) as $array) {
                                        ?>
                                        <li> <a href="media/noticia.php?cod=<?php echo $array[0]; ?>" title="Praesent Et Urna Turpis Sadips" class="small_thumb"><img src="userfiles/<?php echo $array[3]; ?>" width="100" height="100" alt="Praesent Et Urna Turpis Sadips"></a>
                                            <a href="media/noticia.php?cod=<?php echo $array[0]; ?>" title="Praesent Et Urna Turpis Sadips" class="title"><?php echo $array[1]; ?></a>
                                            <?php echo $array[2] ?>
                                            <div class="clear"></div>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div id="post_tab3" class="tab_content recent_posts">
                                <ul>
                                    <li> <a href="" title="Praesent Et Urna Turpis Sadips" class="small_thumb"><img src="images/icono.png" width="100" height="100" alt="Praesent Et Urna Turpis Sadips"></a><a href="" title="Praesent Et Urna Turpis Sadips" class="title">Praesent Et Urna Turpis Sadips</a>QuisQue ligulas ipsum, euismod atras vulputate iltricies etri<div class="clear"></div></li>
                                </ul>
                            </div>  

                        </div>

                    </div>	
                </div>
                <br />
                <br />
                <br />
                <footer class="footer">
                    <br />
                    <section>
                        <span class="footer-menu"> <span style="font-size: 17px"><b>Ocultar Menú</b></span> <img src="images/flecha_abajo.png" style="margin-bottom: -2px;"></span>
                    </section>
                    <div class='footer-trog'>
                        <section>
                            <article style="width: 170px;">
                                <span style="font-size: 16px;"><b><a href="conocenos/conocenos.php"><?php echo mo_get_data(1, 2); ?></a></b></span><br/>
                                <span>
                                    <a href="conocenos/mensaje_del_gerente.php"><?php echo mo_get_data(1, 3); ?></a><br />
                                    <a href="conocenos/mision_y_vision.php"><?php echo mo_get_data(1, 4); ?></a><br />
                                    <a href="conocenos/valores.php"><?php echo mo_get_data(1, 5); ?></a><br />
                                    <a href="conocenos/equipo_de_trabajo.php"><?php echo mo_get_data(1, 20); ?></a><br />
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
                                    <a href="productos/productos.php"><?php echo mo_get_data(1, 26); ?></a><br/>
                                    <a href="productos/productos.php"><?php echo mo_get_data(1, 27); ?></a><br/>
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
                </footer>
            </div>
            <br />
            <div style="display:none">
                <div id="inline1">
                    <iframe src="http://player.vimeo.com/video/52560308" width="800" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>
            </div>


            <script>
                $j(document).ready(function() {
                    var $container = $j('#post_grids');

                    $container.imagesLoaded(function() {
                        $container.masonry({
                            itemSelector: '.post_col'
                        });
                    });

                    $j('#post_grids').masonry({
                        itemSelector: '.post_col',
                        gutterWidth: 0,
                        // set columnWidth a fraction of the container width
                        columnWidth: function(containerWidth) {
                            return containerWidth / 2;
                        }
                    });

                    $container.infinitescroll({
                        navSelector: '#page-nav', // selector for the paged navigation 
                        nextSelector: '#page-nav a', // selector for the NEXT link (to page 2)
                        itemSelector: '.post_col', // selector for all items you'll retrieve
                        loading: {
                            msgText: 'Loading new posts...',
                            finishedMsg: 'No more pages to load.',
                            img: 'http://i.imgur.com/6RMhx.gif'
                        }
                    })
                    ,
                });
            </script>


            <!-- infinite scroll -->
            <div class="load_more">	
                <nav id="page-nav">
                    <a href="index1.html"></a>	</nav>
            </div>
            <!-- end infinite scroll -->
        </div>
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="twelve columns wrapper">
                        <div class="ft_left"><img src="images/logo_solo.png" width="30"><div style="margin-top: 8px; display: inline-block; vertical-align: top; margin-left: 5px;">Copyright © Movitécnica 2013. Todos los derechos reservados</div></div>
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
                        <img src='_switcher/images/_blank.png' data-img="bg0" alt="demo" />
                        <img src='_switcher/images/_blank.png' data-img="bg1" alt="demo" />
                        <img src='_switcher/images/_blank.png' data-img="bg2" alt="demo" />
                        <img src='_switcher/images/_blank.png' data-img="bg3" alt="demo" />
                        <img src='_switcher/images/_blank.png' data-img="retina_wood" alt="demo" />
                        <img src='_switcher/images/_blank.png' data-img="bg4" alt="demo" />
                        <img src='_switcher/images/_blank.png' data-img="bg5" alt="demo" />
                        <img src='_switcher/images/_blank.png' data-img="white_brick_wall" alt="demo" />
                        <img src='_switcher/images/_blank.png' data-img="rip_jobs" alt="demo" />
                        <img src='_switcher/images/_blank.png' data-img="purty_wood" alt="demo" />
                        <div class="clear"></div>
                    </div>
                </div>
                <br />
                <input type="button" id="reset_style" value="Reset" />

                <!--- end -->
            </div>	
        </div>	

        <script src="_switcher/miniColors/jQuery.miniColors.min.js"></script>
        <script src="_switcher/script.js"></script>

        <div id="toTop"><a href="#">Subir</a></div>	
        <script type='text/javascript' src='js/jQuery.easing-1.35152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/jQuery.masonry.min5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/jQuery.imagesloaded.min5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/jQuery.infinitescroll.min5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/superfish5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/mediaelement/build/mediaelement-and-player.min5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/fancybox/jQuery.fancybox-1.3.4.pack5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/jQuery.mobilemenu5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/jQuery.fitvids5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/jQuery.flexslider-min5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/jQuery.placeholder.min5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/jflickrfeed.min5152.js?ver=1.0'></script>


    </body>
</html>